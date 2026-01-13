<?php
require_once "../main.php";

class Enrollment extends Main {

    public function add($data) {
        return mysqli_query(
            $this->conn,
            "INSERT INTO enrollments (student_id,course_id)
             VALUES ('{$data['student_id']}','{$data['course_id']}')"
        );
    }

    public function update($id, $data) {
        return mysqli_query(
            $this->conn,
            "UPDATE enrollments
             SET student_id='{$data['student_id']}', course_id='{$data['course_id']}'
             WHERE id=$id"
        );
    }

    public function delete($id) {
        return mysqli_query($this->conn, "DELETE FROM enrollments WHERE id=$id");
    }

    public function getAll() {
        return mysqli_query($this->conn, "SELECT * FROM enrollments");
    }
}
