<?php

require_once 'db.inc.php';

$fname = "";
$mname = "";
$lname = "";
$dob = "";
$dod = "";
$id = 0;

$update = false;

	if (isset($_POST['save'])) {
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $dod = $_POST['dod'];

		mysqli_query($conn, "INSERT INTO dead_info (fname, mname, lname, dob, dod) VALUES ('$fname', '$mname', '$lname', '$dob', '$dod')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: ../dead.php');
    }
?>