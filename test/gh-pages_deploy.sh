#!/bin/bash - 

script_dir="$( dirname "${BASH_SOURCE[0]}" )"

export TRAVIS=true
export TRAVIS_PHP_VERSION=5.6
export TRAVIS_TAG=v0.0.0
export TRAVIS_PULL_REQUEST=false
export TRAVIS_REPO_SLUG=rindeal/allegro-php-client
export TRAVIS_BUILD_DIR="$( realpath "$script_dir/.." )"
export TRAVIS_JOB_NUMBER=$RANDOM
export TRAVIS_JOB_ID=$RANDOM.$RANDOM


"$TRAVIS_BUILD_DIR/gh-pages_deploy.sh"
echo "Script exited with status $?"
