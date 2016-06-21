<?php
/**
 * SoapClientBase.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\HttpClient;


class SoapClientBase extends \SoapClient
{

    public function __construct($wsdl, $options = null)
    {
//        $implicit_options = [
//            'typemap' => [
//                [
//                    'type_ns'   => 'http://www.w3.org/2001/XMLSchema',
//                    'type_name' => 'long',
//                    'to_xml'    => __CLASS__.'::to_long_xml',
//                    'from_xml'  => __CLASS__.'::from_long_xml',
//                ],
//            ]
//        ];


        // BEWARE: following lines implement a very dirty workaround due to a PHP bug (https://bugs.php.net/bug.php?id=48717)

//        $DEFAULT_WSDL_CACHE_TTL = 10*60;
//        $DEFAULT_WSDL_CACHE_DIR = sys_get_temp_dir();
//
//        $wsdl_cache_ttl = ini_get('soap.wsdl_cache_ttl');
//        if (!is_numeric($wsdl_cache_ttl) || $wsdl_cache_ttl < 60) {
//            $wsdl_cache_ttl = $DEFAULT_WSDL_CACHE_TTL;
//        }
//
//        $wsdl_cache_dir = realpath(ini_get('soap.wsdl_cache_dir'));
//        if (!is_writable($wsdl_cache_dir)) {
//            $wsdl_cache_dir = $DEFAULT_WSDL_CACHE_DIR;
//        }
//        if(!is_writable($wsdl_cache_dir)){
//            throw new RuntimeException('Neither `soap.wsdl_cache_dir` nor system temporary directory is writable!');
//        }
//
//        $wsdl_filename  = hash('sha256', $this->baseUrl) . '.wsdl.tmp';
//        $wsdl_file_path = $wsdl_cache_dir . DIRECTORY_SEPARATOR . $wsdl_filename;
//
//        $this->client->getLogger()->debug('wsdl', [
//                                                    '$wsdl_file_path' => $wsdl_file_path,
//                                                    '$wsdl_cache_ttl' => $wsdl_cache_ttl,
//                                                    'size'            => @(filesize($wsdl_file_path)/1024)
//                                                ]
//        );
//
//        // check if cached wsdl is valid
//        if (!file_exists($wsdl_file_path) ||
//            (time() - filemtime($wsdl_file_path)) >= $wsdl_cache_ttl || // file expired
//            filesize($wsdl_file_path) < 1024 // filesize is invalid
//        ) {
//            // re-download wsdl
//            $start = microtime(true);
//            $wsdl  = file_get_contents($this->baseUrl);
//            if($wsdl == false)
//                throw new RuntimeException("Couldn't retrieve WSDL -> bad URL '".$this->baseUrl."' or network error");
//            $wsdl  = str_replace('"xsd:long"', '"xsd:float"', $wsdl); // and here it is, the evil
//            file_put_contents($wsdl_file_path, $wsdl);
//            $this->client->getLogger()->debug('WSDL download',
//                                              [
//                                                  'size'        => round(filesize($wsdl_file_path)/1024, 1),
//                                                  'elapsedTime' => (microtime(true) - $start)
//                                              ]
//            );
//        }
//        $this->soapClient = new SoapClient(
//            'file:///' . $wsdl_file_path,
//            [
//                'encoding'           => 'UTF-8',
//                'compression'        => SOAP_COMPRESSION_ACCEPT|SOAP_COMPRESSION_GZIP,
//                // cache in memory as we still have to store wsdl on disk manually
//                'cache_wsdl'         => WSDL_CACHE_DISK,
//                'trace'              => true, // enables __getLastResponse()/__getLastRequest() functions
//                'user_agent'         => $this->params->userAgent,
//                'features'           => SOAP_SINGLE_ELEMENT_ARRAYS,
//                'connection_timeout' => $this->params->connectionTimeout,
//            ]
//        );

//        $options_ = array_merge($implicit_options, $options_);
        parent::__construct($wsdl, $options);
    }

//    public static function to_long_xml($long) {
//        return '<long>'.$long.'</long>';
//    }
//
//    public static function from_long_xml($xml) {
//        return strip_tags($xml);
//    }
}
