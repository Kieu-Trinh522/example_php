<?php
require_once __DIR__ . '/../../config/database.php';
class User {
    private $table = "users";
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->mysqli_connect();
    }
    
    public function getAll() {
        $sql = "SELECT * FROM $this->table";
        $query = $this->conn->query($sql); 
        return $query->fetchAll(PDO::FETCH_ASSOC); 
    }

}
?>