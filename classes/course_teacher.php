<?php
require_once __DIR__ . "/../classes/Main.php";
require_once __DIR__ . "/../Database/Database.php";

class CourseTeacher extends Main
{
    use Database;

    public function __construct()
    {
        $this->connect(); // Initialize DB connection
    }

    // Add new course-teacher mapping
    public function add($data)
    {
        $sql = "INSERT INTO course_teacher (course_id, teacher_id)
                VALUES (
                    '{$data['course_id']}',
                    '{$data['teacher_id']}'
                )";
        return mysqli_query($this->conn, $sql);
    }

    // Update existing mapping
    public function update($id, $data)
    {
        $sql = "UPDATE course_teacher SET
                    course_id='{$data['course_id']}',
                    teacher_id='{$data['teacher_id']}'
                WHERE id=$id";
        return mysqli_query($this->conn, $sql);
    }

    // Delete mapping
    public function delete($id)
    {
        return mysqli_query($this->conn, "DELETE FROM course_teacher WHERE id=$id");
    }

    // Get all mappings
    public function getAll()
    {
        $sql = "SELECT ct.id, c.name AS course_name, t.first_name, t.last_name
                FROM course_teacher ct
                JOIN courses c ON ct.course_id = c.id
                JOIN teachers t ON ct.teacher_id = t.id
                ORDER BY c.name";
        return mysqli_query($this->conn, $sql);
    }

    // Get mapping by ID
    public function getById($id)
    {
        return mysqli_query($this->conn, "SELECT * FROM course_teacher WHERE id=$id");
    }

    // Optional: Get all courses
    public function getCourses()
    {
        return mysqli_query($this->conn, "SELECT * FROM courses");
    }

    // Optional: Get all teachers
    public function getTeachers()
    {
        return mysqli_query($this->conn, "SELECT * FROM teachers");
    }
}
?>
