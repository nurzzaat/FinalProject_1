function callHotel(id) {
    switch (id) {
        case "kolsay_lakes_town":
            sessionStorage.setItem("hotelID", "kolsay_lakes_town");
            document.getElementById("kolsay_lakes_town").href = "./certain_hotel.html";
            break;
        case "manor_kolsay":
            sessionStorage.setItem("hotelID", "manor_kolsay");
            document.getElementById("manor_kolsay").href = "./certain_hotel.html";
            break;
        case "kolsay_grand":
            sessionStorage.setItem("hotelID", "kolsay_grand");
            document.getElementById("kolsay_grand").href = "./certain_hotel.html";
            break;
        case "kolsay_nomads":
            sessionStorage.setItem("hotelID", "kolsay_nomads");
            document.getElementById("kolsay_nomads").href = "./certain_hotel.html";
            break;
        case "tau_kolsay":
            sessionStorage.setItem("hotelID", "tau_kolsay");
            document.getElementById("tau_kolsay").href = "./certain_hotel.html";
            break;
    }
}