<?php
require_once "../classes/Enrollment.php";
$enroll = new Enrollment();

if (!isset($_GET['id'])) {
    header("Location: show_enrollment.php");
    exit;
}

$id = (int)$_GET['id'];


$enrollment = $enroll->getById($id);
if (!$enrollment) {
    header("Location: show_enrollment.php");
    exit;
}

$students = $enroll->getStudents();
$courses  = $enroll->getCourses();

if(isset($_POST['save'])){
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

    <form method="post" style="max-width:500px" class="mx-auto">

        <select name="student_id" class="form-control mb-2" required>
            <option value="">Select Student</option>
            <?php while($s = mysqli_fetch_assoc($students)): ?>
                <option value="<?= $s['id'] ?>">
                    <?= $s['first_name'].' '.$s['last_name'] ?>
                </option>
            <?php endwhile; ?>
        </select>

        <select name="course_id" class="form-control mb-2" required>
            <option value="">Select Course</option>
            <?php while($c = mysqli_fetch_assoc($courses)): ?>
                <option value="<?= $c['id'] ?>"><?= $c['name'] ?></option>
            <?php endwhile; ?>
        </select>

        <select name="status" class="form-control mb-2">
            <option value="Enrolled">Enrolled</option>
            <option value="Completed">Completed</option>
            <option value="Dropped">Dropped</option>
        </select>

        <input type="date" name="enroll_date" class="form-control mb-3" required>

        <button name="save" class="btn btn-primary">Save</button>
        <a href="show_enrollment.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
