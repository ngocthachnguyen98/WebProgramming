function incr(){
    document.getElementById("qty").stepUp(1);
}

function decr(){
    document.getElementById("qty").stepDown(1);
}

function formValidate(){
    var value = document.getElementById("qty").value;
    if (value == 0) {
        alert("The quantity should be at least 1");
        return false;
    }
    else return true;
}
