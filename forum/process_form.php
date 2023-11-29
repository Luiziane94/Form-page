<?php
// Include the database connection file
include 'dbConfig.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into the database
    $sql = "INSERT INTO forumMessage (name, email, message) VALUES ('$name', '$email', '$message')";
    
    if ($db->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

// Close the database connection
$db->close();
?>