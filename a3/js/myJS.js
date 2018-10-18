function incr(){
    document.getElementById("qty").stepUp(1);
}

function decr(){
    document.getElementById("qty").stepDown(1);
}

function formValidate(){
    var value = document.getElementById("qty").value;
    var qtyErr = document.getElementById("qtyErr");
    if (value == 0) {
        qtyErr.style.visibility = "visible";
        return false;
    }
    else {
        qtyErr.style.visibility = "hidden";
        return true;
    }
}

function calSubtotal(){
    // Calculate subtotal client side / real time
    var qty = document.getElementById("qty").value;
    var uPrice = document.getElementById("unit price").value;
    
    document.getElementById("subtotal").value = (qty*uPrice).toFixed(2);
}

function visaValidation(){
    var pattern = /^4([ ]?\d){12,15}$/; 
    var input = document.getElementById("card").value;
    var visa = document.getElementById("visa");
    if (pattern.test(input)) {
        visa.style.visibility="visible";
    }
    else{
        visa.style.visibility="hidden";
    }
}

