<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/78ca362c23.js" crossorigin="anonymous"></script>
    <script src="js/addtocart.js"></script> 
    <title>Purchase complete</title>
</head>

<body class="bg">
    <?php
    include "common/navbar.php";
    ?>

    <div class="container">
        <h3 align="center">Purchase Complete!</h3>
        <p>Feel free to evaluate our products</p>
        <div class="start">
        <a href="purchase.php"><i class="fa-regular fa-star"></i> &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
        </div>
        <p>Or go back to the main page</p>
        <div class="start">
        <a href="noeval.php"><i class="fa-solid fa-cart-shopping"></i> &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
        </div>
    </div>

    <?php
    include "common/footer.php";
    ?>

</body>

</html>