<?php
include_once("nav.php")
?>
<html>

<head>
    <title>Register - Hotel</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>
    <div class="login-box">
        <h1>Create Your Account</h1>
        <form method="post" action="signup.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
            <label for="pwdrepeat">repeat your password:</label>
            <input type="password" id="password" name="pwdrepeat" placeholder="repeat password">
            <label for="email">E-mail:</label>
            <input type="text" name="email" placeholder="E-mail">
            <br>
            <input type="submit" name="submit" value="sign up">
        </form>
</body>

</html>

<?php


if (isset($_POST["submit"])) {
    // Grabbing the data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    // Instantiate Signupcontr class
    include("./classes/dbh.classes.php");
    include "./classes/signup.classes.php";
    include "./classes/signup-contr.classes.php";
    $signup = new SignupContr($username, $password, $pwdrepeat, $email);

    // Running error handlers and user signup
    $signup->signupUser();
    // Going back to the front page
    header("location: ./Homepage.php?error=none");
}


















?>