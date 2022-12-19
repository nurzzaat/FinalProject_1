function callHotel(id) {
    switch (id) {
        case "Guest_House_Kolsai_Lakes":
            sessionStorage.setItem("hotelID", "Guest_House_Kolsai_Lakes");
            document.getElementById("Guest_House_Kolsai_Lakes").href = "./inhotels.html";
            break;
        case "Bereke_Kolsay_Resort":
            sessionStorage.setItem("hotelID", "Bereke_Kolsay_Resort");
            document.getElementById("Bereke_Kolsay_Resort").href = "./inhotels.html";
            break;
        case "Kolsay_Lakes_Town":
            sessionStorage.setItem("hotelID", "Kolsay_Lakes_Town");
            document.getElementById("Kolsay_Lakes_Town").href = "./inhotels.html";
            break;
        case "Kolsay_Lakes_Nomads":
            sessionStorage.setItem("hotelID", "Kolsay_Lakes_Nomads");
            document.getElementById("Kolsay_Lakes_Nomads").href = "./inhotels.html";
            break;
        case "Glamping_Kolsay":
            sessionStorage.setItem("hotelID", "Glamping_Kolsay");
            document.getElementById("Glamping_Kolsay").href = "./inhotels.html";
            break;
    }
}