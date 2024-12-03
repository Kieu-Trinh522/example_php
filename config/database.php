<?php
class Database {
    private $severname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "example_crud";
    public $conn;
    
    public function mysqli_connect(): ?PDO{    
        $this->conn = null;    
        try {        
            $this->conn = new PDO("mysql:host=" . $this->severname . ";dbname=" . $this->database, $this->username, $this->password);        
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
        } catch (PDOException $exception) {        
            echo "Connection error: " . $exception->getMessage();    
        }    
        return $this->conn;
    }
}
?>

