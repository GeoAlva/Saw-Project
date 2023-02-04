<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertintodb</title>
    <script src="js/addtocart.js"></script> 
</head>
<body>
    <?php

if(!isset($_SESSION["login"])){
    header("refresh:0;url=form_login.php");
}
if(!isset($_COOKIE["cart"])||$_COOKIE["cart"]==null){
    die();
}

include("common/dbconnection.php");
    $cart=explode(" ",$_COOKIE["cart"]);
        foreach($cart as $elem){
            $product=explode(",",$elem);
            try {
                $stmt = $conn->prepare("INSERT INTO purchases(iduser, product,quantity) VALUES (:user,:product,:quantity)");
                $stmt->bindParam(":user",$_SESSION["uid"]);
                $stmt->bindParam(":product",$product[0]);
                $stmt->bindParam(":quantity",$product[1]);
                $stmt->execute();
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
               }              
    ?>
    <script>
        deletecart()
        window.location.replace("main.php")
    </script>

</body>
</html>