<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
require_once "../db_connection.php";
require_once "../classes/Teacher.php";

$db = new Database();
$teacher = new Teacher($db->conn);


if (!isset($_GET['id'])) {
    header("Location: show_teacher.php");
    exit;
}

$id = $_GET['id'];

$result = mysqli_query($db->conn, "SELECT * FROM teachers WHERE id = $id");
$data = mysqli_fetch_assoc($result);

// 3️⃣ Update logic
if (isset($_POST['update'])) {

    $teacher->update($id, $_POST);

    header("Location: show_teacher.php");
    exit;
}
?>

<div class="container mt-5">
    <h3 class="text-primary text-center">Edit Teacher</h3>

    <form method="post" class="mt-4">

        <div class="mb-3">
            <label>First Name</label>
            <input type="text" name="firstName" class="form-control"
                   value="<?= $data['first_name'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Last Name</label>
            <input type="text" name="lastName" class="form-control"
                   value="<?= $data['last_name'] ?>" required>
        </div>

        <div class="mb-3">
            <label>NIC</label>
            <input type="text" name="nic" class="form-control"
                   value="<?= $data['nic'] ?>" required>
        </div>

        <div class="mb-3">
            <label>DOB</label>
            <input type="date" name="dob" class="form-control"
                   value="<?= $data['dob'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Gender</label>
            <select name="gender" class="form-control">
                <option value="Male" <?= ($data['gender']=="Male")?"selected":"" ?>>Male</option>
                <option value="Female" <?= ($data['gender']=="Female")?"selected":"" ?>>Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="address" class="form-control"
                   value="<?= $data['address'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Contact</label>
            <input type="text" name="contact" class="form-control"
                   value="<?= $data['contact'] ?>" required>
        </div>

        <button type="submit" name="update" class="btn btn-success">
            Update Student
        </button>

        <a href="show_student.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>
