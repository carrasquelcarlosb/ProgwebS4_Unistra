<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "app/model/Model.php";
class Controller
{
    public $model;
    public function constructor()
    {
        $this->model = new Model();
    }

    public function index()
    {
        echo 'I am the Homepage';
    }

    public function show(int $id)
    {
        echo "I am the article";
    }

    public function isLoggedIn()
    {
        $result = $this->model->getlogin(); // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
        if ($result == 'login') {
            include_once $_SERVER['DOCUMENT_ROOT'] . 'app/view/admin/dashboard.php';
        } else {
            include_once $_SERVER['DOCUMENT_ROOT'] . 'app/view/admin/login.php';
        }
    }
}
