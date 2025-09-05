<?php

class Database{
    private $host ="localhost";
    private $db_name ="authdb";
    private $user ="root";
    private $password ="";

    public $conn;

    // On Object Creation : DB Connect
    public function __construct(){
        $this->conn = null; // No DB Connection
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->user, $this->password);
                // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage(); 
        }
    }
}