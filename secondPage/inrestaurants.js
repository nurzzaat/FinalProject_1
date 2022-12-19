function hotel(){
    const hotelID = sessionStorage.getItem("hotelID");
    switch (hotelID) {
        case "id1": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/01cc68c90495bcf35af0d9a51e452607.png"; break;
        case "id2": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/7e7d0306d5484e188d9109441f37895f.png"; break;
        case "id3": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/5f2290bca043b36077864287b36e13ba.png"; break;
        case "id4": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/a9f0247a5330ac3bc73c216ceb669b7b.png"; break;
        case "id5": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/a9f0247a5330ac3bc73c216ceb669b7b.png"; break;
        case "id6": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/03c5d0ee9e8a2a4e61a58c222b91d7d5.png"; break;
        case "id7": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/42be88bf2d78693b3743f2b4e3a4b68b.png"; break;
        case "id8": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/29a2cc180ba33cbd40d08492808d2422.png"; break;
        case "id9": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/caa2bb1acdee9558388d0141a6eff698.jpg"; break;
    }
}
