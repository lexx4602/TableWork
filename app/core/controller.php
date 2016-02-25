<?php

/**
 * Created by PhpStorm.
 * User: a.borisov
 * Date: 25.02.2016
 * Time: 12:44
 */
class Controller {
    public $model;
    public $view;
    function __construct()
    {
        $this -> view = new View();
    }
    function action_index()
    {
    }
}