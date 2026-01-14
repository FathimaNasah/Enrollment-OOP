<?php
require_once "../classes/Enrollment.php";

$enroll = new Enrollment();
$students = $enroll->getStudents();
$courses = $enroll->getCourses();

if(isset($_POST['submit'])){
    $enroll->add($_POST);
    header("Location: show_enrollment.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Enrollment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="text-center">Add Enrollment</h3>
    <form method="post" style="max-width:500px; margin:auto;">
        <select class="form-control mb-2" name="student_id" required>
            <option value="">Select Student</option>
            <?php while($row = mysqli_fetch_assoc($students)) { ?>
                <option value="<?= $row['id'] ?>"><?= $row['first_name'].' '.$row['last_name'] ?></option>
            <?php } ?>
        </select>

        <select class="form-control mb-2" name="course_id" required>
            <option value="">Select Course</option>
            <?php while($row = mysqli_fetch_assoc($courses)) { ?>
                <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
            <?php } ?>
        </select>

        <select class="form-control mb-2" name="status">
            <option value="Enrolled">Enrolled</option>
            <option value="Completed">Completed</option>
            <option value="Dropped">Dropped</option>
        </select>

        <input class="form-control mb-3" type="date" name="enroll_date" value="<?= date('Y-m-d') ?>" required>

        <button name="submit" class="btn btn-success">Save</button>
        <a href="show_enrollment.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
