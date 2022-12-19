function hotel(){
    const hotelID = sessionStorage.getItem("hotelID");
    switch (hotelID) {
        case "id1": document.getElementById("news_image").src = "https://www.datocms-assets.com/55179/1647270109-cf6523a1a5ff-img_5012.jpg"; break;
        case "id2": document.getElementById("news_image").src = "https://indyguide-web-development.s3.us-east-2.amazonaws.com/listings/images/thumbnail/Shymbulak-Ski-Resort-Guided-Tour-1599130471520.webp"; break;
        case "id3": document.getElementById("news_image").src = "https://media.tacdn.com/media/attractions-splice-spp-674x446/06/e6/cc/70.jpg"; break;
        case "id4": document.getElementById("news_image").src = "https://blog.dookinternational.com/wp-content/uploads/2015/05/Shymbulak-Ski-Resort-4.jpg"; break;
        case "id5": document.getElementById("news_image").src = "https://i.dailymail.co.uk/i/pix/2014/03/25/article-2588528-1C8B852400000578-290_634x417.jpg"; break;
        case "id6": document.getElementById("news_image").src = "https://img.itinari.com/pages/images/original/1546ed65-4349-4413-a742-0e96fc82caaf-istock-467685694.jpg?ch=DPR&dpr=2.625&w=1600&s=d7ea989411d4cdc1d49dadbb842ca38c"; break;
        case "id7": document.getElementById("news_image").src = "https://cdn.shymbulak-dev.com/media/114ab4591e13d15efb86c03c6d27793f.png"; break;
        case "id8": document.getElementById("news_image").src = "https://files.kazakhstan.travel/files/public/201901/11/b7c32a07573d4f1383a1047b6ef31027/almaty-shymbulak.jpg"; break;
        case "id9": document.getElementById("news_image").src = "https://astanatimes.com/wp-content/uploads/2015/10/DSC06003.jpg"; break;
    }
}
