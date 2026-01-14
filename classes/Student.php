<?php
require_once __DIR__ . "/../classes/Main.php";
require_once __DIR__ . "/../Database/Database.php";

class Student extends Main
{
    use Database;

    public function __construct()
    {
        $this->connect();
    }

    public function add($data)
    {
        $sql = "INSERT INTO students 
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

    public function update($id, $data)
    {
        $sql = "UPDATE students SET
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

    public function delete($id)
    {
        return mysqli_query($this->conn, "DELETE FROM students WHERE id=$id");
    }

    public function getAll()
    {
        return mysqli_query($this->conn, "SELECT * FROM students");
    }

    public function getById($id)
    {
        return mysqli_query($this->conn, "SELECT * FROM students WHERE id=$id");
    }
}
