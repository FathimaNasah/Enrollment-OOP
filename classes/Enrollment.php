<?php
require_once __DIR__ . "/../classes/Main.php";
require_once __DIR__ . "/../Database/Database.php";

class Enrollment extends Main
{
    use Database;

    public function __construct()
    {
        $this->connect();
    }

    // Add new enrollment
    public function add($data)
    {
        $sql = "INSERT INTO enrollments (student_id, course_id, status, enroll_date)
                VALUES (
                    '{$data['student_id']}',
                    '{$data['course_id']}',
                    '{$data['status']}',
                    '{$data['enroll_date']}'
                )";

        if(mysqli_query($this->conn, $sql)){
            return true;
        } else {
            die("Insert Error: " . mysqli_error($this->conn));
        }
    }

    // Update enrollment
    public function update($id, $data)
    {
        $sql = "UPDATE enrollments SET
                student_id='{$data['student_id']}',
                course_id='{$data['course_id']}',
                status='{$data['status']}',
                enroll_date='{$data['enroll_date']}'
                WHERE id=$id";

        if(mysqli_query($this->conn, $sql)){
            return true;
        } else {
            die("Update Error: " . mysqli_error($this->conn));
        }
    }

    // Delete enrollment
    public function delete($id)
    {
        if(mysqli_query($this->conn, "DELETE FROM enrollments WHERE id=$id")){
            return true;
        } else {
            die("Delete Error: " . mysqli_error($this->conn));
        }
    }

    // Get all enrollments with student and course info
    public function getAll()
    {
        $sql = "SELECT e.id, s.first_name, s.last_name, c.name as course_name, e.status, e.enroll_date
                FROM enrollments e
                JOIN students s ON e.student_id = s.id
                JOIN courses c ON e.course_id = c.id";
        return mysqli_query($this->conn, $sql);
    }

    // Get single enrollment by ID
    public function getById($id)
    {  
        //return mysqli_query($this->conn, "SELECT * FROM students WHERE id=$id");
        $result = mysqli_query($this->conn, "SELECT * FROM enrollments WHERE id=$id");
        if(!$result){
            die("Fetch Error: " . mysqli_error($this->conn));
        }
        return $result;
    }

    // Get all students for dropdown
    public function getStudents()
    {
        $result = mysqli_query($this->conn, "SELECT id, first_name, last_name FROM students");
        if(!$result){
            die("Fetch Students Error: " . mysqli_error($this->conn));
        }
        return $result;
    }

    // Get all courses for dropdown
    public function getCourses()
    {
        $result = mysqli_query($this->conn, "SELECT id, name FROM courses");
        if(!$result){
            die("Fetch Courses Error: " . mysqli_error($this->conn));
        }
        return $result;
    }
}
