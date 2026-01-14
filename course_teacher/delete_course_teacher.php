<?php
require_once "../classes/course_teacher.php";


$id = $_GET['id'] ?? null;
if($id){
    $ct = new CourseTeacher();
    $ct->delete($id);
}

header("Location: show_course_teacher.php");
exit;
