<?php
include 'Database.php';
$database = new Database();

$name = $_POST["Name"];
$date = $_POST["Date"];
$time = $_POST["Time"];
$place = $_POST["Place"];
$city = $_POST["City"];
$country = $_POST["Country"];
$numticket = $_POST["Numticket"];
$link = $_POST["Link"];
$category = $_POST["Category"];
$price = $_POST["Price"];

session_start();
$username = $_SESSION['currentUser'];

if($database->getPlaceEvents($place)->num_rows==0)
    $database->createPlace($place,$city,$country);
$database->createEvent($name,$date,$time,$place,$link,$category,$numticket,$username,$price);



header('Location: AdminProfile.php');