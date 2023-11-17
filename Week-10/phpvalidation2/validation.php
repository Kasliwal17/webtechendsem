<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = "";
function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["name"])) {
 $nameErr = "Name is required";
 } else {
 $name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
 $nameErr = "Only letters and white space allowed";
}
 }
 if (empty($_POST["email"])) {
 $emailErr = "Email is required";
 } else {
 $email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $emailErr = "Invalid email format";
}
 }
 
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Form Validation</title>
</head>
<body>
 <h2>Server-side Form Validataion</h2>
<form method="post" name="empfrm" id="eform" action="" >
Name: <input type="text" id="name" name="name" value="<?php echo $name;?>">
<span class="error">* <?php echo $nameErr;?></span>
<span id="nameError" class="red"></span>
<br><br>
E-mail:
<input type="text" id="email" name="email" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailErr;?></span>
<span id="emailError" class="red"></span>
<br><br>
<input type="submit" id="submit" name="submit" value="Submit">
<input type="reset" value="CLEAR" id="reset"/>
</form>
</body>
</html>
// php validation example 2
//validation.php
//Refer to above eg JS and CSS
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = "";
function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["name"])) {
 $nameErr = "Name is required";
 } else {
 $name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
 $nameErr = "Only letters and white space allowed (Server-side)";
}
 }
 if (empty($_POST["email"])) {
 $emailErr = "Email is required";
 } else {
 $email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $emailErr = "Invalid email format (Server-side)";
}
 }
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Test JavaScript Form Validation</title>
 <link rel="stylesheet" href="validatcss.css">
 <script type="text/javascript" src="validatefrm.js" ></script>
</head>
<body>
 <h2>Test JavaScript Form Validataion</h2>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" 
name="empfrm" id="eform" onsubmit="return validateForm(this)">
 <table>
 <tr>
 <td>Name<span class="red">*</span></td>
 <td>
 <input type="text" id="name" name="name" tabindex="1" placeholder="Enter" value="<?php 
echo $name;?>"
/>&nbsp;&nbsp;
 <span id="nameError" class="red"></span>
<span class="error">* <?php echo $nameErr;?></span>
 </td></tr>
 <tr>
 <td>Email<span class="red">*</span></td>
 <td>
 <input type="text" id="email" name="email" value="<?php echo $email;?>" />
 <span id="emailError" class="red"></span>
<span class="error">* <?php echo $emailErr;?></span>
 </td></tr>
 <tr>
 <td>&nbsp;</td>
 <td>
 <input type="submit" value="SEND" id="submit"/>&nbsp;
 <input type="reset" value="CLEAR" id="reset"/>&nbsp;&nbsp;
 </td></tr>
 </table>
 </form>
</body>
</html>