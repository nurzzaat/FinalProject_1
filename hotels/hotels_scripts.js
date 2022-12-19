
function callHotel(id) {
    $.ajax({
        url:'session.php',
        type:'POST',
        data:{current_hotel: id},
        success:function(response){
            console.log(response);
        }

    });
    switch (id) {
        case "Kolsay Lakes Town":
            document.getElementById("Kolsay Lakes Town").href = "./check.php";
            break;
        case "Manor Kolsay":
            document.getElementById("Manor Kolsay").href = "./check.php";
            break;
        case "Kolsay Grand":
            document.getElementById("Kolsay Grand").href = "./check.php";
            break;
        case "Kolsay Nomads":
            document.getElementById("Kolsay Nomads").href = "./check.php";
            break;
        case "Tau Kolsay":
            document.getElementById("Tau Kolsay").href = "./check.php";
            break;
    }
}