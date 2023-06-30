<?php
include 'connect.php';

try {
    $sql = "SELECT * FROM reservations WHERE ID = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($_GET['id']));
    $reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

foreach ($reservations as $reservation) {
?>
    <div class="content">
        <h1>Reservation Update</h1>
        <form name="edit" class="form" action="reservatie_update.php" method="post">
            <fieldset>
                <input type="hidden" name="id" id="id" value="<?php echo $reservation['id']; ?>" /><br>
                <label>Name:</label><br>
                <input type="text" name="name" id="name" value="<?php echo $reservation['name']; ?>" /><br>

                <label>Email:</label><br>
                <input type="text" name="email" id="email" value="<?php echo $reservation['email']; ?>" /><br>

                <label>Room:</label><br>
                <input type="text" name="room" id="room" value="<?php echo $reservation['room']; ?>" /><br>

                <label>Check_in:</label><br>
                <input type="text" name="check_in" id="check_in" value="<?php echo $reservation['check_in']; ?>" /><br>

                <label>Check_out:</label><br>
                <input type="text" name="check_out" id="check_out" value="<?php echo $reservation['check_out']; ?>" /><br>

                <label>Adults:</label><br>
                <input type="adults" name="adults" id="adults" value="<?php echo $reservation['adults']; ?>" /><br>
                <label>Children:</label><br>
                <input type="children" name="children" id="children" value="<?php echo $reservation['adults']; ?>" /><br>
                <label>days:</label><br>
                <input type="days" name="days" id="days" value="<?php echo $reservation['adults']; ?>" /><br>
                <div class="button">
                    <input name="submit" type="submit" value="Submit"><br>
                </div>
            </fieldset>
        </form>
    </div>
<?php
}
?>