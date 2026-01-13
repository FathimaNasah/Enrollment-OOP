<?php
require_once "../main.php";

class Course extends Main {

    public function add($data) {
        return mysqli_query(
            $this->conn,
            "INSERT INTO courses (name,duration)
             VALUES ('{$data['name']}','{$data['duration']}')"
        );
    }

    public function update($id, $data) {
        return mysqli_query(
            $this->conn,
            "UPDATE courses SET name='{$data['name']}', duration='{$data['duration']}'
             WHERE id=$id"
        );
    }

    public function delete($id) {
        return mysqli_query($this->conn, "DELETE FROM courses WHERE id=$id");
    }

    public function getAll() {
        return mysqli_query($this->conn, "SELECT * FROM courses");
    }
}
