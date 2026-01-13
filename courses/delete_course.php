<?php
require_once "../db_connection.php";
require_once "../classes/Course.php";

$db = new Database();
$course = new Course($db->conn);

$id = $_GET['id'];
$course->delete($id);

header("Location: show_course.php");
exit;
