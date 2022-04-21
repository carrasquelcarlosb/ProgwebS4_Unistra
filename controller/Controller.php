<?php
require_once dirname(__DIR__, 1) . "/model/Model.php";
    //Load the model and the view
    class Controller {
        public function model($model) {
            //Instantiate model
            return new $model();
        }

    public function show(int $id)
    {
        echo "I am the article";
    }

    public function isLoggedIn()
    {
        $result = $this->model->getlogin(); // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
        if ($result == 'login') {
            include_once dirname(__DIR__,1) . 'view/dashboard.php';
        } else {
            include_once dirname(__DIR__,1) . 'view/login.php';
        }
    }
}
