<?php

$mysqli = new mysqli(HOST, USER, PASSWORD);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$result = $mysqli->select_db("DB");
if($result == false){
    $mysqli->query("CREATE DATABASE ".DB);
    $result = $mysqli->select_db(DB);
}

$mysqli->query("SET NAMES 'utf8'");
?>
