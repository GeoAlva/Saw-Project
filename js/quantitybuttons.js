function increaseQt(id) {
    var elem = document.getElementById(id);
    var input = elem.value;
    if (input < 1) elem.value = 1;
    input < 99 ? elem.value = Number(input) + 1 : elem.value = 99;
};

function decreaseQt(id) {
    var elem = document.getElementById(id);
    var input = elem.value;
    if (input > 99) elem.value = 99;
    else
        input > 1 ? elem.value = Number(input) - 1 : elem.value = 1;
};
