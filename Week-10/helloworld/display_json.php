<!DOCTYPE html>
<html>
<head>
<style>
table {
 width: 100%;
 border-collapse: collapse;
}
table, td, th {
 border: 1px solid black;
 padding: 5px;
}
th {text-align: left;}
</style>
</head>
<body>
<?php
$data = $_GET['x'];
$data_decode = json_decode($data);
$name = $data_decode->name;
$phone=$data_decode->phone;
$email= $data_decode->email;
echo "<br/> <h4> Information Entered </h4>";
echo "------------------------------<br/>";
print "Name : ".$name."<br/>";
print "Phone : ".$phone."<br/>";
print "Email : ".$email."<br/>";
echo "------------------------------<br/>";
// Create connection
$link = mysqli_connect("localhost", "root", "","test");
// Check connection
if (!$link)
{
die("Connection failed: " . mysqli_connect_error());
}
$query2 = "INSERT INTO tb_text_book VALUES('$name', '$phone', '$email')";
$res2 = mysqli_query($link,$query2);
$query3 = "SELECT * FROM tb_text_book";
$res3 = mysqli_query($link,$query3);
echo "<br/> <h3> Table Contents Are </h3>";
echo "<table>
<tr>
<th>UserName</th>
<th>Phone </th>
<th>Email</th>
</tr>";
while($row = mysqli_fetch_array($res3)) {
 echo "<tr>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['phone'] . "</td>";
 echo "<td>" . $row['email'] . "</td>";
 echo "</tr>";
}
echo "</table>";
mysqli_close($link);
?>
</body>
</html>