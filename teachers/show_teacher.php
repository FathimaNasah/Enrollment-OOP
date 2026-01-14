<?php
require_once "../classes/Teacher.php";

$teacher = new Teacher();
$result = $teacher->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Teacher List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="text-center">Teacher List</h3>
    <a href="add_teacher.php" class="btn btn-success mb-3">Add Teacher</a>
    <table class="table table-bordered">
        <tr class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>NIC</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['first_name']." ".$row['last_name'] ?></td>
            <td><?= $row['nic'] ?></td>
            <td><?= $row['dob'] ?></td>
            <td><?= $row['gender'] ?></td>
            <td><?= $row['address'] ?></td>
            <td><?= $row['contact'] ?></td>
            <td>
                <a href="edit_teacher.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete_teacher.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
