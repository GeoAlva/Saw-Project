<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation</title>
</head>
<body>
    <?php

if(!isset($_SESSION["login"])){
    header("refresh:0;url=form_login.php");
}
if(!isset($_COOKIE["cart"])||$_COOKIE["cart"]==null){
    echo "<h4>Empty cart<h4>";
    die();
}

include("common/dbconnection.php");
    $cart=explode(" ",$_COOKIE["cart"]);
        foreach($cart as $elem){
            $product=explode(",",$elem);
            try {
                $stmt = $conn->prepare("INSERT INTO purchases(iduser, product,quantity, rating) VALUES (:user,:product,:quantity,:rating)");
                $stmt->bindParam(":user",$_SESSION["uid"]);
                $stmt->bindParam(":product",$product[0]);
                $stmt->bindParam(":quantity",$product[1]);
                $stmt->bindParam(":rating",$_GET[$product[0]]);
                $stmt->execute();
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            header("refresh:0;url=confirm.php");
               }              
    ?>
</body>
</html>