<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Max-Age: 1000');
require('feed.php');

$feed = new feed();

// see getgeo.php. The file contains the same function, but I actually use this function.
function geolocation($ip) {
    $url = "http://freegeoip.net/json/".$ip;
    $geo = json_decode(file_get_contents($url), true);
    return $geo;
}
$geo = geolocation($_POST["ip"]);

$website = $_POST['website'];  
$camefrom = $_POST['camefrom'];
$favicon = $_POST['favicon'];
$ip = $_POST['ip'];
$cameto = $_POST['cameto'];
$timestamp = $_POST['timestamp'];

$country = $geo['country_name'];
$city = $geo['city'];


$feed->fillData($website, $camefrom, $favicon, $ip, $cameto, $timestamp, $country, $city);

?>
