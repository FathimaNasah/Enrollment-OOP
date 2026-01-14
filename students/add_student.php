<?php
require_once __DIR__ . "/../classes/Student.php";

$student = new Student();

if (isset($_POST['submit'])) {
    $student->add($_POST);
    header("Location: show_student.php");
    exit;
}
?>

<!doctype html>
<html>
<head>
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3 class="text-center text-primary">Student Registration</h3>

    <form method="post" class="mx-auto" style="max-width:500px">
        <input class="form-control mb-2" name="firstName" placeholder="First Name" required>
        <input class="form-control mb-2" name="lastName" placeholder="Last Name" required>
        <input class="form-control mb-2" name="nic" placeholder="NIC" required>
        <input type="date" class="form-control mb-2" name="dob" required>

        <div class="mb-2">
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female"> Female
        </div>

        <input class="form-control mb-2" name="address" placeholder="Address">
        <input type="tel" class="form-control mb-3" name="contact" placeholder="Contact" required>

        <button name="submit" class="btn btn-success">Save</button>
    </form>
</div>

</body>
</html>
