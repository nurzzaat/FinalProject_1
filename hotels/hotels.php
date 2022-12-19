<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./hotels_styles.css">
</head>
<body>
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
<script src="./hotels_scripts.js"></script>
</body>
</html>