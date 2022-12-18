
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

function hotel(){
    const hotelID = sessionStorage.getItem("hotelID");
    switch (hotelID) {
        case "tenir": document.getElementById("hotel_image").src = "./tenir.jpg"; break;
        case "urta": document.getElementById("hotel_image").src = "./images/urta.png"; break;
    }
}
