<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrefive Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/shop.css">
    <script src="https://kit.fontawesome.com/78ca362c23.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include "common/navbar.php";
    ?>

    <main>
        <div class="list">
            <h3>i dunTODO</h3>
            <div class="shoplist">
                <div class="shop_elem">
                    <img src="images/61gYYxGLDfL._AC_SX679_.jpg" alt="pasta">
                    <h5>pasta a</h5>
                    <div>5.99$</div> 
                    <div class="quantity_div">
                        <button type="button" onclick="decreaseQt('pr1')" class="minus_button" pattern="[1-9][0-9]?" name="minus_button">-</button>    
                        <input type="text" id="pr1" class="quantity" name="quantita" value="1">
                        <button type="button" onclick="increaseQt('pr1')" class="plus_button" name="plus_button">+</button>
                    </div>
                    <button type="submit" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>
                </div>
                <div class="shop_elem">
                    <img src="images/61gYYxGLDfL._AC_SX679_.jpg" alt="pasta">
                    <h5>pasta b</h5>
                    <div>5.99$</div>   
                    <div class="quantity_div">
                        <button type="button" onclick="decreaseQt('pr2')" class="minus_button" pattern="[1-9][0-9]?" name="minus_button">-</button>  
                        <input type="text" id="pr2" class="quantity" name="quantita" value="1">
                        <button type="button" onclick="increaseQt('pr2')" class="plus_button" name="plus_button">+</button>
                    </div>
                    <button type="submit" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>
                </div>
                <div class="shop_elem">
                    <img src="images/61gYYxGLDfL._AC_SX679_.jpg" alt="pasta">
                    <h5>pasta c</h5>
                    <div>5.99$</div> 
                    <div class="quantity_div">
                        <button type="button" onclick="decreaseQt('pr3')" class="minus_button" pattern="[1-9][0-9]?" name="minus_button">-</button>   
                        <input type="text" id="pr3" class="quantity" name="quantita" value="1">
                        <button type="button" onclick="increaseQt('pr3')" class="plus_button" name="plus_button">+</button>
                    </div>
                    <button type="submit" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>
                </div>
                <div class="shop_elem">
                    <img src="images/61gYYxGLDfL._AC_SX679_.jpg" alt="pasta">
                    <h5>pasta d</h5>
                    <div>5.99$</div> 
                    <div class="quantity_div">
                        <button type="button" onclick="decreaseQt('pr4')" class="minus_button" pattern="[1-9][0-9]?" name="minus_button">-</button>    
                        <input type="text" id="pr4" class="quantity" name="quantita" value="1">
                        <button type="button" onclick="increaseQt('pr4')" class="plus_button" name="plus_button">+</button>
                    </div>
                    <button type="submit" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>
                </div>
            </div>
        </div>

        <div class="list">
            <h3>i dunTODO</h3>
            <div class="shoplist">
                <div class="shop_elem">
                    <img src="images/61gYYxGLDfL._AC_SX679_.jpg" alt="pasta">
                    <h5>pasta a</h5>
                    <div>5.99$</div> 
                    <div class="quantity_div">
                        <button type="button" onclick="decreaseQt('pr5')" class="minus_button" pattern="[1-9][0-9]?" name="minus_button">-</button>  
                        <input type="text" id="pr5" class="quantity" name="quantita" value="1">
                        <button type="button" onclick="increaseQt('pr5')" class="plus_button" name="plus_button">+</button>
                    </div>
                    <button type="submit" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>
                </div>
                <div class="shop_elem">
                    <img src="images/61gYYxGLDfL._AC_SX679_.jpg" alt="pasta">
                    <h5>pasta b</h5>
                    <div>5.99$</div> 
                    <div class="quantity_div">
                        <button type="button" onclick="decreaseQt('pr6')" class="minus_button" pattern="[1-9][0-9]?" name="minus_button">-</button>   
                        <input type="text" id="pr6" class="quantity" name="quantita" value="1">
                        <button type="button" onclick="increaseQt('pr6')" class="plus_button" name="plus_button">+</button>
                    </div>
                    <button type="submit" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>
                </div>
                <div class="shop_elem">
                    <img src="images/61gYYxGLDfL._AC_SX679_.jpg" alt="pasta">
                    <h5>pasta c</h5>
                    <div>5.99$</div> 
                    <div class="quantity_div">
                        <button type="button" onclick="decreaseQt('pr7')" class="minus_button" pattern="[1-9][0-9]?" name="minus_button">-</button>   
                        <input type="text" id="pr7" class="quantity" name="quantita" value="1">
                        <button type="button" onclick="increaseQt('pr7')" class="plus_button" name="plus_button">+</button>
                    </div>
                    <button type="submit" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>
                </div>
                <div class="shop_elem">
                    <img src="images/61gYYxGLDfL._AC_SX679_.jpg" alt="pasta">
                    <h5>pasta d</h5>
                    <div>5.99$</div> 
                    <div class="quantity_div">
                        <button type="button" onclick="decreaseQt('pr8')" class="minus_button" pattern="[1-9][0-9]?" name="minus_button">-</button>    
                        <input type="text" id="pr8" class="quantity" name="quantita" value="1">
                        <button type="button" onclick="increaseQt('pr8')" class="plus_button" name="plus_button">+</button>
                    </div>
                    <button type="submit" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>
                </div>
                <div class="shop_elem">
                    <img src="images/61gYYxGLDfL._AC_SX679_.jpg" alt="pasta">
                    <h5>pasta d</h5>
                    <div>5.99$</div> 
                    <div class="quantity_div">
                        <button type="button" onclick="decreaseQt('pr9')" class="minus_button" pattern="[1-9][0-9]?" name="minus_button">-</button>   
                        <input type="text" id="pr9" class="quantity" name="quantita" value="1">
                        <button type="button" onclick="increaseQt('pr9')" class="plus_button" name="plus_button">+</button>
                    </div>
                    <button type="submit" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>
                </div>
                <div class="shop_elem">
                    <img src="images/61gYYxGLDfL._AC_SX679_.jpg" alt="pasta">
                    <h5>pasta d</h5>
                    <div>5.99$</div> 
                    <div class="quantity_div">
                        <button type="button" onclick="decreaseQt('pr10')" class="minus_button" pattern="[1-9][0-9]?" name="minus_button">-</button>    
                        <input type="text" id="pr10" class="quantity" name="quantita" value="1">
                        <button type="button" onclick="increaseQt('pr10')" class="plus_button" name="plus_button">+</button>
                    </div>
                    <button type="submit" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>
                </div>
                <div class="shop_elem">
                    <img src="images/61gYYxGLDfL._AC_SX679_.jpg" alt="pasta">
                    <h5>pasta d</h5>
                    <div>5.99$</div> 
                    <div class="quantity_div">
                        <button type="button" onclick="decreaseQt('pr11')" class="minus_button" pattern="[1-9][0-9]?" name="minus_button">-</button>    
                        <input type="text" id="pr11" class="quantity" name="quantita" value="1">
                        <button type="button" onclick="increaseQt('pr11')" class="plus_button" name="plus_button">+</button>
                    </div>
                    <button type="submit" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>
                </div>
                <div class="shop_elem">
                    <img src="images/61gYYxGLDfL._AC_SX679_.jpg" alt="pasta">
                    <h5>pasta d</h5>
                    <div>5.99$</div> 
                    <div class="quantity_div">
                        <button type="button" onclick="decreaseQt('pr12')" class="minus_button" pattern="[1-9][0-9]?" name="minus_button">-</button>   
                        <input type="text" id="pr12" class="quantity" name="quantita" value="1">
                        <button type="button" onclick="increaseQt('pr12')" class="plus_button" name="plus_button">+</button>
                    </div>
                    <button type="submit" class="cart_button"><i class="fa-sharp fa-solid fa-cart-plus"></i></button>
                </div>

            </div>
        </div>
    </main>

    <?php
        include "common/footer.php";
    ?>

<script>
    function increaseQt(id){
    var elem = document.getElementById(id);
    var input = elem.value;
    if(input < 1) elem.value = 1;
    input < 99 ?  elem.value = Number(input)+1 : elem.value = 99;
    };

    function decreaseQt(id){
    var elem = document.getElementById(id);
    var input = elem.value;
    if(input > 99) elem.value = 99;
    else
        input > 1 ?  elem.value = Number(input)-1 : elem.value = 1;
    };
</script>
</body>
</html>