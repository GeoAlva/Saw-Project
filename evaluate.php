<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation</title>
</head>
<body>
    <?php
    include("common/dbconnection.php");
    $cart=explode(" ",$_COOKIE["cart"]);
    print_r($_GET);
        foreach($cart as $elem){
            $product=explode(",",$elem);
            try {
                $stmt = $conn->prepare("INSERT INTO `reviews`(`userid`, `product`, `rating`) VALUES (:user,:product,:rating)");
                $stmt->bindParam(":user",$_SESSION["uid"]);
                $stmt->bindParam(":product",$product[0]);
                $stmt->bindParam(":rating",$_GET[$product[0]]);
                $stmt->execute();
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            header("refresh:0;url=confirm.php");
               }
    ?>
</body>
</html>