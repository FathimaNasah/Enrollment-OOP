<?php
require_once "../db_connection.php";
require_once "../classes/Student.php";

$db = new Database();
$student = new Student($db->conn);

// 2️⃣ Check ID
if (!isset($_GET['id'])) {
    header("Location: show_student.php");
    exit;
}

$id = $_GET['id'];
$student->delete($id);

header("Location: show_student.php");
exit;

?>