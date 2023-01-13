

<div class="navbar">
        <ul>
            <a href="index.php"><img src="images/carrefive.png" alt="carrefive logo"></a>
            <li><a href="#">Services</a></li>
            <li><a href="#">Team</a></li>
            <!-- <li><a href="#">Case history</a></li>
            <li><a href="#">Work with us</a></li>
            <li><a href="#">Contacts</a></li> -->
            
            <?php
            if(isset($_COOKIE["utente"])){
                echo "<li class=\"signin\"><a href=\php/logout.php\"> Log Out</a></li>";
                echo "<li class=\"signin\"><a href=\"#\"> Ciao, ".$_COOKIE["utente"]."</a></li>";
                
            }
            else{
                echo "<li class=\"signin\"><a href=\"form_signup.php\"> Sign Up </a></li>";
                echo "<li class=\"signin\"><a href=\"form_login.php\"> Log In </a></li>";
            }
            ?>
            <li class="searchbar">
                <form action="#" method="get" >
                    <input type="text" name="search" id="search" class="inputbar" placeholder="Search Product...">
                    <button type="submit" for="search"class="srcbtn"><i class="fa-solid fa-magnifying-glass"></i></button>   
                </form>     
            </li>
        </ul>
</div>