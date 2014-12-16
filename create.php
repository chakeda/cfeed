<?php 
require('header.php');
require('functions.php');
$functions = new functions();

// if all required fields were entered (in the previous page):
if (!empty($_POST['website']) && !empty($_POST['password']) && !empty($_POST['platform'])){

    $website = $_POST['website'];
    $website = $functions->stripDots($website);
    $website = $functions->striphttp($website);
    $website = $functions->stripSlash($website);
    $password = md5($_POST['password']);

    $functions->newUser($website, $password); 
    $functions->createWebsiteFeedTable($website); 

    $platform = $_POST['platform'];
    $script_code = $functions->generateCode($platform);
    
?>
    <p>Thanks for choosing cFeed.</p>
    <p>Copy and paste this code on your website sidebar or header to start tracking your website traffic live.</p>
    <br />
    <pre><? echo $script_code; ?></pre>
    <br />
    <br />
    <p>You can access your live traffic feed <? echo '<a href="http://www.kitechristianson.com/cfeed/live.php?website='.$website.'">Here</a>.'; ?></p>
    <p>It is recommended you bookmark that page.</p>

<?php

// elseif some but not all required fields were entered:    
}elseif(isset($_POST['website']) || isset($_POST['password']) || isset($_POST['platform'])){
?>

<br />
<p>Enter the Website URL that you want to track traffic live.
You will then receive JavaScript code to add to your website.</p>
<p><strong>You seem to have errors!</strong></p>
<br />
<form action="create.php" method="post">
    <? echo (empty($_POST['website'])? '<p>Please enter your website URL!</p>' : '<p>Website URL</p>'); ?>
        <input type="text" name="website">
    <? echo (empty($_POST['password']) ? '<p>Please enter a password!</p>' : '<p>Password</p>'); ?>
        <input type="password" name="password">
    <? echo (empty($_POST['platform']) ? '<p>Please select your platform!</p>' : '<p>Platform</p>'); ?>
        <select name="platform">
            <option value=""></option>
            <option value="universalcode">Universal Code</option>
            <option value="wordpress">WordPress</option>
            <option value="blogger">Blogger</option>
        </select>
    <br />
    <br />
        <input type="submit" value="Submit">
</form>

<?php
// else nothing was entered: show default. 
}else{
?>
    <br />
<p>Enter the Website URL that you want to track traffic live.
You will then receive JavaScript code to add to your website.</p>
<br />
<form action="create.php" method="post">
   <p>Website URL</p>
        <input type="text" name="website">
    <p>Password</p>
        <input type="password" name="password">
    <p>Platform</p>
        <select name="platform">
            <option value=""></option>
            <option value="universalcode">Universal Code</option>
            <option value="wordpress">WordPress</option>
            <option value="blogger">Blogger</option>
        </select>
    <br />
    <br />
        <input type="submit" value="Submit">
</form>

<?php
}
require('footer.php');
?>