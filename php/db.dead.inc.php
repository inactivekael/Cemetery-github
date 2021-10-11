<?php

require_once 'db.inc.php';

$fname = "";
$mname = "";
$lname = "";
$dob = "";
$dod = "";


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
    /*if (isset($_GET['edit'])) {
        $dead_id = $_GET['edit'];
        $update = true;
        $record = mysqli_query($conn, "SELECT * FROM dead_info WHERE id=$dead_id");
    
        if (count($record) == 1 ) {
            $n = mysqli_fetch_array($record);
            $fname = $n['name'];
            $mname = $n['mname'];
            $lname = $n['lname'];
            $dob = $n['dob'];
            $dod = $n['dod'];
        }
    }*/
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($conn, "DELETE FROM dead_info WHERE id=$dead_id");
        $_SESSION['message'] = "Address deleted!"; 
        header('location: ../dead.php');
    }
?>