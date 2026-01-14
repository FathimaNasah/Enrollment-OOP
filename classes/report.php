<?php
require_once __DIR__ . "/../Database/Database.php";

class Report
{
    use Database;

    public function __construct()
    {
        $this->connect();
    }

    public function getReport()
    {
        $sql = "
            SELECT 
                CONCAT(s.first_name, ' ', s.last_name) AS student_name,
                c.name AS course_name,
                CONCAT(t.first_name, ' ', t.last_name) AS teacher_name
            FROM enrollments e
            JOIN students s ON e.student_id = s.id
            JOIN courses c ON e.course_id = c.id
            JOIN course_teacher ct ON ct.course_id = c.id
            JOIN teachers t ON ct.teacher_id = t.id
        ";

        return mysqli_query($this->conn, $sql);
    }
}
