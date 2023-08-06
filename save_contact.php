<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "allen solly";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$phone_no = $_POST['phone_no'];
$email = $_POST['email'];
$product_id = $_POST['product_id'];
$size = $_POST['size'];
$address = $_POST['Address'];

// Prepare and execute SQL query to insert form data into database
$sql = "INSERT INTO contact (name, phone_no, email, product_id, size, address) 
VALUES ('$name', '$phone_no', '$email', '$product_id', '$size', '$address')";
if ($conn->query($sql) === TRUE) {
    echo "          Form submitted successfully! 
                    We will contact you to confirm your order!
                    Thank you form choosing us! ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
