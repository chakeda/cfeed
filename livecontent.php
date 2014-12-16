<?php

require('feed.php');

$feed = new feed();

// get data from POST or GET
if (isset($_POST['website'])){
    $website = $_POST['website'];
    $data = $feed->getData($website); // data retrieved as array from database
    $trafficData = $feed->parseData($data); // data parsed into html table
}elseif (isset($_GET['website'])){
    $website = $_GET['website'];
    $data = $feed->getData($website); 
    $trafficData = $feed->parseData($data);
}else{
    die("<br /><p>A website to track was not given.</p>");
}

echo $trafficData; // The first 30 visitor datas will be echoed by <div id="data"> in 'live.php' .

?>
