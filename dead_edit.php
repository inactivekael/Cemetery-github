<?php
include_once 'header.php';
include_once 'php/db.inc.php';

?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/dead.css">
</head>
<body>
<?php 
	if (isset($_GET['edit'])) {
		$dead_id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM dead_info WHERE dead_id=$dead_id");

		
			$n = mysqli_fetch_array($record);
			$fname = $n['fname'];
			$mname = $n['mname'];
			$lname = $n['lname'];
			$dob = $n['dob'];
			$dod = $n['dod'];
		
	}
?>
<input type="hidden" name="id" value="<?php echo $dead_id; ?>">
<input type="text" name="fname" value="<?php echo $fname; ?>">
<input type="text" name="mname" value="<?php echo $mname; ?>">
<input type="text" name="lname" value="<?php echo $lname; ?>">
<input type="text" name="dob" value="<?php echo $dob; ?>">
<input type="text" name="dod" value="<?php echo $dod; ?>">
<?php if ($update == true): ?>
	<button class="btn" type="submit" href="dead.php" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>

    
</body>

</html>