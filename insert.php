<?php 
require('header.php');
require('functions.php');

$functions = new functions();

$website = $_POST['website'];
$website = $functions->stripDots($website);
$website = $functions->striphttp($website);
$website = $functions->stripSlash($website);

$password = $_POST['password'];

$functions->newUser($website, $password); 
$functions->createWebsiteFeedTable($website, $password); 

$platform = $_POST['platform'];
$script_code = $functions->generateCode($platform);

?>

<p>Thanks for choosing cFeed.</p>
<p>Copy and paste this code on your website sidebar or header to start tracking your website traffic live.</p>
<br />
<pre><? echo $script_code; ?></pre>
<br />
<br />
<p>You can access your live traffic feed <?php echo '<a href="http://www.chakeda.com/cfeed/live.php?website='.$website.'">Here</a>.'; ?></p>
<p>It is recommended you bookmark that page.</p>

<?php
require('footer.php');
?>