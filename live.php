<?php
require("header.php");
require("feed.php");

$website = $_GET['website'];

?>
<script type="text/javascript">
// Prints the Database Traffic Data on click of the <div data>
var website = "<? echo $website; ?>";

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
    echo "<br /><br /><p>Hello ".$website.".</p>";
    echo '<div id="data"><br /><h3>Click here to refresh your feed.</h3><br /></div>';
}
else
{
    die("There is no website called with the live feed.");
}

require("footer.php");
?>
