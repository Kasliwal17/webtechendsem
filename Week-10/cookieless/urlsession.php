<?php
include 'nocookie.php';
//session_id("8989898hhjj");
echo session_id();
?>
<?php
if(isset($_SESSION['username']))
{
echo "Welcome User =". $_SESSION['username'];
}
else
{
$_SESSION['username']="ADMIN";
//echo "Session Not defined";
echo "Welcome User =". $_SESSION['username'];
}
?>
<a href="urlsession2.php">click here to turn back to same page</a>