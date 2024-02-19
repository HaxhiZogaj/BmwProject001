<?php
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "Bmw";
    private $conn;

    public function __construct() {
        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getAllCars() {
        $sql = "SELECT * FROM cars";
        $result = $this->conn->query($sql);

        $cars = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $cars[] = $row;
            }
        }
        return $cars;
    }

    public function close() {
        $this->conn->close();
    }
}


?>