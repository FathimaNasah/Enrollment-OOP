<?php
require_once "../classes/report.php";

$report = new Report();
$result = $report->getReport();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Course Teacher Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3 class="text-center mb-3">Student - Course - Teacher Report</h3>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Course Name</th>
                <th>Teacher Name</th>
            </tr>
        </thead>
        <tbody>
            <?php if($result && mysqli_num_rows($result) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $row['student_name'] ?></td>
                        <td><?= $row['course_name'] ?></td>
                        <td><?= $row['teacher_name'] ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="text-center">No data found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>
