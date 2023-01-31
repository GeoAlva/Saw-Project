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
    <title>Carrefive - search</title>
</head>

<body>
<?php
        include "common/navbar.php";
    ?>
    <main>
        <div class="list">
            <h3>Search Result</h3>
            <div class="shoplist">
                <?php
                    include("common/dbconnection.php");
                    
                    $input = '%'.$_GET["search"].'%';

                    try {
                        $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE :src");
                        $stmt->bindParam(":src",$input);
                        $stmt->execute();
                        $rows= $stmt->fetchAll();
                        if(count($rows)==0)
                        echo "<p> No product found for \"".$_GET["search"]."\"</p>";
                        
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }

                    foreach($rows as $elem){
                        echo    "<div class='shop_elem'>";
                        $product = explode("-",$elem["name"]);
                        //print("src='images/".$product[0]."/".$product[1].".png'");
                        echo        "<img src='images/".$product[0]."/".$product[1].".png'>";
                        $product[1]=str_replace("_"," ",$product[1]);
                        echo        "<h5>".$product[1]."</h5>";
                        echo        "<div>".$elem["price"]."</div> ";
                        echo        '<div class="quantity_div">';
                        echo        '<button type="button" class="minus_button" name="minus_button">-</button>';    
                        echo        '<input type="text" class="quantity" name="quantita" value="1">';
                        echo        '<button type="button" class="plus_button" name="plus_button">+</button>';
                        echo        '</div>';
                        echo        '<button type="submit" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>';
                        echo    "</div>";
                    }
                    $conn = null;
                ?>
            </div>
        </div>
    <main>
</body>

</html>