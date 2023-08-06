<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    //Connecting to database.
    try {
        $conn = new PDO("mysql:host=$servername;dbname=inventory",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo'Connected successfully.';
    } catch (\Exception $e) {
        
        $error_message = $e->getMessage();
    }

?>