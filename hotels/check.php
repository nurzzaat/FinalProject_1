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
</head>
<body onload="hotel()">

<div class="certain_hotel_wrapper">
    <h4><a href="./hotels.html">Hotels</a> / <?php echo $data['hotel_name']; ?></h4>
    <h1><?php echo $data['hotel_name']; ?> <p onclick="switchHearts()">
            <svg id="hide" display="block" width="26" height="22" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.1941 2.93382C20.5528 0.29325 16.256 0.29325 13.6154 2.93382L13.0021 3.54679L12.3891 2.93382C9.74857 0.292893 5.45139 0.292893 2.81082 2.93382C0.223861 5.52078 0.207063 9.62138 2.77186 12.4725C5.11113 15.0719 12.0103 20.688 12.303 20.9257C12.5017 21.0872 12.7408 21.1658 12.9785 21.1658C12.9864 21.1658 12.9942 21.1658 13.0017 21.1655C13.2477 21.1769 13.4953 21.0926 13.7005 20.9257C13.9932 20.688 20.8931 15.0719 23.2331 12.4721C25.7975 9.62138 25.7807 5.52078 23.1941 2.93382ZM21.639 11.0378C19.8151 13.064 14.8017 17.2429 13.0017 18.7258C11.2018 17.2432 6.18945 13.0647 4.36593 11.0382C2.57671 9.04952 2.55992 6.21738 4.32697 4.45033C5.22944 3.54821 6.41462 3.0968 7.5998 3.0968C8.78499 3.0968 9.97017 3.54786 10.8726 4.45033L12.2208 5.79849C12.3813 5.95897 12.5836 6.05476 12.7959 6.08835C13.1404 6.16234 13.5143 6.06619 13.7823 5.79885L15.1312 4.45033C16.9365 2.64575 19.873 2.6461 21.6772 4.45033C23.4443 6.21738 23.4275 9.04952 21.639 11.0378Z" fill="#A0A7AF"/>
            </svg>
            <svg id="show" display="none" width="32" height="28" viewBox="0 0 32 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.4291 3.28953C25.9488 -0.189788 20.2872 -0.189788 16.8079 3.28953L15.9997 4.09719L15.1921 3.28953C11.7127 -0.190259 6.05061 -0.190259 2.5713 3.28953C-0.837377 6.6982 -0.859511 12.1013 2.51996 15.858C5.60228 19.2832 14.6929 26.6831 15.0786 26.9963C15.3404 27.2091 15.6555 27.3127 15.9686 27.3127C15.979 27.3127 15.9894 27.3127 15.9993 27.3123C16.3233 27.3273 16.6496 27.2162 16.9199 26.9963C17.3056 26.6831 26.3972 19.2832 29.4804 15.8575C32.8594 12.1013 32.8373 6.6982 29.4291 3.28953Z" fill="#E53D18"/>
            </svg>
            <span id="switchText">Like</span>
        </p></h1>
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
<script src="./certain_hotel_scripts.js"></script>
</body>
</html>