<?php
    $servername = "localhost";
    $dbusername = "geo";      //TODO
    $dbpassword = "geo";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=carrefive",$dbusername,$dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected Succesfully <br>";
        
    } catch (PDOException $e) {
        echo "Connection Failed, Try later".$e->getMessage();
    }

?>
