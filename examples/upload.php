<?php
require __DIR__.'/../vendor/autoload.php';

use ridesoft\Azure\AzureIO;

$config = require_once 'src/config/config.php';
$azure = new AzureIO($config['azure']['connectionstring']);

$azure->copy('pdf', 'vol_07_sat.pdf', '/var/www/html/test/e3e50cf02910fe819538030ce2dd498f/tmp/vol_07_sat.pdf');
