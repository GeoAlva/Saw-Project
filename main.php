<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrefive Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/shop.css">
    <script src="https://kit.fontawesome.com/78ca362c23.js" crossorigin="anonymous"></script>
    <script src="js/quantitybuttons.js"></script>
    <script src="js/addtocart.js"></script> 
</head>
<body class="bg">
    <?php
        include "common/navbar.php";
    ?>

    <main>
        <div class="list">
            <h3>Pasta Time</h3>
            <div class="shoplist">
            <?php
                    include("common/dbconnection.php");
                    
                    try {
                        $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE '%Pasta%'");
                        $stmt->execute();
                        $rows= $stmt->fetchAll();
                        if(count($rows)==0)
                        echo "<p> No product found </p>";
                        
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    $i=1;
                    foreach($rows as $elem){
                        echo    "<div class='shop_elem'>";
                        $product = explode("-",$elem["name"]);
                        echo        "<img src='images/".$product[0]."/".$product[1].".png'>";
                        $product[1]=str_replace("_"," ",$product[1]);
                        echo        "<h5>".$product[1]."</h5>";
                        echo        "<div>".$elem["price"]."</div> ";
                        echo        '<div class="quantity_div">';
                        echo        '   <button type="button" onclick="decreaseQt(\''.$elem["name"].'\')" class="minus_button" name="minus_button">-</button>';    
                        echo        '   <input type="text" id="'.$elem["name"].'" class="quantity" name="quantita" value="1">';
                        echo        '   <button type="button" onclick="increaseQt(\''.$elem["name"].'\')" class="plus_button" name="plus_button">+</button>';
                        echo        '</div>';
                    if(!isset($_SESSION["login"]))
                        echo        '<button type ="button" onclick="location.href=\'form_login.php\'" class="cart_button" ><i class="fa-sharp fa-solid fa-cart-plus"></i></button>';
                    else                        
                        echo        '<button type="submit" onclick="addtocart(\''.$elem["name"].'\')" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>';
                        echo    "</div>";
                        $i++;
                    }
                ?>
            </div>
        </div>

        <div class="list">
            <h3>Condiments</h3>
            <div class="shoplist">
            <?php
                    try {
                        $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE '%Condimenti%'");
                        $stmt->execute();
                        $rows= $stmt->fetchAll();
                        if(count($rows)==0)
                        echo "<p> No product found </p>";
                        
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
                        echo        '   <button type="button" onclick="decreaseQt(\''.$elem["name"].'\')" class="minus_button" name="minus_button">-</button>';    
                        echo        '   <input type="text" id="'.$elem["name"].'" class="quantity" name="quantita" value="1">';
                        echo        '   <button type="button" onclick="increaseQt(\''.$elem["name"].'\')" class="plus_button" name="plus_button">+</button>';
                        echo        '</div>';
                    if(!isset($_SESSION["login"]))
                        echo        '<button type ="button" onclick="location.href=\'form_login.php\'" class="cart_button" ><i class="fa-sharp fa-solid fa-cart-plus"></i></button>';
                    else 
                        echo        '<button type="submit" onclick="addtocart(\''.$elem["name"].'\')" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>';
                        echo    "</div>";
                        $i++;
                    }
                ?>
            </div>
        </div>

        <div class="list">
            <h3>Animals</h3>
            <div class="shoplist">
            <?php        
                    try {
                        $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE '%Animali%'");
                        $stmt->execute();
                        $rows= $stmt->fetchAll();
                        if(count($rows)==0)
                        echo "<p> No product found </p>";
                        
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
                        echo        '   <button type="button" onclick="decreaseQt(\''.$elem["name"].'\')" class="minus_button" name="minus_button">-</button>';    
                        echo        '   <input type="text" id="'.$elem["name"].'" class="quantity" name="quantita" value="1">';
                        echo        '   <button type="button" onclick="increaseQt(\''.$elem["name"].'\')" class="plus_button" name="plus_button">+</button>';
                        echo        '</div>';
                    if(!isset($_SESSION["login"]))
                        echo        '<button type ="button" onclick="location.href=\'form_login.php\'" class="cart_button" ><i class="fa-sharp fa-solid fa-cart-plus"></i></button>';
                    else 
                        echo        '<button type="submit" onclick="addtocart(\''.$elem["name"].'\')" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>';
                        echo    "</div>";
                        $i++;
                    }
                ?>
            </div>
        </div>

        <div class="list">
            <h3>Cleaning</h3>
            <div class="shoplist">
            <?php
                    try {
                        $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE '%Pulizia%'");
                        $stmt->execute();   
                        $rows= $stmt->fetchAll();
                        if(count($rows)==0)
                        echo "<p> No product found </p>";
                        
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
                        echo        '   <button type="button" onclick="decreaseQt(\''.$elem["name"].'\')" class="minus_button" name="minus_button">-</button>';    
                        echo        '   <input type="text" id="'.$elem["name"].'" class="quantity" name="quantita" value="1">';
                        echo        '   <button type="button" onclick="increaseQt(\''.$elem["name"].'\')" class="plus_button" name="plus_button">+</button>';
                        echo        '</div>';
                    if(!isset($_SESSION["login"]))
                        echo        '<button type ="button" onclick="location.href=\'form_login.php\'" class="cart_button" ><i class="fa-sharp fa-solid fa-cart-plus"></i></button>';
                    else 
                        echo        '<button type="submit" onclick="addtocart(\''.$elem["name"].'\')" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>';
                        echo    "</div>";
                        $i++;
                    }
                    $conn = null;
                ?>
            </div>
        </div>
    </main>

    <?php
        include "common/footer.php";
    ?>


</body>
</html>