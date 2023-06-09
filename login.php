<?php
include_once("nav.php")
?>
<link rel="stylesheet" type="text/css" href="login.css">

<body>
    <div class="login-box">
        <h1>Login</h1>
        <form method="post" action="login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">

            <input type="submit" name="submit" value="Login">
            <p>Don't have an account yet?</p>
            <li><a href="signup.php" name=signup>SIGN UP</a></li>
        </form>
    </div>
</body>

</html>


<?php

session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "login_system");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if user exists in database
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }

    mysqli_close($conn);
}

?>