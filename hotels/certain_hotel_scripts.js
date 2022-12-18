
function switchHearts(){
    const show = document.getElementById("show");
    const hide = document.getElementById("hide");
    sessionStorage.setItem("isLiked", "Liked");
    if(show.style.display === "none"){
        show.style.display = "block";
        hide.style.display = "none";
        document.getElementById("switchText").innerHTML = "Liked";
    }else{
        hide.style.display = "block";
        show.style.display = "none";
        document.getElementById("switchText").innerHTML = "Like";
    }
}

function hotel(){
    const hotelID = sessionStorage.getItem("hotelID");
    switch (hotelID) {
        case "kolsai_lakes_town": document.getElementById("hotel_image").src = "images/hotels_photo/kolsay_lakes_town/kolsay_lakes_town_in.jpg"; break;
        case "manor_kolsay": document.getElementById("hotel_image").src = "./images/manor_kolsay.jpg"; break;
        case "kolsay_grand": document.getElementById("hotel_image").src = "./images/Kolsay_Grand1.jpg"; break;
        case "kolsay_nomads": document.getElementById("hotel_image").src = "./images/kolsay_nomads.jpg"; break;
        case "tau_kolsay": document.getElementById("hotel_image").src = "./images/tau_kolsay.jpeg"; break;
    }
}
