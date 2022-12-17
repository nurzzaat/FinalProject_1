
function switchHearts(){
    const show = document.getElementById("show");
    const hide = document.getElementById("hide");
    if(show.style.display === "none"){
        show.style.display = "block";
        hide.style.display = "none";
        document.getElementById("switchText").innerHTML = "Сохранено";
    }else{
        hide.style.display = "block";
        show.style.display = "none";
        document.getElementById("switchText").innerHTML = "Сохранить";
    }
}
