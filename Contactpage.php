<?php
include_once("nav.php")
?>
<html lang="en">
<head>
    <title>Contact Page</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .section {
            padding: 50px 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .title {
            text-align: center;
            margin-bottom: 30px;
        }

        .title h1 {
            font-size: 36px;
            color: #333;
        }

        .content-section {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .content-section p {
            font-size: 16px;
            line-height: 1.5;
            color: #666;
        }

        form {
            margin-top: 20px;
            text-align: center;
        }

        form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="email"],
        form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #555;
        }

        iframe {
            width: 100%;
            height: 450px;
            border: 0;
            margin-top: 30px;
        }
    </style>
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
                </div>
                <form action="contactpage.php">
                    <label for="fname">First name:</label>
                    <input type="text" id="fname" name="fname">

                    <label for="lname">Last name:</label>
                    <input type="text" id="lname" name="lname">

                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email">

                    <label for="help">How may we help you?</label>
                    <input type="text" id="help" name="help">

                    <input type="submit" value="Submit">
                </form>
                <p style="text-align: center;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2233.41012478312!2d4.842246306343941!3d52.39150266971147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e25f8099ee07%3A0x94df6a08c4a01add!2sPark%20Inn%20by%20Radisson%20Amsterdam%20City%20West!5e0!3m2!1snl!2snl!4v1686915387563!5m2!1snl!2snl"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
