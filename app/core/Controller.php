<?php

class Controller
{
    public function view($view, $data = [])
    {
        if (!isset($_SESSION['username'])) {
            // session_start();
            require_once '../app/view/login/index.php';
        } else {
            require_once '../app/view/' . $view . '.php';
        }
    }

    public function model($model)
    {
        require_once '../app/model/' . $model . '.php';
        return new $model;
    }
}
