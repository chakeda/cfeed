<?php 
require('header.php');
require('functions.php');
?>

<br />
<p>Enter the Website URL that you want to track traffic live.
You will then receive JavaScript code to add to your website.</p>
<br />
<form action="insert.php" method="post">
    <p>Website URL</p>
        <input type="text" name="website">
    <p>Password (optional)</p>
        <input type="password" name="password">
    <p>Platform</p>
        <select name="platform">
            <option value="universalcode">Universal Code</option>
            <option value="wordpress">WordPress</option>
            <option value="blogger">Blogger</option>
        </select>
    <br />
    <br />
        <input type="submit" value="Submit">
</form>

<? require('footer.php'); ?>