<?php
class Database
{
    private $host = "localhost"; //domain
    private $database_name = "biografi"; //nama db
    private $username = "root"; //username phpMyAdmin
    private $password = ""; //password phpMyAdmin
    public $conn; //nama panggilan koneksi(connection)

    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" .
                $this->database_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Database could not be connected: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
