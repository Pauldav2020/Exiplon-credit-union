<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', 'root');
    define('DB', 'swiftBankDatabase2');
    $conn = new mysqli(HOST, USER, PASS, DB);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
?>
