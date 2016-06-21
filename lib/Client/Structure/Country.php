<?php
/**
 * Country.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014-2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure;


use Rindeal\Allegro\Client\Structure\Internal\StructureBase;
use Rindeal\Allegro\Client\Structure\Internal\Property;

/**
 * Class Country
 *
 * @property int $id
 * @property string $code
 */
class Country extends StructureBase implements Stringable
{
    const CODE_PL = 'pl';
    const ID_PL   = 1;

    const CODE_BY = 'by';
    const ID_BY   = 22;

    const CODE_BG = 'bg';
    const ID_BG   = 34;

    const CODE_CZ = 'cz';
    const ID_CZ   = 56;

    const CODE_KZ = 'kz';
    const ID_KZ   = 107;

    const CODE_RU = 'ru';
    const ID_RU   = 168;

    const CODE_SK = 'sk';
    const ID_SK   = 181;

    const CODE_UA = 'ua';
    const ID_UA   = 209;

    const CODE_TEST = 'xx';
    const ID_TEST   = 228;

    protected static $countries = [
        self::ID_PL   => self::CODE_PL,
        self::ID_BY   => self::CODE_BY,
        self::ID_BG   => self::CODE_BG,
        self::ID_CZ   => self::CODE_CZ,
        self::ID_KZ   => self::CODE_KZ,
        self::ID_RU   => self::CODE_RU,
        self::ID_SK   => self::CODE_SK,
        self::ID_UA   => self::CODE_UA,
        self::ID_TEST => self::CODE_TEST
    ];

    /**
     * @param string|int $country one of  Country::ID_* or Country::CODE_* constants
     */
    public function __construct($country)
    {
        // validate and convert to self::ID_* constant
        if(is_string($country)){
            $country = self::code2Id($country);
        } else if (is_int($country)){
            self::validateId($country);
        } else {
            throw new \InvalidArgumentException('$country: Invalid type: '.gettype($country));
        }

        $that = $this;
        $this->properties = [
            'id' => new Property([
                'validator' => function($id) {
                    self::validateId($id);
                },
                'default' => $country,
                'lock' => true
            ]),
            'code' => new Property([
                'validator' => function($code) {
                    self::validateCode($code);
                },
                'getter' => function() use ($that){
                    return self::id2Code($that->id);
                },
                'setter' => function($code) use ($that){
                    $that->id = self::code2Id($code);
                },
                'lock' => true
            ])
        ];
    }

    /**
     * @param $code
     */
    public static function validateCode($code){
        if (!is_string($code) || !in_array($code, self::$countries)) {
            throw new \InvalidArgumentException('Unknown Allegro country code "'.$code.'"');
        }
    }

    /**
     * @param $id
     */
    public static function validateId($id){
        if (!is_int($id) || !isset(self::$countries[$id])) {
            throw new \InvalidArgumentException('Unknown Allegro country id "'.$id.'"');
        }
    }

    /**
     * @param string $countryCode
     */
    public static function code2Id($code)
    {
        self::validateCode($code);

        return array_search($code, self::$countries);
    }

    /**
     * Converts Allegro country code into Country::* const representation
     *
     * @param $countryId
     *
     * @return string
     */
    public static function id2Code($id)
    {
        self::validateId($id);

        return self::$countries[$id];
    }

    public function __toString()
    {
        return $this->code;
    }
}
