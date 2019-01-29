<?php

namespace models;

require_once 'DB.php';

class Level extends DB
{
    protected $dbname = 'levels';

    public function __construct()
    {
        parent::__construct();
    }

    public function create($level)
    {
        $this->database->getReference($this->dbname)->push($level);
    }

    public function getLevels()
    {
        return $this->database->getReference($this->dbname)->getSnapshot()->getValue();
    }
}