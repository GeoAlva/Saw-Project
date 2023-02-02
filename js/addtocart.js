let cart = {};
if (localStorage.getItem("cart")) {
    cart = JSON.parse(localStorage.getItem("cart"));
}


function addtocart(id) {
    var elem = document.getElementById(id);
    var quantity = elem.value;
    var product = id.split("-");
    var intRegEx = /^[1-9][0-9]?$/;
    if (!intRegEx.test(quantity))
        alert("Enter a valid number of products");
    else {
        alert("added to cart " + quantity + "x of product " + product[1]);
    }

    let cartItem = {
        title: id,
        qty: quantity,
    }
    if (id in cart) {
        cart[id].qty = parseInt(cart[id].qty)  + parseInt(quantity) ;
        console.log(cart[id].title+","+cart[id].qty);}
    else {
        cart[id] = cartItem;
    }
    
    localStorage.setItem("cart", JSON.stringify(cart));
}

function carttocookie() {
    let cartcookie = '';
    if (Object.keys(cart).length == 0)
        return;
    Object.keys(cart).forEach(function (key) {
        cartcookie = cartcookie + cart[key].title + ',' + cart[key].qty + ' ';
    });
    document.cookie = "cart=" + cartcookie;

    console.log(cartcookie)
}

function purchase() {
    let cart = {};
    localStorage.setItem("cart", JSON.stringify(cart))
    document.cookie = "cart="
    location.reload();
}