<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel ter Duin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
    <style>
        body {
            background-color: #FFF8DE;
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
        }

        * {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: none;
            color: #000000;
        }

        /* nav bar */
        .nav {
            background-color: #D6E8DB;
            overflow: hidden;
            position: sticky;
            left: 0px;
            top: 0;
            height: 50px;
            width: 100%;
            z-index: 2000;
        }

        ul {
            background-color: #D6E8DB;
            padding-right: 20px;
            padding-top: 10px;
            display: flex;
            flex-direction: row;
            justify-content: right;
            overflow: hidden;
            position: relative;
        }

        nav li {
            display: inline-block;
            height: 100%;
            width: 10%;
        }

        nav li a {
            color: #000000;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            transform: scale(10);
            transition: 0.3s ease-in-out;
        }

        nav li a:hover {
            color: #FFF8DE;
            left: 0;
            transform: scale(1);
        }

        nav li a:after {
            display: block;
            content: '';
            border-bottom: solid 3px #FFF8DE;
            transform: scaleX(0);
            transition: transform 0.4s ease-in-out;
            transform-origin: 100% 50%;
        }

        nav li a:hover:after {
            transform: scaleX(1);
            transform-origin: 0 50%;
        }

        .logo {
            position: fixed;
            top: 10px;
            left: 10px;
            width: 300px;
            z-index: 3000;
        }

        .cartlogo {
            position: fixed;
            right: 70px;
            z-index: 3000;
            width: 30px;
        }

        .profilelogo {
            width: 30px;
        }

        /* Reservation form styles */
        .reservation-form {
            margin: 50px auto;
            max-width: 600px;
            padding: 20px;
            background-color: #F0F0F0;
        }

        .reservation-form label {
            display: block;
            margin-bottom: 10px;
        }

        .reservation-form input[type="text"],
        .reservation-form select,
        .reservation-form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
        }

        .reservation-form button {
            background-color: #D6E8DB;
            border: none;
            color: #000000;
            padding: 10px 20px;
            cursor: pointer;
        }

        /* Reservation confirmation message styles */
        .reservation-confirmation {
            display: none;
            margin: 50px auto;
            max-width: 600px;
            padding: 20px;
            background-color: #F0F0F0;
        }

        .reservation-confirmation h2 {
            margin-bottom: 20px;
        }

        .reservation-confirmation p {
            margin-bottom: 10px;
        }

        .reservation-confirmation button {
            background-color: #D6E8DB;
            border: none;
            color: #000000;
            padding: 10px 20px;
            cursor: pointer;
        }

        /* Room count styles */
        .room-count {
            text-align: center;
            margin-bottom: 20px;
        }

        .room-count span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <a href="Homepage.php"><img src="img/logo1.png" class="logo"></a>
    <section class="nav">
        <nav>
            <div class="nav-links" id="navLinks">
                <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="Homepage.php">Home</a></li>
                    <li><a href="library.php">Reserveren</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li><a href="bestellen.php"><img class="cartlogo" src="img/cart.png" alt="cart"></a></li>
                    <li><a href="login.php"><img class="profilelogo" src="img/Profile.png" alt="profilelogo"></a></li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- End Navbar -->

  <!-- Reservation form -->
  <div class="reservation-form">
        <h2>Make a Reservation</h2>
        <form id="reservation-form" action="process_reservation.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="room">Room Type:</label>
            <select id="room" name="room" required>
                <option value="">Select Room Type</option>
                <option value="Single">Junior Suite</option>
                <option value="Double">Family Room</option>
                <option value="Suite">Superior Triple Room</option>
            </select>

            <label for="check-in">Check-in Date:</label>
            <input type="date" id="check-in" name="check-in" required>

            <label for="check-out">Check-out Date:</label>
            <input type="date" id="check-out" name="check-out" required>

            <label for="adults">Adults:</label>
            <input type="number" id="adults" name="adults" min="1" required>

            <label for="children">Children:</label>
            <input type="number" id="children" name="children" min="0" required>

            <div class="room-cost">
                <span>Room Cost: $<span id="cost">0</span></span>
            </div>

            <button type="submit">Reserve</button>
        </form>
    </div>

    <script>
  // Calculate the room cost based on the number of days, adults, and children
  function calculateCost() {
    const roomTypeSelect = document.getElementById('room');
    const selectedRoomType = roomTypeSelect.value;

    const checkInDate = new Date(document.getElementById('check-in').value);
    const checkOutDate = new Date(document.getElementById('check-out').value);
    const numberOfDays = Math.ceil((checkOutDate - checkInDate) / (1000 * 60 * 60 * 24));

    const numberOfAdults = parseInt(document.getElementById('adults').value);
    const numberOfChildren = parseInt(document.getElementById('children').value);

    let roomCost = 0;

    // Validate the number of adults and children based on the selected room type
    if (selectedRoomType === 'Single') {
      const maxAdults = 3;
      const maxChildren = 2;
      if (numberOfAdults > maxAdults) {
        document.getElementById('adults').value = maxAdults;
        alert(`Maximum ${maxAdults} adults allowed for the selected room type.`);
      }
      if (numberOfChildren > maxChildren) {
        document.getElementById('children').value = maxChildren;
        alert(`Maximum ${maxChildren} children allowed for the selected room type.`);
      }
    }

    // Assign the cost based on the selected room type
    switch (selectedRoomType) {
      case 'Single':
        roomCost = numberOfDays * (50 + (numberOfAdults * 40) + (numberOfChildren * 25));
        break;
      case 'Double':
        roomCost = numberOfDays * ((numberOfAdults * 60) + (numberOfChildren * 40));
        break;
      case 'Suite':
        roomCost = numberOfDays * ((numberOfAdults * 70) + (numberOfChildren * 40));
        break;
      default:
        roomCost = 0;
        break;
    }

    // Update the element with the room cost
    const costElement = document.getElementById('cost');
    costElement.textContent = roomCost.toString();
  }

  // Add event listener to trigger calculateCost() on input change
  document.getElementById('room').addEventListener('change', calculateCost);
  document.getElementById('check-in').addEventListener('change', calculateCost);
  document.getElementById('check-out').addEventListener('change', calculateCost);
  document.getElementById('adults').addEventListener('change', calculateCost);
  document.getElementById('children').addEventListener('change', calculateCost);

  // Calculate the cost initially on page load
  calculateCost();
</script>


</body>
</html>