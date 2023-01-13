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

    <title>Document</title>
</head>

<body>
    <?php
        if(!isset($_POST["submit"])){
            echo "Submit data from form";
            echo "<a href=\"form_login.php\"> Go back</a><br>";
            exit();
        }

        if(empty($_POST["email"])||empty($_POST["pass"])){
            echo "Check input data , some missing";	
            echo "<a href=\"form_login.php\"> Go back</a><br>";
            exit();
        };



        $email=htmlspecialchars(filter_var(trim($_POST["email"]),FILTER_VALIDATE_EMAIL));
        $password=htmlspecialchars(trim($_POST["pass"]));


        if(strlen($email)>100){
            echo"please enter a valid email";
            exit();
        }
        if(strlen($password)<6  || strlen($password)>30){
            echo"password must be between 6 and 30 characters long";
            exit();
        }
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
                header("refresh:0; url= index.php");

            }
            else if($row["email"]==$email && !password_verify($password,$row["pass"]))
            {
                echo '<script>
                        alert("Error: Wrong Password");
                        </script>';
                header("refresh:0; url= form_login.php");
                exit;
            }
            else{
                echo '<script>
                        alert("Error: cannot find any user");
                        </script>';
                header("refresh:0; url= form_login.php");
                exit;
            }


          } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
          $conn = null;

?>
</body>