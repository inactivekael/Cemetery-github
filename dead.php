<?php
include_once 'header.php';
include_once 'php/db.inc.php';

?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/dead.css">
</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<?php $results = mysqli_query($conn, "SELECT * FROM dead_info"); ?>

<table>
	<thead>
		<tr>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Date of Birth</th>
			<th>Date of Death</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['fname']; ?></td>
			<td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['lname']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['dod']; ?></td>
			<td>
                <a href='dead_edit.php?edit=<?php echo $row['dead_id'] ?>' class="edit_btn" >Edit</a>
            </td>
            <td>
                <a href='php/db.dead.inc.php?del=<?php echo $row['dead_id'] ?>' class="del_btn" name="del">Delete</a>
            </td>
		</tr>
	<?php } ?>
</table>

	<form method="post" action="php/db.dead.inc.php" >
		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="fname" value="">
		</div>
        <div class="input-group">
			<label>Middle Name</label>
			<input type="text" name="mname" value="">
		</div>
        <div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lname" value="">
		</div>
		<div class="input-group">
			<label>Date of Birth</label>
			<input type="date" name="dob" value="">
		</div>
        <div class="input-group">
			<label>Date of Death</label>
			<input type="date" name="dod" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
            
        
	</form>
    
</body>

</html>