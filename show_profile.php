<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/78ca362c23.js" crossorigin="anonymous"></script>
</head>
<body class="bg">
    <?php
    include "common/navbar.php";
    if(!isset($_SESSION["login"])){
        header("refresh:0;url=form_login.php");
    }
    ?>
<form class="container" action="update_profile.php" method="post">
<h2 class = profile>Modify Profile</h2>
<div class="form-element">
    <input type="text" id="firstname" name="firstname" class="form-input" value="<?php echo $_SESSION["firstname"]?>">
    <label class="floating-label" for="firstname">First Name</label>
</div>
    
<div class="form-element">
    <input type="text" id="lastname" name="lastname" class="form-input" value="<?php echo $_SESSION["lastname"]?>" >
    <label class="floating-label" for="lastname">Last Name</label>
</div>

<div class="form-element">
    <input type="email" id="email" name="email" class="form-input" value="<?php echo $_SESSION["email"]?>" >
    <label class="floating-label" for="email">Email</label>
</div>

<input type="submit" id="submit" name="submit" value="Submit" class="btn"> <br><br>
</form>


</body>
<?php
include "common/footer.php";
?>
</html>