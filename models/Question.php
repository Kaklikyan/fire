<?php

namespace models;

require_once 'DB.php';


class Question extends DB
{
    protected $dbname = 'questions';

    public function __construct()
    {
        parent::__construct();
    }

    public function create($questions)
    {
        $this->database->getReference($this->dbname)->push($questions);
    }

    public function getQuestions()
    {
        return $this->database->getReference($this->dbname)->getSnapshot()->getValue();
    }

}