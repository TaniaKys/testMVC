<?php

class Controller_main extends Controller {

    function __construct() {
        $this->model = new Model_main();
        $this->view = new View();
    }
    
    function action_index() {
        $contacts = $this->model->get_contacts();
        
        $this->view->generate('main_view.php', 'template_view.php', $contacts);
    }

}

?>
