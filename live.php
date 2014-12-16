<?php
require("header.php");
require("feed.php");

$website = $_GET['website'];

?>
<script type="text/javascript">
var website = "<? echo $website; ?>"; // this here some voodoo shit: passes php variable to javascript. 

/* ---- Removed due to possiblility of massing: this retrieves traffic every page click on live.php
$(document).ready(function() {
    $('#data').click(function() {
        $.ajax({
            type: "POST",
            data: "website="+website,
            url: "livecontent.php",
            success: function(data) {
                $("#data").html(data);                
                console.log("#result", arguments);
            },        
            error: function(jqxhr, textStatus, error) { 
                console.log("error", arguments);
            },
            complete: function(jqxhr, textStatus) {
                console.log("complete", arguments);
            }
            
        });
    });
});
---- */

// Prints the Database Traffic Data  on page load
$(document).ready(function() { 

    window.onload=function(){
        $.ajax({
            type: "POST",
            data: "website="+website,
            url: "livecontent.php",
            success: function(data) {
                $("#data").html(data);                
                console.log("#result", arguments);
            },        
            error: function(jqxhr, textStatus, error) { 
                console.log("error", arguments);
            },
            complete: function(jqxhr, textStatus) {
                console.log("complete", arguments);
            }
        });  
    };
});
</script>


<?php

if (isset($_GET['website']))
{
    echo "<br /><br /><p>Tracking Website Traffic Live for ".$website.".</p>";
    // echo "<p>Do you own ".$website."? <a href='lock.php'>Privatize your feed</a></p><hr />";
    echo '<div id="data"></div>';
}
else
{
    die("There is no website called with the live feed.");
}

require("footer.php");
?>
