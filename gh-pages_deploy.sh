#!/bin/bash

[[ -z "${TRAVIS}" ]] && { echo "This is a build script for Travis CI only"; exit 1; }

required_php_ver="5.6"

[[ "${TRAVIS_PHP_VERSION}" != "${required_php_ver}" ]] && {
    echo "PHP version is ${TRAVIS_PHP_VERSION}, ${required_php_ver} required"
    exit 0
}
[[ "${TRAVIS_TAG}" == "" ]] && { echo "Git tag is empty"; exit 0; }
[[ "${TRAVIS_PULL_REQUEST}" != "false" ]] && { echo "Building pull request"; exit 0; }

set -u

repo_dir="${TRAVIS_BUILD_DIR}"
gh_pages_dir="$( mktemp -d )"
docs_base_dir="${gh_pages_dir}/docs/api"
apigen_base_dir="${docs_base_dir}/apigen"
phpdoc_base_dir="${docs_base_dir}/phpdoc"
docs_revision="${TRAVIS_TAG}"
docs_gen_src_dir="${repo_dir}/lib"
docs_gen_ignore_dirs=(
    "Client/HttpClient/Wsdl/*"
)

join_array () {
    local IFS="$1"
    shift
    echo "$*"
}


git clone --depth 1 --branch gh-pages --single-branch \
    https://github.com/${TRAVIS_REPO_SLUG}.git "${gh_pages_dir}" \
    >/dev/null 2>&1 || exit 1
cd "${gh_pages_dir}"
rm -rf "./.git"
git init
git checkout -b gh-pages

cd /tmp

## ApiGen

echo "--------------------------------------------------------------------------------"
echo "------------------------------       ApiGen       ------------------------------"
echo "--------------------------------------------------------------------------------"

apigen_dir="${apigen_base_dir}/${docs_revision}"
apigen="$( mktemp )"
apigen_cmd=(
    php "${apigen}"
    generate
    --source "${docs_gen_src_dir}"
    --destination "${apigen_dir}"
    --template-theme=bootstrap
    --debug
    --tree
    --exclude "$( join_array , "${docs_gen_ignore_dirs[@]}" )"
)

wget https://github.com/ApiGen/ApiGen/releases/download/v4.1.2/apigen.phar -O "$apigen" || exit 1

rm -rf "${apigen_dir}" || true
mkdir -p "${apigen_dir}"

echo "Running ApiGen: " "${apigen_cmd[@]}"
"${apigen_cmd[@]}" || exit 11

ln -f -s "$( basename "${apigen_dir}" )" "${apigen_base_dir}/latest"

## phpDocumentor

echo "--------------------------------------------------------------------------------"
echo "------------------------------    phpDocumentor   ------------------------------"
echo "--------------------------------------------------------------------------------"

phpdoc_dir="${phpdoc_base_dir}/${docs_revision}"
phpdoc="$( mktemp )"
phpdoc_cmd=(
    php "${phpdoc}"
    run
    --directory "${docs_gen_src_dir}"
    --target "${phpdoc_dir}"
    --no-interaction
    --visibility "public,protected"
    --sourcecode
    --cache-folder "/tmp/phpdoc_cache"
    --ignore "$( join_array , "${docs_gen_ignore_dirs[@]}" )"
)

wget https://github.com/phpDocumentor/phpDocumentor2/releases/download/v2.9.0/phpDocumentor.phar -O "$phpdoc" || exit 1

rm -rf "$phpdoc_dir" || true
mkdir -p "$phpdoc_dir"

echo "Running phpDocumentor: " "${phpdoc_cmd[@]}"
"${phpdoc_cmd[@]}" || exit 22

ln -f -s "$( basename "$phpdoc_dir" )" "${phpdoc_base_dir}/latest"

## Push

cd "${gh_pages_dir}"

git add .
git commit -m "API docs regenerated - ${TRAVIS_TAG}

tag: ${TRAVIS_TAG}
build number: ${TRAVIS_JOB_NUMBER}
build id: ${TRAVIS_JOB_ID}
"
git push -f "https://${GH_TOKEN}@github.com/${TRAVIS_REPO_SLUG}" gh-pages:gh-pages >/dev/null 2>&1 || exit 126

