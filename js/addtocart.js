function addtocart(id){
var elem = document.getElementById(id);
var quantity = elem.value;
var product = id.split("-");   
alert("added to cart "+quantity+"x of product "+product[1]);

//TODO
}