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
    <title>Carrefive</title>
</head>

<body class="bg">
    <?php
    include "common/navbar.php";
    ?>

    <div class="container">
        <h3 align="center">Welcome!</h3>
        <p>Welcome to Carrefive, the new website of the new supermarket startup!
            We are excited to offer a simpler and more efficient online shopping experience for our customers.
            With our wide range of products and the convenience of home delivery, there's no need to leave your home to do your shopping.
            We are dedicated to providing excellent service and ensuring that every purchase is a positive experience.
            Visit our site and find out why we are the new go-to for online shopping!
            </p>
        <br><div class="start">
        <a href="main.php" class="noline" ><i class="fa-solid fa-cart-shopping"></i> &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
        </div>
    </div>

    <?php
    include "common/footer.php";
    ?>

</body>

</html>