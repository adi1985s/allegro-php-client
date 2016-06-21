<?php
/**
 * Helpers.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Utils;


class Helpers
{

    /**
     * @param string $class
     * @param string $interface
     *
     * @return bool
     */
    public static function implementsInterface($class, $interface)
    {
        return (new \ReflectionClass($class))->implementsInterface($interface);
    }

    public static function updateOptions(array $oldOptions, array $newOptions)
    {
        return array_merge($oldOptions, array_intersect_key($newOptions, $oldOptions));
    }


    /**
     * Sanitize a string so that it can be used in paths
     *
     *
     * @return string sanitized string
     * @link http://stackoverflow.com/a/2727693
     * @internal
     */
    protected static function sanitize($str)
    {
        $str = self::replaceAccentedChars($str);
        $str = preg_replace(
            [
                '/\s/',
                '/\.[\.]+/',
                '/[^\w_\.\-]/'
            ], [
                '_',
                '.',
                ''
            ],
            $str
        );

        return $str;
    }

    /**
     * @param $str
     *
     * @return mixed
     * @link http://stackoverflow.com/a/17186583
     * @internal
     */
    protected static function replaceAccentedChars($str)
    {
        static $patterns = [];
        static $replacements = [];

        if (empty($patterns) || empty($replacements)) {
            $charTable = [
                // Lower case
                'a'  => ['0105', '00E0', '00E1', '00E2', '00E3', '00E4', '00E5'],
                'c'  => ['00E7', '010D', '0107'],
                'd'  => ['010F'],
                'e'  => ['00E8', '00E9', '00EA', '00EB', '011B', '0119'],
                'i'  => ['00EC', '00ED', '00EE', '00EF'],
                'l'  => ['0142', '013E', '013A'],
                'n'  => ['00F1', '0148'],
                'o'  => ['00F2', '00F3', '00F4', '00F5', '00F6', '00F8'],
                'r'  => ['0159', '0155'],
                's'  => ['015B', '0161'],
                'ss' => ['00DF'],
                't'  => ['0165'],
                'u'  => ['00F9', '00FA', '00FB', '00FC', '016F'],
                'y'  => ['00FD', '00FF'],
                'z'  => ['017C', '017A', '017E'],
                'ae' => ['00E6'],
                'oe' => ['0153', '00F6'],
                // Upper case
                'A'  => ['0104', '00C0', '00C1', '00C2', '00C3', '00C4', '00C5'],
                'C'  => ['00C7', '010C', '0106'],
                'D'  => ['010E'],
                'E'  => ['00C8', '00C9', '00CA', '00CB', '011A', '0118'],
                'L'  => ['0141', '013D', '0139'],
                'N'  => ['00D1', '0147'],
                'O'  => ['00D3'],
                'R'  => ['0158', '0154'],
                'S'  => ['015A', '0160'],
                'T'  => ['0164'],
                'U'  => ['00D9', '00DA', '00DB', '00DC', '016E'],
                'Z'  => ['017B', '0179', '017D'],
                'AE' => ['00C6'],
                'OE' => ['0152', '00D6'],
            ];
            $patterns     = [];
            $replacements = [];

            foreach ($charTable as $char => $codes) {
                $codes = implode('\x', array_map(function($value) { return '{'.$value.'}'; }, $codes));
                array_push($patterns, sprintf('/[\x%s]/u', $codes));
                array_push($replacements, $char);
            }
        }

        $retVal = preg_replace($patterns, $replacements, $str);

        $callbackHandler = function(array $matches) {
            return $matches[1].strtolower($matches[2]).$matches[3];
        };
        preg_replace_callback('/\b([A-Z])([A-Z])([a-z]{1,})/', $callbackHandler, $retVal);

        return $retVal;
    }
}
