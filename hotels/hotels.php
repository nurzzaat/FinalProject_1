<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./hotels_styles.css">
    <link rel="stylesheet" href="../secondPage/Header_with_footer.css">
    <script src="../secondPage/homepage.js"></script>
</head>
<body onload="checkUser()">
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="../secondPage/homepage.html">Main</a>
    <a href="../secondPage/restaurants.html">Restaurant</a>
    <a href="../secondPage/ticket.html">Tickets</a>
    <a href="../secondPage/Entertainments.html">Entertainments</a>
    <a href="./hotels.html">Hotel</a>
    <a href="../secondPage/about_us.html">Info</a>
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
<div class="contents">
    <h1>Hotels</h1>
    <div class="hotels_wrapper">
        <a href="#" class="hotel-link" id="Kolsay Lakes Town" onclick="callHotel(id)">
            <div class="one_hotel">
                <img src="images/hotels_photo/kolsay_lakes_town/kolsay_lakes_town.jpg" alt="photo">
                <div class="hotel-data">
                    <div class="hotel-data-desc">Kolsay Lakes Town</div>
                    <div class="hotel-data-les">from 30 000 ₸</div>
                </div>
            </div>
        </a>
        <a href="#" class="hotel-link" id="Manor Kolsay" onclick="callHotel(id)">
            <div class="one_hotel">
                <img src="images/hotels_photo/Manor%20Kolsay/manor_kolsay.jpg" alt="photo">
                <div class="hotel-data">
                    <div class="hotel-data-desc">Manor Kolsay</div>
                    <div class="hotel-data-les">from 60 000 ₸</div>
                </div>
            </div>
        </a>
        <a href="#" class="hotel-link" id="Kolsay Grand" onclick="callHotel(id)">
            <div class="one_hotel">
                <img src="images/hotels_photo/Kolsay%20Grand/Kolsay_Grand1.jpg" alt="photo">
                <div class="hotel-data">
                    <div class="hotel-data-desc">Kolsay Grand</div>
                    <div class="hotel-data-les">from 40 000 ₸</div>
                </div>
            </div>
        </a>
        <a href="#" class="hotel-link" id="Kolsay Nomads" onclick="callHotel(id)">
            <div class="one_hotel">
                <img src="images/hotels_photo/Kolsay%20Nomads/kolsay_nomads.jpg" alt="photo">
                <div class="hotel-data">
                    <div class="hotel-data-desc">Kolsay Nomads</div>
                    <div class="hotel-data-les">from 120 000 ₸</div>
                </div>
            </div>
        </a>
        <a href="#" class="hotel-link" id="Tau Kolsay" onclick="callHotel(id)">
            <div class="one_hotel">
                <img src="images/hotels_photo/Tau%20Kolsay/tau_kolsay.jpeg" alt="photo">
                <div class="hotel-data">
                    <div class="hotel-data-desc">Tau Kolsay</div>
                    <div class="hotel-data-les">from 60 000 ₸</div>
                </div>
            </div>
        </a>
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
<script src="./hotels_scripts.js"></script>
</body>
</html>