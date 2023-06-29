<?php

include "connect.php";


if (isset($_GET['id']))
    $ID = $_GET['id'];

$query = "DELETE FROM reservations WHERE ID = ?";
$sth = $pdo->prepare($query);


try {
    $sth->execute([$ID]);
    echo "<script>alert('Klant Deleted'); location.href = 'reservatie_bewerken.php'; </script>";
} catch (PDOException $e) {
    echo "<script>alert('Er is iets misgegaan')</script>";
}
