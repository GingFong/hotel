<?php


class Signup extends dbh
{
    protected function setUser($username, $password, $email)
    {
        //Dit is de sql-query die gebruikt wordt om de gebruiker toe te voegen aan de database.
        "INSERT INTO users (username,password,email) VALUES (?,?,?);";
        $stmt = $this->connect()->prepare('INSERT INTO users (username,password,email) VALUES (?,?,?);');

        //het password wordt gehashed voordat het opgeslagen wordt in de databse
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

        //foutafhandeling
        if (!$stmt->execute(array($username, $hashedpassword, $email))) {
            $stmt = null;
            header("location: ./Homepage.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }


    // de methode checkUser wordt gebruikt om te controleren of de gebruiker al bestaat.
    protected function checkUser($username, $email)
    {
        $sql = "SELECT * FROM users WHERE username=? OR email=?;";
        $stmt = $this->connect()->prepare($sql);


        if (!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header("location: ./Homepage.php?error=stmtfailed");
            exit();
        }
    }

    //De methode setUser wordt gebruikt om een gebruiker toe te voegen aan de database

}
