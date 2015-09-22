<?php

class Controller_add extends Controller {

    function __construct() {
        $this->model = new Model_add();
        $this->view = new View();
    }

    function action_index() {
        $result_msg = "";
        if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"])) {
            $name = $_POST["name"];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $result_msg = $this->model->add_contact($name, $email, $phone);
            
        }
        $this->view->generate('add_view.php', 'template_view.php', $result_msg);
    }

}

?>
