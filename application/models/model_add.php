<?php

class Model_add extends Model {

    public function add_contact($name, $email, $phone) {

        require_once "application/database/config.php";
        require_once "application/database/connect.php";
        $query_table = "CREATE TABLE IF NOT EXISTS contacts (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255), email VARCHAR(255), phone VARCHAR(255))";
        if (!$mysqli->query($query_table)) {
            return "Contact is not added: " . $mysqli->error;
        }
        $query_contact = "INSERT INTO contacts (name, email, phone) VALUES ('$name','$email','$phone')";
        if (!$mysqli->query($query_contact)) {
            return "Contact is not added: " . $mysqli->error;
        }
        return "Contact added";
    }

}
?>