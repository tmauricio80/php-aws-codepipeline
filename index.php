<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
 
$date = Carbon::now();

echo $date->toDayDateTimeString(). PHP_EOL;
echo 'THis is a sample test';
