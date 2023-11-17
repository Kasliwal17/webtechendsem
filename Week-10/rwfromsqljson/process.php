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
 
 $myFile = "data.json";
 $arr_data = array(); // create empty array
 try
 {
 //Get form data
 $formdata = array(
 'firstName'=> $_POST['firstName'],
 'lastName'=> $_POST['lastName'],
 'email'=>$_POST['email'],
 'mobile'=> $_POST['mobile']
 );
 //Get data from existing json file
 $jsondata = file_get_contents($myFile);
 // converts json data into array
 $arr_data = json_decode($jsondata, true);
 // Push user data to array
 array_push($arr_data,$formdata);
 //Convert updated array to JSON
 $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
 
 //write json data into data.json file
 if(file_put_contents($myFile, $jsondata)) {
 echo 'Data successfully saved';
$arr_data = json_decode($jsondata, true);
//print_r($arr_data);
echo "<br/> <h4> Information Entered </h4>";
echo "<table>
<tr>
<th>FirstName</th>
<th>LastName </th>
<th>Email</th>
<th>Mobile</th>
</tr>";
foreach($arr_data as $x=>$x_value){
echo "<tr>";
echo "<td>" .$x_value["firstName"]. "</td>";
echo "<td>" .$x_value["lastName"]. "</td>";
echo "<td>" .$x_value["email"]. "</td>";
echo "<td>" .$x_value["mobile"]. "</td>";
echo "</tr>";
}
echo "</table>";
} 
 else 
 echo "error";
 }
 catch (Exception $e) {
 echo 'Caught exception: ', $e->getMessage(), "\n";
 }
?>
</body>
</html>