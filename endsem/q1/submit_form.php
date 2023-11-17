<?php
// Replace with your actual database credentials
$dbHost = 'localhost';
$dbUsername = 'root'; // default XAMPP username
$dbPassword = ''; // default XAMPP password is empty
$dbName = 'first'; // replace with your database name

// Create connection with the MySQL database
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data and escape variables for security
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $lastname = $conn->real_escape_string($_POST['lastname']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $country = $conn->real_escape_string($_POST['country']);
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    
    // Hash the password for security
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    
    // Insert new entry into the database
    $insert = $conn->prepare("INSERT INTO users (firstname, lastname, email, phone, country, username, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $insert->bind_param("sssssss", $firstname, $lastname, $email, $phone, $country, $username, $passwordHash);
    
    if ($insert->execute()) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $insert->error;
    }
    $insert->close();
}

$conn->close();
?>
