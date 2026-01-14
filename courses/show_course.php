<?php
require_once "../classes/Course.php";

$course = new Course();
$result = $course->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Course List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="text-center">Course List</h3>
    <a href="add_course.php" class="btn btn-success mb-3">Add Course</a>
    <table class="table table-bordered">
        <tr class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Duration</th>
            <th>Fees</th>
            <th>Action</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['duration'] ?></td>
            <td><?= $row['fees'] ?></td>
            <td>
                <a href="edit_course.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete_course.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
