<?php
require_once "../classes/Teacher.php";

$teacher = new Teacher();
$id = $_GET['id'];
$data = mysqli_fetch_assoc($teacher->getById($id));

if(isset($_POST['update'])){
    $teacher->update($id, $_POST);
    header("Location: show_teacher.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="text-center">Edit Teacher</h3>
    <form method="post" style="max-width:500px; margin:auto;">
        <input class="form-control mb-2" name="firstName" value="<?= $data['first_name'] ?>" required>
        <input class="form-control mb-2" name="lastName" value="<?= $data['last_name'] ?>" required>
        <input class="form-control mb-2" name="nic" value="<?= $data['nic'] ?>" required>
        <input class="form-control mb-2" type="date" name="dob" value="<?= $data['dob'] ?>" required>

        <div class="mb-2">
            <input type="radio" name="gender" value="Male" <?= $data['gender']=="Male"?"checked":"" ?>> Male
            <input type="radio" name="gender" value="Female" <?= $data['gender']=="Female"?"checked":"" ?>> Female
        </div>

        <input class="form-control mb-2" name="address" value="<?= $data['address'] ?>">
        <input class="form-control mb-3" name="contact" value="<?= $data['contact'] ?>">

        <button name="update" class="btn btn-primary">Update</button>
        <a href="show_teacher.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
