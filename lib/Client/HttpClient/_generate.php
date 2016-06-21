<?php

/**
 * Script to convert WSDL > PHP
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

require_once __DIR__.'/../../../vendor/autoload.php';

define('OUTPUT_DIR', __DIR__.'/Wsdl');


// old files MUST be deleted, before regenerating new ones
$files = glob(OUTPUT_DIR.'/*');
foreach ($files as $file) {
    if (!is_dir($file)) {
        unlink($file);
    }
}


$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config([
        // you can change this to any SoapClient you like
        'soapClientClass' => '\\Rindeal\\Allegro\\Client\\HttpClient\\SoapClientBase',

        // DO NOT CHANGE OPTIONS BELOW

        'inputFile' => 'https://webapi.allegro.pl/service.php?wsdl',

        'outputDir' => OUTPUT_DIR,
        'namespaceName' => 'Rindeal\\Allegro\\Client\\HttpClient\\Wsdl',
        // using constructors for settings parameters should be avoided as it's not much future-proof
        'constructorParamsDefaultToNull' => true
    ])
);
