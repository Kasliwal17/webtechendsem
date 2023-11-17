<?php
include 'nocookie.php';
echo SID;
//echo session_id();
if(isset($_SESSION['username']))
{
//echo SID;
echo "Welcome User =". $_SESSION['username'];
}
?>