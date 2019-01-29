<?php

include '../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$acc = ServiceAccount::fromJsonFile(__DIR__ . '/config/fir-project-754aa-9f6c4bd00888.json');
$firebase = (new Factory)->withServiceAccount($acc)->create();
$database = $firebase->getDatabase();