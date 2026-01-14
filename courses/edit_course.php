<?php
require_once "../classes/Course.php";

$course = new Course();
$id = $_GET['id'];
$data = mysqli_fetch_assoc($course->getById($id));

if(isset($_POST['update'])){
    $course->update($id, $_POST);
    header("Location: show_course.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="text-center">Edit Course</h3>
    <form method="post" style="max-width:500px; margin:auto;">
        <input class="form-control mb-2" type="text" name="name" value="<?= $data['name'] ?>" required>
        <input class="form-control mb-2" type="text" name="duration" value="<?= $data['duration'] ?>" required>
        <input class="form-control mb-2" type="number" step="0.01" name="fees" value="<?= $data['fees'] ?>" required>

        <button name="update" class="btn btn-primary">Update</button>
        <a href="show_course.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
