<?php
require_once __DIR__ . "/../classes/Main.php";
require_once __DIR__ . "/../Database/Database.php";

class Course extends Main
{
    use Database;

    public function __construct()
    {
        $this->connect(); // DB connection
    }

    public function add($data)
    {
        $sql = "INSERT INTO courses (name, duration, fees) 
                VALUES (
                    '{$data['name']}',
                    '{$data['duration']}',
                    '{$data['fees']}'
                )";
        return mysqli_query($this->conn, $sql);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE courses SET
                    name='{$data['name']}',
                    duration='{$data['duration']}',
                    fees='{$data['fees']}'
                WHERE id=$id";
        return mysqli_query($this->conn, $sql);
    }

    public function delete($id)
    {
        return mysqli_query($this->conn, "DELETE FROM courses WHERE id=$id");
    }

    public function getAll()
    {
        return mysqli_query($this->conn, "SELECT * FROM courses");
    }

    public function getById($id)
    {
        return mysqli_query($this->conn, "SELECT * FROM courses WHERE id=$id");
    }
}
