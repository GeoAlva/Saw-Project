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
    <link rel="stylesheet" href="css/shop.css">
    <script src="https://kit.fontawesome.com/78ca362c23.js" crossorigin="anonymous"></script>
    <script src="js/quantitybuttons.js"></script>
    <script src="js/addtocart.js"></script>
    <title>My Orders</title>
</head>

<body class="bg">
    <?php
        include "common/navbar.php";
    ?>
    <main>
        <div class="list">
            <h3>My orders</h3>
            <div class="shoplist">
                <?php
                    include("common/dbconnection.php");

                    try {
                        $stmt = $conn->prepare("SELECT * FROM purchases WHERE iduser=:iduser");
                        $stmt->bindParam(":iduser",$_SESSION["uid"]);
                        $stmt->execute();
                        $rows= $stmt->fetchAll();
                        if(count($rows)==0){
                        echo "<p> No orders found</p>";
                        die();}
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }

                    $i=1;
                    foreach($rows as $elem){
                        echo    "<div class='shop_elem'>";
                        $product = explode("-",$elem["product"]);
                        echo        "<img src='images/".$product[0]."/".$product[1].".png'>";
                        $product[1]=str_replace("_"," ",$product[1]);
                        echo        "<h5>".$product[1]."</h5>";
                        $rating=$elem["rating"];
                        echo    '<div class="rating">';
                        for($z=1;$z<=$rating;$z++){
                            echo '<span class="fa fa-star checked"></span>';
                        }
                        for($z=5;$z>$rating;$z--){
                            echo '<span class="fa fa-star"></span>';
                        }
                        echo '</div>';
                        echo '</div>';
                        $i++;
                    }
                    $conn = null;
                ?>
            </div>
        </div>
        <main>
</body>

</html>