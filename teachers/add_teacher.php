<?php
require_once "../classes/Teacher.php";

$teacher = new Teacher();

if(isset($_POST['submit'])){
    $teacher->add($_POST);
    header("Location: show_teacher.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="text-center">Add Teacher</h3>
    <form method="post" style="max-width:500px; margin:auto;">
        <input class="form-control mb-2" type="text" name="firstName" placeholder="First Name" required>
        <input class="form-control mb-2" type="text" name="lastName" placeholder="Last Name" required>
        <input class="form-control mb-2" type="text" name="nic" placeholder="NIC" required>
        <input class="form-control mb-2" type="date" name="dob" required>

        <div class="mb-2">
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female" required> Female
        </div>

        <input class="form-control mb-2" type="text" name="address" placeholder="Address">
        <input class="form-control mb-3" type="text" name="contact" placeholder="Contact Number">

        <button name="submit" class="btn btn-success">Save</button>
        <a href="show_teacher.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
