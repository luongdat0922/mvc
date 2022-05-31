function add() {
    quantity = parseInt($("#quantity").val());
    temp = quantity +1 ;
    $("#quantity").val(temp);
}

function sub() {
    quantity = parseInt($("#quantity").val());
    if (quantity > 1) {
        temp = quantity - 1 ;
    }
    $("#quantity").val(temp);
}
