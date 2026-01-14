<?php
require_once "../classes/Course.php";

$course = new Course();
$id = $_GET['id'];

$course->delete($id);

header("Location: show_course.php");
exit;
