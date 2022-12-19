function checkLiked() {
    const isLiked = sessionStorage.getItem("isLiked");
    const show = document.getElementById("show");
    const hide = document.getElementById("hide");
    if(isLiked === "Liked"){
        show.style.display = "block";
        hide.style.display = "none";
        document.getElementById("switchText").innerHTML = "Liked";
    }else{
        hide.style.display = "block";
        show.style.display = "none";
        document.getElementById("switchText").innerHTML = "Like";
    }
}
function switchHearts(){
    const show = document.getElementById("show");
    const hide = document.getElementById("hide");

    if(show.style.display === "none"){
        sessionStorage.setItem("isLiked", "Liked");
        show.style.display = "block";
        hide.style.display = "none";
        document.getElementById("switchText").innerHTML = "Liked";
    }else{
        sessionStorage.setItem("isLiked", "Like");
        hide.style.display = "block";
        show.style.display = "none";
        document.getElementById("switchText").innerHTML = "Like";
    }
}
