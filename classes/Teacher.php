<?php
require_once __DIR__ . "/../classes/Main.php";
require_once __DIR__ . "/../Database/Database.php";

class Teacher extends Main
{
    use Database;

    public function __construct()
    {
        $this->connect(); // DB connection
    }

    // Add new teacher
    public function add($data)
    {
        $sql = "INSERT INTO teachers 
        (first_name, last_name, nic, dob, gender, address, contact)
        VALUES (
            '{$data['firstName']}',
            '{$data['lastName']}',
            '{$data['nic']}',
            '{$data['dob']}',
            '{$data['gender']}',
            '{$data['address']}',
            '{$data['contact']}'
        )";

        return mysqli_query($this->conn, $sql);
    }

    // Update teacher details
    public function update($id, $data)
    {
        $sql = "UPDATE teachers SET
            first_name='{$data['firstName']}',
            last_name='{$data['lastName']}',
            nic='{$data['nic']}',
            dob='{$data['dob']}',
            gender='{$data['gender']}',
            address='{$data['address']}',
            contact='{$data['contact']}'
        WHERE id=$id";

        return mysqli_query($this->conn, $sql);
    }

    // Delete a teacher
    public function delete($id)
    {
        return mysqli_query($this->conn, "DELETE FROM teachers WHERE id=$id");
    }

    // Get all teachers
    public function getAll()
    {
        return mysqli_query($this->conn, "SELECT * FROM teachers");
    }

    // Get single teacher by ID
    public function getById($id)
    {
        return mysqli_query($this->conn, "SELECT * FROM teachers WHERE id=$id");
    }
}
