<?php

class SignupContr extends Signup
{

    private $username;
    private $password;
    private $pwdrepeat;
    private $email;

    public function  __construct($username, $password, $pwdrepeat, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }

    public function signupUser()
    {
        //Hieronder staat een aantal checks om de invulvelden op het formulier op index.php te controleren
        //
        if ($this->emptyInput() == false) {
            echo "empty input";
            header("location: ./Homepage.php?error=emptyInput");
            exit();
        }

        if ($this->invalidUid() == false) {
            echo "empty uid";
            header("location: ./Homepage.php?error=emptyUserID");
            exit();
        }

        if ($this->invalidEmail() == false) {
            echo "empty input";
            header("location: ./Homepage.php?error=invalidEmail");
            exit();
        }
        if ($this->pwdMatch() == false) {
            // echo "Passwords don't match!";
            header("location: ./Homepage.php?error=passwordmatch");
            exit();
        }


        // deze functie / methode wordt geërfd van de signup.class.php waarin de methode setUser staat.
        // met deze functie wordt de gebruiker aangemaakt in de database.
        $this->setUser($this->username, $this->password, $this->email);
    }


    private function emptyInput()
    {

        if (empty($this->username)  || empty($this->password)  || empty($this->pwdrepeat) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function invalidEmail()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function invalidUid()
    {
        //hier wordt een regular expression (regex) gebruikt. De regex dwingt af dat alleen letters en cijfers worden gebruikt in de username
        // een regex is een soort filter op het invoerveld.
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function pwdMatch()
    {
        if ($this->password !== $this->pwdrepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
