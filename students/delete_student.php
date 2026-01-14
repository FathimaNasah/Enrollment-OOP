<?php
require_once "../classes/Student.php";

$student = new Student();
$id = $_GET['id'];

$student->delete($id);

header("Location: show_student.php");
exit;
