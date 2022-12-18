function changeNav(){
    var a = document.getElementById('btn').innerHTML;
    if(a == '✕'){
        document.getElementById('btn').innerHTML = '☰';
        document.getElementById("nav").style.width = "60px";
    }else{
        document.getElementById('btn').innerHTML = '✕';
        document.getElementById("nav").style.width = "240px";
    }

}
