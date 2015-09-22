<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css" />
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id='main'>
            <div id='menu'>
                <a href='./main'>Contacts</a>
                <a href='./add'>Add contact</a>
                <a href='./main'>Manage contacs</a>
            </div>
            <div id='content'>
                <?php
                include 'application/views/' . $content_view;
                ?>
            </div>
        </div>
    </body>
</html>
