<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/78ca362c23.js" crossorigin="anonymous"></script>
</head>
<body class="bg">
<?php
    include "common/navbar.php"
    ?>
    <form class="container" action="registration.php" method="post">

        <h2>Sign In</h2>

        <div class="form-element">
            <input type="text" id="firstname" name="firstname" class="form-input" placeholder=" " required>
            <label class="floating-label" for="firstname">First Name</label>
        </div>
            
        <div class="form-element">
            <input type="text" id="lastname" name="lastname" class="form-input" placeholder=" " required>
            <label class="floating-label" for="lastname">Last Name</label>
        </div>

        <div class="form-element">
            <input type="email" id="email" name="email" class="form-input" placeholder=" " required>
            <label class="floating-label" for="email">Email</label>
        </div>

        <div class="form-element">
            <input type="password" id="pass" name="pass" class="form-input" placeholder=" " required>
            <label class="floating-label" for="pass">Password</label>
        </div>

        <div class="form-element">
            <input type="password" id="confirm" name="confirm" class="form-input" placeholder=" " required>
            <label class="floating-label" for="confirm">Confirm Password</label>
        </div>
            
        <input type="submit" id="submit" name="submit" value="Submit" class="btn"> <br><br>
        <span> Already Registered? </span>
        <a href="form_login.php"> Log in</a>

    </form>

    <?php
    include "common/footer.php";
    ?>
</body>
</html>