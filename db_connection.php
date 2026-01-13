<?php
class Database {
    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "", "dbcollege");

        if (!$this->conn) {
            die("Database connection failed");
        }
    }
}
