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
                <?php
                        if(!isset($_COOKIE["cart"])||$_COOKIE["cart"]==null){
                            echo "<h4>Empty cart<h4>";
                            die();
                        }

            include("common/dbconnection.php");
                    $cart=explode(" ",$_COOKIE["cart"]);
                    foreach($cart as $elem){
                        $item=explode(",",$elem);
                        $product = $item[0];
                        $quantity = $item[1];

                        try {
                            $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE '$product'");
                            $stmt->execute();
                            $rows= $stmt->fetchAll();
                        } catch (PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                    

                    foreach($rows as $elem){
                        echo    "<div class='shop_elem'>";
                        $product = explode("-",$elem["name"]);
                        echo        "<img src='images/".$product[0]."/".$product[1].".png'>";
                        $product[1]=str_replace("_"," ",$product[1]);
                        echo        "<h5>".$product[1]."</h5>";
                        echo        "<div>".$elem["price"]."</div> ";
                        echo        '<div class="quantity_div">';  
                        echo        '   <input type="text" id="'.$elem["name"].'" class="quantity" name="quantita" value="'.$quantity.'">';
                        echo        '</div>';
                    if(!isset($_SESSION["login"]))
                        echo        '<button type ="button" onclick="location.href=\'form_login.php\'" class="cart_button" ><i class="fa-sharp fa-solid fa-cart-plus"></i></button>';
                    else
                        echo        '<button type="submit" onclick="addtocart(\''.$elem["name"].'\')" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>';
                        echo    "</div>";
                    }
                    }

                    
                    ?>

                    <a href="purchase.php"><button onclick="purchase()">Completa l'acquisto</button></a>
            </div>
        </div>
    </main>

</body>

</html>