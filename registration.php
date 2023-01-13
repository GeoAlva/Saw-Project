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
        echo "Please submit data from form";
        exit();;
    }   
    if(empty($_POST["firstname"])||empty($_POST["lastname"])||empty($_POST["email"])||empty($_POST["pass"])||empty($_POST["confirm"])){
        echo "Missing data, please insert";
        exit();
		};

        $firstname= htmlspecialchars(trim($_POST["firstname"])); 
        $lastname=htmlspecialchars(trim($_POST["lastname"]));
        $email=htmlspecialchars(filter_var(trim($_POST["email"]),FILTER_VALIDATE_EMAIL));
        $password=htmlspecialchars(trim($_POST["pass"]));
        $confirm=htmlspecialchars(trim($_POST["confirm"]));

        if(strlen($firstname)<3 || strlen($firstname)>30){
            echo"firstname must be between 3 and 30 characters long";
            exit();
        }
        if(strlen($lastname)<3 ||strlen($lastname)>30){
            echo"lastname must be between 3 and 30 characters long";
            exit();
        }
        if(strlen($email)>100){
            echo"please enter a valid email";
            exit();
        }
        if(strlen($password)<6 || strlen($confirm)<6 || strlen($password)>30 || strlen($confirm)>30){
            echo"password must be between 6 and 30 characters long";
            exit();
        }
        if(strcmp($password,$confirm)){
            echo"Passwords do not match";
            echo "<a href=\"form_signup.php\"> Go back</a><br>";
            exit();
        }

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
                
                if($e->getCode()==23000){
                    echo "Error: email already used <br>";
                }
                else
                    echo "Error: try again later <br>";
                echo $e->getMessage();
            }
            $conn=null;
?>

    <a href="form_login.php">Go to login page</a>
</body>
</html>

