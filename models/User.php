<?php

namespace models;

require_once 'DB.php';

class User extends DB {

    protected $dbname = 'users';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAdmin()
    {
        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild(1)){
            return $this->database->getReference($this->dbname)->getChild(1)->getValue();
        } else {
            return false;
        }
    }

    public function insert()
    {
        if (!$this->database->getReference($this->dbname)->getSnapshot()->hasChild(1)) {
            $this->database->getReference()->getChild($this->dbname)->getChild(1)->set([
                'login' => 'fire-admin@gmail.com',
                'password' => 'secret'
            ]);
            return true;
        }
        return false;
    }
}