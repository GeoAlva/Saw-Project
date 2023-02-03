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
    <title>Purchase</title>
</head>

<body class="bg">
    <?php
        include "common/navbar.php";
    
?>
    <main>
        <div class="list">
            <h3>Purchase complete, feel free to <a href="evaluate.php">evaluate</a> our products :)</h3>
            <form action="evaluate.php" method="get">
            <div class="shoplist">
                <?php
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
                            echo    '<select id="rating" name="'.$elem["name"].'">';
                            echo    '<option value="1">1</option>';
                            echo    '<option value="2">2</option>';
                            echo    '<option value="3">3</option>';
                            echo    '<option value="4">4</option>';
                            echo    '<option value="5">5</option>';
                            echo    '</select>';
                            echo    '</div>';

                           }
                        
                        }
                ?>
                <button type="submit" class="confirmbutton" onclick="deletecart()">Conferma</button>
            </form>
            </div>
        </div>
    </main>


</body>

</html>