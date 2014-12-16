<?php

// Super interesting third party function:
// returns associative array regarding visitor geolocation, given IP address. 
// the link is just a JSON string which can be converted to associtive array
function freegeoip_locate($ip) {
    $url = "http://freegeoip.net/json/".$ip; 
    $geo = json_decode(file_get_contents($url), true);
    return $geo;
}
$geo = geolocation($_POST["ip"]);

/*
FILLER
var country = "<? echo $geo['country_name']; ?>";
var city = "<? echo $geo['city']; ?>";
*/

?>
