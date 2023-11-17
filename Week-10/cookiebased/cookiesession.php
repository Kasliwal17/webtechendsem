<?php
//include 'nocookie.php';
// session_id("8989898hhjj");
session_start();
echo session_id();
if(!isset($_SESSION['username']))
$_SESSION['username']="ADMIN1";
echo "Welcome User =". $_SESSION['username'];
?>
<a href="cookiesession2.php">click here to move to page 2</a>