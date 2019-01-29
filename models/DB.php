<?php

namespace models;

require dirname(__DIR__).'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


class DB
{
    protected $database;

    public function __construct()
    {
        $acc = ServiceAccount::fromJsonFile(dirname(__DIR__ ) . '/config/fir-project-754aa-9f6c4bd00888.json');
        $firebase = (new Factory)->withServiceAccount($acc)->create();
        $this->database = $firebase->getDatabase();
    }
}