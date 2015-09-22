<?php

class Model_main extends Model {

    public function get_contacts() {
        require_once "application/database/config.php";
        require_once "application/database/connect.php";
        $query = "SELECT * FROM contacts";
        $result = $mysqli->query($query);
        if (!$result) {
        }else {
            $contacts = array();
            $i = 0;
            while($contact = $result->fetch_assoc()){
                $contacts[$i] = $contact;
                $i++;
            }
            return $contacts;
        }
    }

}
?>