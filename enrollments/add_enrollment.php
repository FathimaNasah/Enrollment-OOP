<?php
require_once "../db_connection.php";
require_once "../classes/Enrollment.php";

if (isset($_POST['submit'])) {
    $db = new Database();
    $enrollment = new Enrollment($db->conn);

    $enrollment->add($_POST);
    header("Location: show_enrollment.php");
}
?>

<form method="post">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    <button name="submit">Save</button>
</form>
