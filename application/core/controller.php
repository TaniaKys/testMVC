<?php

class Controller {

    public $model;
    public $view;
    public $request;

    function __construct() {
        $this->view = new View();
        $this->request = new Request();
    }

    function action_index() {
        
    }

}
?>

