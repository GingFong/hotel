<?php
// Establish a connection to the MySQL server
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create a table to store contact information
$sql = "CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message TEXT NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table 'contacts' created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Handle form submission and insert data into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['help'];

    $insert_query = "INSERT INTO contacts (first_name, last_name, email, message)
                    VALUES ('$first_name', '$last_name', '$email', '$message')";

    if (mysqli_query($conn, $insert_query)) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!-- The rest of your HTML code -->
<html lang="en">
<!-- ... -->
</html>