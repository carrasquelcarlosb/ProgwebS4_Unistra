<?php
    //Load the models and the views
    class Controller {
        public function model($model) {
            require_once dirname(__DIR__) . '/models/' . $model . '.php';
            //Instantiate models
            return new $model();
        }

        public function view($view, $data = []) {
            if (file_exists(dirname(__DIR__) . "/views/" . $view . '.php')) {
                require_once dirname(__DIR__) . "/views/" . $view . '.php';
            } else {
                die("View doesn't exist");
            }
        }



    }
