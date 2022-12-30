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
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius assumenda, aliquid harum impedit repellendus
            ut consequuntur adipisci soluta eligendi, porro autem minima eveniet dicta. Odit ipsum placeat laborum
            delectus obcaecati.</p>
        <br><div class="start">
        <a href="#"><i class="fa-sharp fa-solid fa-arrow-right"></i></a>
        </div>
    </div>

    <?php
    include "common/footer.php";
    ?>

</body>

</html>