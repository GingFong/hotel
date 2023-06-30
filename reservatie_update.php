<?php
include "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $room = $_POST['room'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $days = $_POST['days'];

    $query = "UPDATE reservations SET name = ?, email = ?, room = ?, check_in = ?, check_out = ?, adults = ?, children = ?, days = ? WHERE id = ?";

    $sth = $pdo->prepare($query);

    try {
        $sth->execute([$name, $email, $room, $check_in, $check_out, $adults, $children, $days, $id]);
        echo "<script>alert('Klant Updated'); location.href = 'reservatie_bewerken.php'; </script>";
    } catch (PDOException $e) {
        echo "<script>alert('Er is iets misgegaan')</script>";
    }
} else {
    echo "<script>alert('Invalid request')</script>";
}
?>