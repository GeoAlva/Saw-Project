<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/78ca362c23.js" crossorigin="anonymous"></script>
</head>
<body class="bg" >
    <?php
    include "common/navbar.php";
    if(isset($_SESSION["firstname"])){
    echo "welcome"+$_SESSION["firstname"];
    }
    ?>
    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quasi 
quisquam repudiandae animi vel similique ipsum laboriosam earum rem neque! Incidunt
 ullam saepe quidem pariatur? Doloribus ullam corporis obcaecati asperiores!</div>

    <?php
    include "common/footer.php"
    ?>
</body>
</html>