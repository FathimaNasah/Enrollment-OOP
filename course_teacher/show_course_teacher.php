<?php
require_once "../classes/course_teacher.php";


$ct = new CourseTeacher();
$rows = $ct->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Course-Teacher Mappings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="text-center">All Course-Teacher Mappings</h3>
    <a href="add_course_teacher.php" class="btn btn-success mb-2">Add New</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Course</th>
                <th>Teacher</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($rows)): ?>
            <tr>
                <td><?= $row['course_name'] ?></td>
                <td><?= $row['first_name'].' '.$row['last_name'] ?></td>
                <td>
                    <a href="edit_course_teacher.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="delete_course_teacher.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" 
                       onclick="return confirm('Are you sure you want to delete this mapping?')">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
