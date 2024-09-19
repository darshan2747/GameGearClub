<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the email is set and not empty
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];

        // Database connection information
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db";

        // Create a database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check if the connection was successful
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to insert the email into the database
        $sql = "INSERT INTO email (email) VALUES ('$email')";

        // Execute the SQL query
        if ($conn->query($sql) === TRUE) {
            echo "you are eligible to claim rewards!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "Email is required.";
    }
}
?>
