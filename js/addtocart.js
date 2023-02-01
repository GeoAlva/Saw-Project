let cart = {};

if (localStorage.getItem("cart")) {
    cart = JSON.parse(localStorage.getItem("cart"));
}


function addtocart(id) {
    var elem = document.getElementById(id);
    var quantity = elem.value;
    var product = id.split("-");
    var intRegEx=/^[1-9][0-9]?$/;
    if (!intRegEx.test(quantity))
        alert("Enter a valid number of products");
    else {
        alert("added to cart " + quantity + "x of product " + product[1]);
    }
    let cartItem = {
        title: product[1],
        qty: quantity,
    }
    let size=Object.keys(cart).length
    cart[size] = cartItem;
    localStorage.setItem("cart", JSON.stringify(cart));
    //TODO
}

function carttocookie() {
    let cartcookie='';
    for (let i = 0; i < Object.keys(cart).length; i++) {
        cartcookie=cartcookie+'('+cart[i].title+':'+cart[i].qty+')';
    }
    document.cookie = "cart="+cartcookie;

    console.log(cartcookie)
}