<?php 
	session_start();
	require 'db.php';

	if (!isset($_SESSION['username'])) {
		header('location:login.php');
	}

	$userid = $_SESSION['username'];
	$sql = "SELECT * FROM signup WHERE Email='$userid' ";
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Welcome to <?php echo $row['Name']; ?></title>
</head>
<body>

	<div class="row d-flex justify-content-center mt-5 ">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header bg-success text-white text-center"><h1>Welcome</h1></div>
				<div class="card-body">
					<strong>Hi!</strong>
					<h3><?php echo $row['Name']; ?></h3>					
				</div>

				<div class="card-footer">
					<a href="logout.php">Logout</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>