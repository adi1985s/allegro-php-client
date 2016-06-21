<?php
/**
 * hash_password.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

use Rindeal\Allegro\Client\ApiCredentials;

require_once __DIR__.'/../vendor/autoload.php';

echo 'Password: ';
$pass = trim(fgets(STDIN));
printf("Hashed password: %s\n", ApiCredentials::hashPassword($pass));
