<!DOCTYPE html>
<html>
<body>
<head>
<script type="text/javascript">
function save()
{
uname=document.getElementById("uname").value;
phone=document.getElementById("uphone").value;
email=document.getElementById("email").value;
var myObj = { "name" : ""+ uname +"", "phone":"" + phone + "", "email" : "" + email + "" };
myJSON = JSON.stringify(myObj);
window.location = "display_json.php?x=" + myJSON;
}
</script>
</head>
<form>
<h3> Student Information </h3>
<h3> Name : <input type="text" id="uname" /> </h3>
<h3> Phone : <input type="text" id="uphone" /> </h3>
<h3> Email : <input type="text" id="email" /> </h3>
<input type="button" id="bt" value="submit" onclick="save();"/>
</form>
</body>
</html>
//display_json.php