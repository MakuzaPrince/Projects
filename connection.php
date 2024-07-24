<?php
// Connect to the MySQL database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'seth'; // Replace with your actual database name
$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert data into the database
$sql = "INSERT INTO test (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if (mysqli_query($connection, $sql)) {
    $response = "Data inserted successfully.";
    // Generate a JavaScript alert
    echo "<script>alert('$response'); window.location = 'contact.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>
