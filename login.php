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
    <title>Login</title>
</head>

<body>
    <?php
        if(!isset($_POST["submit"]))
            echo '<script>printerrorLogin("Please submit data from form");</script>'; 

        if(empty($_POST["email"])||empty($_POST["pass"]))
            echo '<script>printerrorLogin("Check input data , some missing");</script>'; 

        $email=htmlspecialchars(filter_var(trim($_POST["email"]),FILTER_VALIDATE_EMAIL));
        $password=htmlspecialchars(trim($_POST["pass"]));

        if(strlen($email)>100)
            echo '<script>printerrorLogin("please enter a valid email");</script>'; 

        if(strlen($password)<6  || strlen($password)>30)
            echo '<script>printerrorLogin("password must be between 6 and 30 characters long");</script>'; 

        include "common/dbconnection.php";

        try {
            $stmt = $conn->prepare("SELECT * FROM users WHERE email='".$email."' ;");
            $stmt->execute();

            $row= $stmt->fetch();

            if($row["email"]==$email && password_verify($password,$row["pass"])){
                $_SESSION["login"] = true;
                $_SESSION["uid"] = $row["id"];
                $_SESSION["firstname"] = $row["firstname"];
                $_SESSION["lastname"] =$row["lastname"];
                $_SESSION["email"] = $row["email"];
                
                setcookie('cart','',time()+3600,'/');
                header("refresh:0; url= main.php");
            }
            else if($row["email"]==$email && !password_verify($password,$row["pass"]))
                        echo '<script>printerrorLogin("Error: Wrong Password");</script>';    
            else
                        echo '<script>printerrorLogin("Error: cannot find any user");</script>'; 
          } catch(PDOException $e) {   
            echo '<script>printerrorLogin("Unexpected Error, try again later");</script>'; 
          }
          $conn = null;

?>
</body>