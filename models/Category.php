<?php

namespace models;

require_once 'DB.php';

class Category extends DB
{
    protected $dbname = 'categories';

    public function __construct()
    {
        parent::__construct();
    }

    public function create($category)
    {
        $this->database->getReference($this->dbname)->push($category);
        exit(json_encode($this->getCategories()));
    }

    public function getCategories()
    {
        return $this->database->getReference($this->dbname)->getSnapshot()->getValue();
    }

}