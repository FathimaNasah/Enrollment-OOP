<?php
require_once "../db_connection.php";
require_once "../classes/Enrollment.php";

$db = new Database();
$enrollment = new Enrollment($db->conn);

$id = $_GET['id'];
$enrollment->delete($id);

header("Location: show_enrollment.php");
exit;
