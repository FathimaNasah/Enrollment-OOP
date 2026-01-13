<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>student system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <?php
    require_once  "../db_connection.php";
    require_once "../classes/Teacher.php";

    if (isset($_POST['submit'])) {
    $db = new Database();
    $teacher = new Teacher($db->conn);
    
    $teacher->add($_POST);
    header("Location: show_teacher.php");
    exit;
}
    ?>

    <h1 class="heading text-center text-primary mt-2"> Teacher Registration</h1>

    <div class="container fw-bold">

        <div class="container">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="container mb-3">
                    <div>
                        <label class="form-label ">First Name:</label>
                        <input type="text" class="form-control" name="firstName" placeholder="John">
                    </div>

                    <div>
                        <label class="form-label mt-3">Last Name:</label>
                        <input type="text" class="form-control" name="lastName" placeholder="Malik">
                    </div>

                    <div>
                        <label class="form-label mt-3">NIC:</label>
                        <input type="text" class="form-control" name="nic" placeholder="987654321V">
                    </div>

                    <div>
                        <label class="form-label mt-3">DOB:</label>
                        <input type="date" class="form-control" name="dob" placeholder="Swizerland">
                    </div>

                    <div class="form-group my-3">
                        <label>Gender:</label><br>

                        <input type="radio" class="form-check-input mx-3" name="gender" value="male">
                        <label for="male" class="form-input-label">Male</label>

                        <input type="radio" class="form-check-input mx-3" name="gender" value="female">
                        <label for="female" class="form-input-label">Female</label>
                    </div>

                    <div>
                        <label class="form-label mt-3">Address:</label>
                        <input type="text" class="form-control" name="address" placeholder="Swizerland">
                    </div>

                    <div class="mt-3">
                        <label class="form-label">Contact No:</label>
                        <input type="phone" class="form-control" name="contact" placeholder="0771234567">
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-success" name="submit">Save</button>
                        <a href="" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>