<?php

use models\Question;
use models\Category;
use models\Level;

require 'models/Question.php';
require 'models/Level.php';
require 'models/Category.php';

if ($_POST) {
    if (!array_key_exists('action', $_POST))
        $_POST['action'] = 'question';
    switch ($_POST['action']){
        case 'category':
            $model = new Category();
            return $model->create($_POST["data"]);
        case 'level':
            $model = new Level();
            return $model->create($_POST["data"]);
        default:
            $model = new Question();
            $model->create($_POST);
            break;
    }
}