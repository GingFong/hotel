<?php
class dbh
{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "login_system";

    protected function connect()
    {
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=login_system', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
