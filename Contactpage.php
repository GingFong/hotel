<?php

include_once("nav.php")
?>
<html lang="en">
<head>
<title>Contact Page</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
<div class="section">
    <div class="container">
        <div class="content-section">
            <div class="title">
                <h1>Contactinformatie</h1>
              <p>
            Je kunt op verschillende manieren contact met Hotel ter Duin opnemen. Hieronder een overzicht van de verschillende contactmogelijkheden.
            Onze klantenservice is bereikbaar van maandag t/m zaterdag van 08.00 tot 23.00 uur en op zaterdag t/m zondag van 08.00 tot 17.00 uur.
              </p>
              <form action="contactpage.php"> <script> </script>
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname"><br><br>
                <label for="email">Email Address:</label><br>
                <input type="email" id="email" name="email" ><br><br>
                <label for="help">How may we help you?<br>
                <input type="text" id="help" name="help"><br><br>
                <input type="submit" value="Submit">
                </form> 
             <p style="text-align: center;"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2233.41012478312!2d4.842246306343941!3d52.39150266971147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e25f8099ee07%3A0x94df6a08c4a01add!2sPark%20Inn%20by%20Radisson%20Amsterdam%20City%20West!5e0!3m2!1snl!2snl!4v1686915387563!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
