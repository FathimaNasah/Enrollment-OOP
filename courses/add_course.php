<?php
require_once "../classes/Course.php";

$course = new Course();

if(isset($_POST['submit'])){
    $course->add($_POST);
    header("Location: show_course.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="text-center">Add Course</h3>
    <form method="post" style="max-width:500px; margin:auto;">
        <input class="form-control mb-2" type="text" name="name" placeholder="Course Name" required>
        <input class="form-control mb-2" type="text" name="duration" placeholder="Duration (e.g., 6 Months)" required>
        <input class="form-control mb-2" type="number" step="0.01" name="fees" placeholder="Fees" required>

        <button name="submit" class="btn btn-success">Save</button>
        <a href="show_course.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
