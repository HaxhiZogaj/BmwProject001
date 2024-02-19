<?php
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "Bmw";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

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


    public function getCarById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM cars WHERE id = ?");
        $stmt->bind_param("i", $id); 

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc(); 
        } else {
            return null; 
        }
    }


    public function getAllProducts() {
        $sql = "SELECT * FROM cars"; 
        $result = $this->conn->query($sql);
    
        $products = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        }
        return $products;
    }
    


    public function getAllNews() {
        $sql = "SELECT * FROM news"; // Assuming your table name is 'news'
        $result = $this->conn->query($sql);
    
        $newsItems = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $newsItems[] = $row;
            }
        }
        return $newsItems;
    }

    public function close() {
        $this->conn->close();
    }
}


?>