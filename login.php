<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="style/style.css">

</head>
<body class="bg">
<?php
    include "common/navbar.php"
    ?>
        <form action="php/validate.php" method="post" class="container">
        <h2>Log in</h2>
        
        <div class="form-element">
            <input type="email" id="email" name="email" class="form-input" placeholder=" " required>
            <label class="floating-label" for="email">Email</label>
        </div>

        <div class="form-element">
            <input type="password" id="pass" name="pass" class="form-input" placeholder=" " required>
            <label class="floating-label" for="pass">Password</label>
        </div>

        <input type="submit" id="submit" name="submit" value="Submit" class="btn"> <br><br>
            <span> Create Account? </span>
            <a href="signup.php">Sign-Up</a>
    </form>
</body>
</html>