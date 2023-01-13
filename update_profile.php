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

    <title>Update Profile</title>
</head>

<body>
<?php
    if(!isset($_SESSION["login"])){
    header("location: index.php");
    }

    if(!isset($_POST["submit"])){
        echo "Submit data from form";
        echo "<a href=\"show_profile.php\"> Go back</a><br>";
        exit();
        }
    if($_POST["firstname"]==$_SESSION["firstname"] && $_POST["lastname"]==$_SESSION["lastname"] && $_POST["email"]==$_SESSION["email"]){
        echo "Unchanged profile";
        echo "<a href=\"show_profile.php\"> Go back</a><br>";
        exit();
    }

    if(empty($_POST["email"])||empty($_POST["firstname"])||empty("lastname")){
        echo "Check input data , some missing";	
        echo "<a href=\"show_profile.php\"> Go back</a><br>";
        exit();
    };

    $firstname= htmlspecialchars(trim($_POST["firstname"])); 
    $lastname=htmlspecialchars(trim($_POST["lastname"]));
    $email=htmlspecialchars(filter_var(trim($_POST["email"]),FILTER_VALIDATE_EMAIL));
    $prevemail=$_SESSION["email"];

    if(strlen($firstname)<3 || strlen($firstname)>30){
        echo"firstname must be between 3 and 30 characters long";
        echo "<a href=\"show_profile.php\"> Go back</a><br>";
        exit();
    }
    if(strlen($lastname)<3 ||strlen($lastname)>30){
        echo"lastname must be between 3 and 30 characters long";
        echo "<a href=\"show_profile.php\"> Go back</a><br>";
        exit();
    }
    if(strlen($email)>100){
        echo"please enter a valid email";
        echo "<a href=\"show_profile.php\"> Go back</a><br>";
        exit();
    }

    include "common/dbconnection.php";

        try{ $stmt = $conn->prepare("UPDATE users SET email=:email,firstname=:firstname,lastname=:lastname 
            WHERE email = :prevemail");

            $stmt->bindParam(":firstname",$firstname);
            $stmt->bindParam(":lastname",$lastname);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":prevemail",$prevemail);
            $stmt->execute();
            echo "Update successfull!<br>";
            }catch(PDOException $e){
                
                if($e->getCode()==23000){
                    echo "Error: email already used <br>";
                }
                else
                    echo "Error: try again later <br>";
                echo $e->getMessage();
            }

            $_SESSION["firstname"] = $firstname;
            $_SESSION["lastname"] =$lastname;
            $_SESSION["email"] = $email;
            header("refresh:0; url= index.php");
$conn=null;
?>
</body>
</html>