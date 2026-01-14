<?php
require_once "../classes/Enrollment.php";
$enroll = new Enrollment();
$result = $enroll->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Enrollments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="text-center">Enrollments</h3>
    <a href="add_enrollment.php" class="btn btn-success mb-2">Add Enrollment</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Student</th>
                <th>Course</th>
                <th>Status</th>
                <th>Enroll Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['first_name'].' '.$row['last_name'] ?></td>
                <td><?= $row['course_name'] ?></td>
                <td><?= $row['status'] ?></td>
                <td><?= $row['enroll_date'] ?></td>
                <td>
                    <a href="edit_enrollment.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="delete_enrollment.php?id=<?= $row['id'] ?>" 
                       onclick="return confirm('Are you sure?')" 
                       class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
