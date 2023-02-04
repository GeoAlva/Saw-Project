<script>deletecart()</script>
<?php
    session_start();
    if(isset($_SESSION["login"])){
        session_destroy();
        header("refresh:0;url=main.php");

    }

?>