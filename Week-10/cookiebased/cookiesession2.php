<?php
//include 'nocookie.php';
//echo SID;
session_start();
echo session_id();
//echo SID;
if(isset($_SESSION['username']))
{
echo "Welcome User =". $_SESSION['username'];
}
else
{
echo "Session Not defined";
}
?>