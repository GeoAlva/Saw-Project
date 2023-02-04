<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/78ca362c23.js" crossorigin="anonymous"></script>
    <script src="js/printerror.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/shop.css">
    <title>Registration</title>
</head>
<body>
<?php

    if(!isset($_POST["submit"]))
        echo '<script>printerrorSignup("Please submit data from form");</script>'; 

    if(empty($_POST["firstname"])||empty($_POST["lastname"])||empty($_POST["email"])||empty($_POST["pass"])||empty($_POST["confirm"]))
        echo '<script>printerrorSignup("Missing data, please insert");</script>';

        $firstname= htmlspecialchars(trim($_POST["firstname"])); 
        $lastname=htmlspecialchars(trim($_POST["lastname"]));
        $email=htmlspecialchars(filter_var(trim($_POST["email"]),FILTER_VALIDATE_EMAIL));
        $password=htmlspecialchars(trim($_POST["pass"]));
        $confirm=htmlspecialchars(trim($_POST["confirm"]));

        if(strlen($firstname)<3 || strlen($firstname)>30)
            echo '<script>printerrorSignup("firstname must be between 3 and 30 characters long");</script>';

        if(strlen($lastname)<3 ||strlen($lastname)>30)
            echo '<script>printerrorSignup("lastname must be between 3 and 30 characters long");</script>';

        if(strlen($email)>100)
            echo '<script>printerrorSignup("please enter a valid email");</script>';

        if(strlen($password)<6 || strlen($confirm)<6 || strlen($password)>30 || strlen($confirm)>30)
            echo '<script>printerrorSignup("password must be between 6 and 30 characters long");</script>';

        if(strcmp($password,$confirm))
            echo '<script>printerrorSignup("Passwords do not match");</script>';

        $hash=password_hash($password,PASSWORD_DEFAULT);

        include "common/dbconnection.php";

        try{ $stmt = $conn->prepare("INSERT INTO users (firstname,lastname,email,pass)
            VALUES (:firstname,:lastname,:email,:pass)");
    
            $stmt->bindParam(":firstname",$firstname);
            $stmt->bindParam(":lastname",$lastname);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":pass",$hash);
            $stmt->execute();
            echo "Welcome ".$firstname."!<br>";
            }catch(PDOException $e){
                
                if($e->getCode()==23000)
                    echo '<script>printerrorSignup("Email already in use");</script>';
                else
                    echo '<script>printerrorSignup("Unexpected Error, try again later");</script>';
            }
            $conn=null;
            header("refresh:0; url= login.php");
?>
</body>
</html>

