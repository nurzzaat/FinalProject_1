<?php
const DB_SERVER = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'front_final';

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();

$current_hotel_page = $_SESSION['current_hotel'];
$query = "select * from hotels_data where hotel_name = '$current_hotel_page'";
$result = $con->query($query);
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./certain_hotel_styles.css">
    <link rel="stylesheet" href="../secondPage/Header_with_footer.css">
    <script src="../secondPage/homepage.js"></script>
</head>
<body onload="hotel(), checkUser()">
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="./homepage.html">Main</a>
    <a href="./restaurants.html">Restaurant</a>
    <a href="ticket.html">Tickets</a>
    <a href="./Entertainments.html">Entertainments</a>
    <a href="./hotels.html">Hotel</a>
    <a href="about_us.html">Info</a>
</div>
<span class="header">
    <div>
        <li id="main"><span class="main" onclick="openNav()">&#9776;</span></li>
    </div>
    <div>
        <li id="KOLSAI_ID">K O L<img class="logo"
                                     src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaiibfj8vazQvlEDPUJzC36huDhRhzUn048J56c0mlIZfGqkqQ3KKvcfJcdRLX0vT3_4M&usqp=CAU">A I</li>
    </div>
    <div class="id">
        <li class="log-in"><a href=""><span id="curr_user"></span><span class="smile">&#9786;</span></a></li>
    </div>
</span>
<div class="certain_hotel_wrapper">
    <h4><a href="./hotels.html">Hotels</a> / <?php echo $data['hotel_name']; ?></h4>
    <h1><?php echo $data['hotel_name']; ?></h1>
    <div class="about_hotel">
        <div class="about_images">
            <img src=<?php echo $data['image']; ?> alt="photo" id="hotel_image">
        </div>
        <div class="about_data">
            <div class="about_info">
                <div class="about_info_hotel">
                    <h2>About hotel</h2>
                    <h4><?php echo $data['about_hotel']; ?></h4>
                </div>
                <div class="about_info_contact">
                    <h2>Contacts</h2>
                    <ul>
                        <li>
                            <div class="contact-img">
                                <img src="./images/inst.c237746.svg" alt="">
                            </div>
                            <a href=<?php echo $data['contact']; ?>><?php echo $data['hotel_name']; ?></a>
                        </li>
                        <li>
                            <div class="contact-img">
                                <img src="./images/location.156179b.svg" alt="">
                            </div>
                            <?php echo $data['address']; ?>
                        </li>
                    </ul>
                </div>
                <div class="about_info_advantages">
                    <h2>Advantages</h2>
                    <div class="features">
                        <div class="one_feature">
                            <div class="feature_img">
                                <img src="./images/wifi.svg" alt="photo">
                            </div>
                            <h4>Wi-Fi</h4>
                        </div>
                        <div class="one_feature">
                            <div class="feature_img">
                                <img src="./images/saun.svg" alt="photo">
                            </div>
                            <h4>Steam Room</h4>
                        </div>
                        <div class="one_feature">
                            <div class="feature_img">
                                <img src="./images/breakfast.svg" alt="photo">
                            </div>
                            <h4>Breakfast</h4>
                        </div>
                        <div class="one_feature">
                            <div class="feature_img">
                                <img src="./images/bar.svg" alt="photo">
                            </div>
                            <h4>Bar</h4>
                        </div>
                        <div class="one_feature">
                            <div class="feature_img">
                                <img src="./images/tv.svg" alt="photo">
                            </div>
                            <h4>TV</h4>
                        </div>
                        <div class="one_feature">
                            <div class="feature_img">
                                <img src="./images/panoram.svg" alt="photo">
                            </div>
                            <h4>Panoram</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tariffs_wrapper">
                <div class="tariffs">
                    <h2>Room</h2>
                    <div class="tariffs_container">
                        <div class="one_tariff">
                            <div class="tariff_img">
                                <img src=<?php echo $data['room_image']; ?> alt="deluxe">
                            </div>
                            <span class="title">Deluxe</span>
                            <h4><?php echo $data['room_def']; ?></h4>
                            <ul>
                                <li>
                                    <img src="./images/size.4575c7e.svg" alt="size">
                                    Room size: <?php echo $data['room_size']; ?>
                                </li>
                                <li>
                                    <img src="./images/persons.ad2b739.svg" alt="size">
                                    Guests: <?php echo $data['room_guests']; ?>
                                </li>
                            </ul>
                            <h3><?php echo $data['room_price']; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="f-1">
        <div>
            <b>Our restaurants</b><br><br>
            <li>S.N.e.G.</li>
            <li>Chalet</li>
            <li>Assorti</li>
            <li>Oblaka restobar</li>
            <li>Base camp Yurta</li>
            <li>Marrone Rosso</li>
            <li>Saray bar</li>
            <li>Paul</li>
            <li>Rifugio del Monte</li>
        </div>
        <div>
            <b>Hotels</b><br><br>
            <li>Kolsay Lakes Town</li>
            <li>Manor Kolsay</li>
            <li>Kolsay Grand</li>
            <li>Kolsay Nomads</li>
            <li>Tau Kolsay</li>
        </div>
    </div>
    <div class="f-1">
        <div>
            <b>Entertainments</b><br><br>
            <li>Alpine park</li>
            <li>Paraplane</li>
            <li>Snowmobile and ATV rides</li>
            <li>Horse rides</li>
            <li>Rope park Medeu</li>
            <li>Gorilla Zipline</li>
            <li>Rope park Shymbulak</li>
            <li>Balloon track</li>

        </div>
        <div>
            <b>Contact us</b><br><br>
            <li>E-Mail: kolsay@gmail.kz</li>
            <br>
            <li>Phone number: +7 727 331 77 77</li>
            <br>
            <li>Address: st. Kerey, Zhanibek Khandar 558/1, Almaty</li>
            <br>
            <div>
                <span><a href="https://www.facebook.com/"><img
                                src="https://icons.veryicon.com/png/128/internet--web/color-social-media-icon/facebook-132.png"
                                width="35"></a></span>
                <span><a href="https://twitter.com/?lang=en"><img
                                src="https://icons.veryicon.com/png/128/internet--web/color-social-media-icon/twitter-158.png"
                                width="35"></a></span>
                <span><a href="https://www.instagram.com/"><img
                                src="https://icons.veryicon.com/png/128/internet--web/color-social-media-icon/instagram-47.png"
                                width="35"></a></span>
                <span><a href="https://www.youtube.com/"><img
                                src="https://icons.veryicon.com/png/128/internet--web/color-social-media-icon/youtube-117.png"
                                width="35"></a></span>
            </div>
        </div>
    </div>
</footer>
</body>
</html>