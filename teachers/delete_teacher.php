<?php
require_once "../classes/Teacher.php";

$teacher = new Teacher();
$id = $_GET['id'];

$teacher->delete($id);

header("Location: show_teacher.php");
exit;
