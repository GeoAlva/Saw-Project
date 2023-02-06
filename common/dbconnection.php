<?php
    $servername = "localhost";
    //$dbusername = "geo";
    //$dbpassword = "geo";
    $dbusername = "S4523400";      
    $dbpassword = "cZ7.?8fF";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=S4523400",$dbusername,$dbpassword);
        //$conn = new PDO("mysql:host=$servername;dbname=carrefive",$dbusername,$dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected Succesfully <br>";
        
    } catch (PDOException $e) {
        echo "Connection Failed, Try later".$e->getMessage();
    }

?>
