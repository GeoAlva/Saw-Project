<?php
    session_start();
    if(isset($_SESSION["login"])){
        session_destroy();
        setcookie("cart", "", time()-3600);

        header("refresh:0;url=main.php");

    }

?>