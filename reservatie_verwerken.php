<?php
include 'connect.php';
try {
    $id = $_GET['id'];
    $query = "SELECT * FROM reservations WHERE id = ?";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':id', $id);
    $statement->execute();
    $reservations = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

foreach ($reservations as $reservation) {
}
?>

<div class="content">
    <h1>Klant Updaten</h1>
    <form name="edit" class="form" action="reservatie_update.php" method="post">
        <fieldset>
            <input type="hidden" name="id" id="id" value="<?php echo $reservation['ID']; ?>" /><br>
            <label>name:</label><br>
            <input type="text" name="name" id="name" value="<?php echo $reservation['name']; ?>" /><br>

            <label>email:</label><br>
            <input type="text" name="email" id="email" value="<?php echo $reservation['email']; ?>" /><br>

            <label>room:</label><br>
            <input type="text" name="room" id="room" value="<?php echo $reservation['room']; ?>" /><br>

            <label>check_in:</label><br>
            <input type="text" name="check_in" id="check_in" value="<?php echo $reservation['check_in']; ?>" /><br>

            <label>check_out:</label><br>
            <input type="text" name="check_out" id="check_out" value="<?php echo $reservation['check_out']; ?>" /><br>

            <label>adults:</label><br>
            <input type="adults" name="adults" id="adults" value="<?php echo $reservation['adults']; ?>" /><br>

            <label>children:</label><br>
            <input type="children" name="children" id="children" value="<?php echo $reservation['children']; ?>" /><br>

            <label>days:</label><br>
            <input type="days" name="days" id="days" value="<?php echo $reservation['days']; ?>" /><br>

            <div class="button">
                <input name="submit" type="submit" value="submit"><br>
            </div>
        </fieldset>
    </form>
</div>