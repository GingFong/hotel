<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $room = $_POST['room'];
    $checkIn = $_POST['check-in'];
    $checkOut = $_POST['check-out'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $days = $_POST['days'] ?? 0; // Use the null coalescing operator to handle undefined 'days'

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'hotel_reservation');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query
    $sql = "INSERT INTO reservations (name, email, room, check_in, check_out, adults, children, days)
            VALUES ('$name', '$email', '$room', '$checkIn', '$checkOut', $adults, $children, $days)";

    if ($conn->query($sql) === TRUE) {
        // Reservation successful
        echo "Reservation confirmed. Thank you!";
    } else {
        // Error in inserting the reservation
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
