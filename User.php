<?php

require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class User {
    protected $database;
    protected $dbname = 'users';

    public function __construct()
    {
        $acc = ServiceAccount::fromJsonFile(__DIR__ . '/config/fir-project-754aa-9f6c4bd00888.json');
        $firebase = (new Factory)->withServiceAccount($acc)->create();
        $this->database = $firebase->getDatabase();
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

 /*   public function delete(int $userID)
    {
        if (empty($userID) || !isset($userID)) { return false; }
        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
            $this->database->getReference($this->dbname)->getChild($userID)->remove();
            return true;
        } else {
            return false;
        }
    }*/
}
//$users = new User();
//var_dump($users->insert([
//    '1' => 'John',
//    '2' => 'Doe',
//    '3' => 'Smith'
//]));
//var_dump($users->get(1));
//var_dump($users->delete(2));

//$users->get();