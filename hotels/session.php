<?php
const DB_SERVER = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'front_final';

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if(isset($_POST['current_hotel'])){
    $current_hotel_page = $_POST['current_hotel'];
    echo "Data came";
}

session_start();

$_SESSION['current_hotel'] = $current_hotel_page;
?>