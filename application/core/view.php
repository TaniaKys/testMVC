<?php

class View {

    function generate($content_view, $template_view, $data) {
       
        $result_msg = $data;
        include 'application/views/' . $template_view;
    }

}
?>

