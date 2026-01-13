<!DOCTYPE html>
<html lang="en">

<head>
    <title>Teacher List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php
    require_once "../db_connection.php";
    require_once "../classes/Teacher.php";

    $db = new Database();
    $teacher = new Teacher($db->conn);
    $data = $teacher->getAll();
    ?>

    <div class="container mt-5">
        <h3 class="text-success text-center">Teacher Details</h3>

        <table class="table table-bordered table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>NIC</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

            <?php
            while ($row = mysqli_fetch_assoc($data)) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['first_name'] ?></td>
                    <td><?= $row['last_name'] ?></td>
                    <td><?= $row['nic'] ?></td>
                    <td><?= $row['dob'] ?></td>
                    <td><?= $row['gender'] ?></td>
                    <td><?= $row['address'] ?></td>
                    <td><?= $row['contact'] ?></td>
                    <td>
                        <a href="edit_teacher.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_teacher.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

</body>
</html>