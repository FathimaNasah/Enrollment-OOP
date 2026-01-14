<?php
require_once "../classes/Enrollment.php";

$enroll = new Enrollment();
$id = $_GET['id'];

$enroll->delete($id);

header("Location: show_enrollment.php");
exit;
