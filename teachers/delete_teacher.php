<?php
require_once "../db_connection.php";
require_once "../classes/Teacher.php";

$db = new Database();
$teacher = new Teacher($db->conn);

$id = $_GET['id'];
$teacher->delete($id);

header("Location: show_teacher.php");
exit;
