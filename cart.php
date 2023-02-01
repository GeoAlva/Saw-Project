<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/shop.css">
    <script src="https://kit.fontawesome.com/78ca362c23.js" crossorigin="anonymous"></script>
    <script src="js/quantitybuttons.js"></script>
    <script src="js/addtocart.js"></script> 
    <title>Cart</title>
</head>

<body class="bg">
    <?php
        include "common/navbar.php";
        if(!isset($_SESSION["login"])){
            header("refresh:0;url=form_login.php");
        }
    ?>
    <main>
        <div class="list">
            <h3>Cart</h3>
            <div class="shoplist">
            </div>
        </div>
    </main>

</body>

</html>