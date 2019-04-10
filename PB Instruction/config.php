<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pb_instruktur";

    $db = new mysqli($servername, $username, $password, $dbname);
    if(!$db){
        exit();
    } 
    
?>