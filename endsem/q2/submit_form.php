<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Create an associative array to store form data
    $formData = [
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'country' => $_POST['country'],
        'username' => $_POST['username'],
        'password' => $_POST['password'] // In a real application, you would never store plain-text passwords
    ];

    // Normally you would save this array to a database or a file
    // For demonstration purposes, we'll just display the array
    echo '<pre>';
    print_r($formData);
    echo '</pre>';
}
?>
