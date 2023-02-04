

<div class="navbar">
        <ul>
            <a href="main.php"><img src="images/carrefive.png" alt="carrefive logo"></a>
            <li><a href="index.php">Home</a></li>
            <li><a href="workinprogress.php">Services</a></li>
            <li><a href="workinprogress.php">Contact Us</a></li>
 
            <?php
            if(isset($_SESSION["login"])){
                echo '<li class="signin">';
                echo '<div class="dropdown">';
                echo    '<button class="dropbtn"> Hi, '.$_SESSION["firstname"].' <i class="fa-solid fa-caret-down"></i> </button>';
                echo        '<div class="dropdown-content">';
                echo            '<a href="show_profile.php">My profile</a>';
                echo            '<a href="orders.php">My orders</a>';
                echo            '<a href="logout.php"> Log Out</a>';
                echo        '</div>';
                echo '</div>';
                echo '</li>';

                echo "<li class=\"signin\"><a href=cart.php onclick='carttocookie()' ><i class=\"fa-solid fa-cart-shopping\"></i></a></li>";
            }
            else{
                echo "<li class=\"signin\"><a href=\"form_signup.php\"> Sign Up </a></li>";
                echo "<li class=\"signin\"><a href=\"form_login.php\"> Log In </a></li>";
            }
            ?>
            <li class="searchbar">
                <form action="search.php" method="get" >
                    <input type="text" name="search" id="search" class="inputbar" placeholder="Search Product...">
                    <button type="submit" for="search" class="srcbtn"><i class="fa-solid fa-magnifying-glass"></i></button>   
                </form>     
            </li>
        </ul>
</div>