<?php

require("functions.php");

class feed extends functions{
    
    public function fillData($website, $camefrom, $favicon, $ip, $cameto, $timestamp, $country, $city){        
        $conn = parent::connect();
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }       
        $sql = "INSERT INTO `cfeed_$website` (
            ip, camefrom, cameto, timestamp, website, favicon, country, city
            ) VALUES (
            '$ip', '$camefrom', '$cameto', '$timestamp', '$website', '$favicon', '$country', '$city')"; 
        if (!mysqli_query($conn,$sql)){
            die('Error: ' . mysqli_error($conn));
        }
        $conn = parent::close();     
    }
    
    public function getData($website){
        $website = $this->stripDots($website);
        
        $conn = parent::connect();
        $sql = "SELECT * FROM cfeed_".$website." ORDER BY `id` DESC LIMIT 100";
        $result=mysqli_query($conn,$sql);
        for ($data = array (); $row = $result->fetch_assoc(); $data[] = $row); // Associative array of entire database (limit 100)
        // Above loop returns a PHP error when there is no data in database 
        $conn = parent::close();
        return $data;             
    }
    
    public function ifDirect($camefrom){
        if ($camefrom === ""){
            $result = 'Direct';
        }else{
            $result = '<a href="'.$camefrom.'">'.$camefrom.'</a>';
        }
        return $result;
    }
    
    public function ifUnknown($cameto){
        if ($cameto === ""){
            $result = 'Unknown';
        }else{
            $result = '<a href="'.$cameto.'">'.$cameto.'</a>';
        }
        return $result;
    }
    
    public function ifAnonymous($ip){
        if ($ip === ""){
            $result = 'Anonymous';
        }else{
            $result = $ip;
        }
        return $result;
    }
    
    public function geoUnknown($geo){
        if ($geo === ""){
            $result = "Unknown";
        }else{
            $result = $geo;
        }
        return $result;
    }
    
    public function parseData($data){ // Outputs live feed stuff, $data comes from getData, getData comes from sendData. Works. 
        $result = ' <div class="favicon"><u>Referrer Favicon</u></div>
                    <div class="ip"><u>IP</u></div>
                    <div class="country"><u>Country</u></div>
                    <div class="city"><u>City</u></div>
                    <div class="camefrom"><u>Referrer</u></div>
                    <div class="cameto"><u>Landing Page</u></div>
                    <div class="timestamp"><u>Timestamp</u></div>
                    <br class="clearClass" /><br /><br />';
        foreach ($data as $arr){
                $camefromi = $this->ifDirect($arr["camefrom"]);
                $cametoi = $this->ifUnknown($arr["cameto"]);
                $ipi = $this->ifAnonymous($arr["ip"]);
                $countryi = $this->geoUnknown($arr["country"]);
                $cityi = $this->geoUnknown($arr["city"]);
                $result .= '<br />
                    <div class="favicon"><img src="'.$arr["favicon"].'" width="50px" height="50px"></div>
                    <div class="ip">'.$ipi.'</div>              
                    <div class="country">'.$countryi.'</div>
                    <div class="city">'.$cityi.'</div>
                    <div class="camefrom">'.$camefromi.'</div>
                    <div class="cameto">'.$cametoi.'</div>
                    <div class="timestamp">'.$arr["timestamp"].'</div>
                    <br class="clearClass" />';           
        }      
        return $result;
    }
        
}
/*
 *                 foreach($arr as $a){ // Match bg color if the ips are the same for easier traffic monitoring, similar to statcounter ip sorting
                    $result .= '<div id="ip"';
                    if ($a["ip"] == $a["ip"]){
                        $result .= 'style="color:red"';
                    }
                    $result .= '>'.$a["ip"].'</div>';
                }
 */

?>
