<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

$conn = new mysqli($localhost, $root, $password, $contact);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $email = $_POST["email"];
    $help = $_POST["help"];

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO contacts (first_name, last_name, email, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $help);
    $stmt->execute();

    $stmt->close();

    // Display a success message or redirect the user
    if ($stmt->affected_rows > 0) {
        echo "Thank you for your submission!";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}

$conn->close();
?>