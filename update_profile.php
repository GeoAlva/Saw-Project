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
    <title>Update Profile</title>
</head>

<body>
<?php
        if(!isset($_SESSION["login"])){
            header("refresh:0;url=form_login.php");
        }

    if(!isset($_POST["submit"]))
        echo '<script>printerrorUpdate("Please submit data from form");</script>'; 

    if($_POST["firstname"]==$_SESSION["firstname"] && $_POST["lastname"]==$_SESSION["lastname"] && $_POST["email"]==$_SESSION["email"])
        echo '<script>printerrorUpdate("Unchanged profile");</script>'; 

    if(empty($_POST["email"])||empty($_POST["firstname"])||empty("lastname"))
        echo '<script>printerrorUpdate("Check input data , some missing");</script>'; 

    $firstname= htmlspecialchars(trim($_POST["firstname"])); 
    $lastname=htmlspecialchars(trim($_POST["lastname"]));
    $email=htmlspecialchars(filter_var(trim($_POST["email"]),FILTER_VALIDATE_EMAIL));
    $prevemail=$_SESSION["email"];

    if(strlen($firstname)<3 || strlen($firstname)>30)
        echo '<script>printerrorUpdate("firstname must be between 3 and 30 characters long");</script>'; 

    if(strlen($lastname)<3 ||strlen($lastname)>30)
        echo '<script>printerrorUpdate("lastname must be between 3 and 30 characters long");</script>';

    if(strlen($email)>100)
        echo '<script>printerrorUpdate("please enter a valid email");</script>'; 

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
                
                if($e->getCode()==23000)
                    echo '<script>printerrorUpdate("Error: email already used");</script>'; 
                else
                    echo '<script>printerrorUpdate("Error: try again later");</script>'; 
            }
            $_SESSION["firstname"] = $firstname;
            $_SESSION["lastname"] =$lastname;
            $_SESSION["email"] = $email;
            $conn=null;
            header("refresh:0; url= main.php");

?>
</body>
</html>