<?php
require_once "../classes/course_teacher.php";


$ct = new CourseTeacher();
$id = $_GET['id'] ?? null;
if(!$id) die("ID not specified");

$data = mysqli_fetch_assoc($ct->getById($id));

// Fetch courses and teachers
$courses = []; $teachers = [];
$courseResult = $ct->getCourses();
while($row = mysqli_fetch_assoc($courseResult)) $courses[] = $row;
$teacherResult = $ct->getTeachers();
while($row = mysqli_fetch_assoc($teacherResult)) $teachers[] = $row;

// Handle update
if(isset($_POST['update'])){
    $ct->update($id, $_POST);
    header("Location: show_course_teacher.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Course-Teacher Mapping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="text-center">Edit Course-Teacher Mapping</h3>
    <form method="post" style="max-width:500px; margin:auto;">

        <select name="course_id" class="form-control mb-2" required>
            <?php foreach($courses as $c): ?>
                <option value="<?= $c['id'] ?>" <?= $c['id']==$data['course_id']?"selected":"" ?>>
                    <?= $c['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>

        <select name="teacher_id" class="form-control mb-3" required>
            <?php foreach($teachers as $t): ?>
                <option value="<?= $t['id'] ?>" <?= $t['id']==$data['teacher_id']?"selected":"" ?>>
                    <?= $t['first_name'].' '.$t['last_name'] ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button name="update" class="btn btn-primary">Update</button>
        <a href="show_course_teacher.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
