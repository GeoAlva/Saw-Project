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
            echo "<a href=\"../form_login.php\"> Go back</a><br>";
            exit();
        }

        if(empty($_POST["email"])||empty($_POST["pass"])){
            echo "Check input data , some missing";	
            echo "<a href=\"../form_login.php\"> Go back</a><br>";
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
        include "../common/dbconnection.php";

        try {
            $stmt = $conn->prepare("SELECT email, pass FROM users WHERE email='".$email."' ;");
            $stmt->execute();

            $row= $stmt->fetch();


            if($row["email"]==$email && password_verify($password,$row["pass"])){
                setcookie("user","wobble");
            }
            else 
            {
                echo" TODO";
            }


          } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
          $conn = null;

?>
</body>