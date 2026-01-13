<?php
require_once "../db_connection.php";
require_once "../classes/Student.php";

$db = new Database();
$enrollment = new Enrollment($db->conn);
$data = $enrollment->getAll();
?>

<table border="1">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>
<?php while ($row = mysqli_fetch_assoc($data)) { ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['name'] ?></td>
<td><?= $row['email'] ?></td>
<td>
<a href="delete_enrollment.php?id=<?= $row['id'] ?>">Delete</a>
</td>
</tr>
<?php } ?>
</table>
