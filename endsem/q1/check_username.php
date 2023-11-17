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

// Check if username parameter is passed
if (isset($_GET['username'])) {
    $username = $_GET['username'];

    // Prepare and bind parameters to prevent SQL injection
    $stmt = $conn->prepare("SELECT username FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        // Username exists
        echo "taken";
    } else {
        // Username doesn't exist
        echo "available";
    }
    $stmt->close();
}
$conn->close();
?>
