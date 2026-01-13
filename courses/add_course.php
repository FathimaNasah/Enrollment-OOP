<?php
require_once "../db_connection.php";
require_once "../classes/Course.php";

if (isset($_POST['submit'])) {
    $db = new Database();
    $course = new Course($db->conn);

    $course->add($_POST);
    header("Location: show_course.php");
}
?>

<form method="post">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    <button name="submit">Save</button>
</form>
