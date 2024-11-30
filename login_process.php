<?php
$servername = "localhost";
$username = "root";
$password = ""; // If you set a password for your MySQL, enter it here
$dbname = "db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location:index.html");
} else {
    echo "Invalid login credentials.";
}

$conn->close();
?>
