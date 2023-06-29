<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="midden">
        <table id="tabel" border="0" cellspacing="3">
            <caption>
                <h1>Klanten</h1>
            </caption>
            <thead>
                <?php
                include 'connect.php';
                try {
                    // Establish a database connection
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "hotel_reservation";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM reservations";
                    $result = $conn->query($sql);

                    // Fetch column names
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        foreach ($row as $value => $key) {
                            echo "<td><b>" . $value . "</b></td>";
                        }
                    }

                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";

                    $bgcolor = true;

                    // Fetch rows
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo ($bgcolor ? "<tr bgcolor= #d7d7d7>" : "<tr>");
                            echo "<td>" . $row['id'] . "</td>" .
                                "<td>" . $row['name'] . "</td>" .
                                "<td>" . $row['email'] . "</td>" .
                                "<td>" . $row['room'] . "</td>" .
                                "<td>" . $row['check_in'] . "</td>" .
                                "<td>" . $row['check_out'] . "</td>" .
                                "<td>" . $row['adults'] . "</td>" .
                                "<td>" . $row['children'] . "</td>" .
                                "<td>" . $row['days'] . "</td>" .
                                "<td><a style='text-decoration:none' href='reservatie_verwerken.php?&id=" . $row['id'] . "'>&#9998;</a></td>" .
                                "<td><a style='text-decoration: none' href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"weet je zeker dat je dit wil verwijderen?\");'>&#128465;</a></td>";
                            $bgcolor = ($bgcolor ? false : true);
                        }
                    }
                    $conn->close();
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                ?>
                </tbody>
            <tfoot>
        </table>
    </div>
    <style>
        .midden {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</body>

</html>