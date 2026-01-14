<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student System Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<style>
    body {
    background-color: #f4f6f9;
    font-family: 'Segoe UI', sans-serif;
}

.dashboard-card {
    padding: 25px 15px;
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    cursor: pointer;
}

.dashboard-card:hover {
    transform: translateY(-5px);
}

.dashboard-card h5 {
    margin-top: 15px;
    font-weight: 600;
}

.dashboard-card p {
    font-size: 14px;
    color: #666;
}

.icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 28px;
}
</style>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark px-3">
    <span class="navbar-brand fw-bold">STUDENT SYSTEM</span>
    <ul class="navbar-nav flex-row gap-3">
        <li class="nav-item"><a class="nav-link text-white" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="students/add_student.php">Students</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="teachers/add_teacher.php">Teachers</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="courses/add_course.php">Courses</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="enrollments/add_enrollment.php">Enrollments</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="course_teacher/add_course_teacher.php">Course Teachers</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="teachers/report.php">Reports</a></li>
    </ul>
</nav>

<!-- Dashboard -->
<div class="container my-5">
    <div class="row g-4 justify-content-center">

        <!-- Students -->
        <div class="col-md-4 col-lg-4" onclick="location.href='students/add_student.php';">
            <div class="card dashboard-card text-center">
                <div class="icon bg-primary">
                    <i class="bi bi-person-fill"></i>
                </div>
                <h5>Students</h5>
                <p>Manage student records</p>
            </div>
        </div>

        <!-- Teachers -->
        <div class="col-md-4 col-lg-4" onclick="location.href='teachers/add_teacher.php';">
            <div class="card dashboard-card text-center">
                <div class="icon bg-success">
                    <i class="bi bi-person-badge-fill"></i>
                </div>
                <h5>Teachers</h5>
                <p>Manage teacher details</p>
            </div>
        </div>

        <!-- Courses -->
        <div class="col-md-4 col-lg-4" onclick="location.href='courses/add_course.php';">
            <div class="card dashboard-card text-center">
                <div class="icon bg-warning">
                    <i class="bi bi-journal-bookmark-fill"></i>
                </div>
                <h5>Courses</h5>
                <p>Course management</p>
            </div>
        </div>

        <!-- Enrollments -->
        <div class="col-md-4 col-lg-4" onclick="location.href='enrollments/add_enrollment.php';">
            <div class="card dashboard-card text-center">
                <div class="icon bg-info">
                    <i class="bi bi-ui-checks-grid"></i>
                </div>
                <h5>Enrollments</h5>
                <p>Student enrollment</p>
            </div>
        </div>

        <!-- Course Teachers -->
        <div class="col-md-4 col-lg-4" onclick="location.href='course_teacher/add_course_teacher.php';">
            <div class="card dashboard-card text-center">
                <div class="icon bg-secondary">
                    <i class="bi bi-gear-fill"></i>
                </div>
                <h5>Course Teachers</h5>
                <p>Assign teachers to courses</p>
            </div>
        </div>

        <!-- Reports -->
        <div class="col-md-4 col-lg-4" onclick="location.href='teachers/report.php';">
            <div class="card dashboard-card text-center">
                <div class="icon bg-danger">
                    <i class="bi bi-bar-chart-fill"></i>
                </div>
                <h5>Reports</h5>
                <p>View system reports</p>
            </div>
        </div>

    </div>
</div>

</body>
</html>
`