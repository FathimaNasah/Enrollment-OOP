<?php
require_once "../main.php";

class Student extends Main
{
    public function add($data)
    {
        if (!isset($this->conn)) {                          
        
        $firstname = $data['firstName'];
        $lastname  = $data['lastName'];
        $nic       = $data['nic'];
        $dob       = $data['dob'];
        $gender    = $data['gender'];
        $address   = $data['address'];
        $contact   = $data['contact'];

        $sql = "INSERT INTO students (first_name, last_name, nic, dob, gender, address, contact)
                VALUES ('$firstname', '$lastname', '$nic', '$dob', '$gender', '$address', '$contact')";

        return mysqli_query($this->conn, $sql);
    }
    }

    public function update($id, $data)
    {
        $firstname = $data['firstName'];
        $lastname  = $data['lastName'];
        $nic       = $data['nic'];
        $dob       = $data['dob'];
        $gender    = $data['gender'];
        $address   = $data['address'];
        $contact   = $data['contact'];

        $sql = "UPDATE students
                SET first_name='$firstname', last_name='$lastname', nic='$nic', dob='$dob', gender='$gender', address='$address', contact='$contact'
                WHERE id=$id";

        return mysqli_query($this->conn, $sql);
    }

    public function delete($id)
    {
        return mysqli_query(
            $this->conn,
            "DELETE FROM students WHERE id=$id"
        );
    }

    public function getAll()
    {
        return mysqli_query(
            $this->conn,
            "SELECT * FROM students"
        );
    }
}
