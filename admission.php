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

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$currentAddress = $_POST['currentAddress'];
$telephone = $_POST['telephone'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$district = $_POST['district'];
$nationality = $_POST['nationality'];
$dob = $_POST['dob'];
$brandRequest = $_POST['brandRequest'];

$sql = "INSERT INTO admissions (first_name, last_name, current_address, telephone, gender, district, nationality, dob, brand_request) 
        VALUES ('$firstName', '$lastName', '$currentAddress', '$telephone', '$gender', '$district', '$nationality', '$dob', '$brandRequest')";

if (mysqli_query($connection, $sql)) {
    $response = "Admission form submitted successfully.";
    echo "<script>alert('$response'); window.location = 'contact.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
