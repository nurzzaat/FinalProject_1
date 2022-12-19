function hotel(){
    const hotelID = sessionStorage.getItem("hotelID");
    switch (hotelID) {
        case "id1": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/dcd58658eb36e70a1b401c81b1ce176a.png"; break;
        case "id2": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/ef63cc6caa0c0a3d8e12a33d1e0ac0f7.png"; break;
        case "id3": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/b4ac6673fe4afe9250461ec9cf4dd73b.png"; break;
        case "id4": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/91f0767cbf48e6579d101e80d27a3365.png"; break;
        case "id5": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/07245a259db7050bc9811ca2c6da3326.png"; break;
        case "id6": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/01365f650e6d5447f85631b312632ea6.png"; break;
        case "id7": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/d71d1b162c36d43abe57de22354417c6.png"; break;
        case "id8": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/33e79b245bdbee1de8ea372ff8883c12.png"; break;
    }
}
