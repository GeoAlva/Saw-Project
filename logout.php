<?php
    session_start();
    if(isset($_SESSION["login"])){
        session_destroy();
        /*
        TODO destroy other cookies
        */

        header("refresh:0;url=main.php");

    }

?>