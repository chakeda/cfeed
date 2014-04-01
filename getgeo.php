<?php

function freegeoip_locate($ip) {
    $url = "http://freegeoip.net/json/".$ip; // Check this out! Function returns associative array about visitor geolocation. 
    $geo = json_decode(file_get_contents($url), true);
    return $geo;
}
$geo = geolocation($_POST["ip"]);

/*
var country = "<? echo $geo['country_name']; ?>";
var city = "<? echo $geo['city']; ?>";
*/

?>
