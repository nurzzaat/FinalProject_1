function callHotel(id) {
    switch (id) {
        case "tenir":
            sessionStorage.setItem("hotelID", "tenir");
            document.getElementById("tenir").href = "./tenir.html";
            break;
        case "urta":
            sessionStorage.setItem("hotelID", "urta");
            document.getElementById("urta").href = "./tenir.html";
            break;
    }
}