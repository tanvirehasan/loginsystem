<?php 
	session_start();
	require 'db.php';

	if (isset($_SESSION['username'])) {
		header('location:welcome.php');
	}


	if (isset($_POST['sign_up'])) {		

		$name  = $_POST['Name'];
		$email = $_POST['UserEmail'];
		$Pass  = $_POST['UserPassword'];


		$sql = "INSERT INTO `signup`(

				    `Name`,
				    `Email`,
				    `Password`
				)
				VALUES(
				    '$name',
				    '$email',
				    '$Pass'
				)";

		$query = mysqli_query($conn, $sql);	
		
		if ($query) {
				$mess = "Data Insert Success!";
			}else{

				$mess = "SORRY!";
			}


	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Sign up</title>
</head>
<body>

	<div class="row d-flex justify-content-center mt-5 ">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header bg-success text-white text-center"><h1>Sign Up</h1></div>
				<div class="card-body">
					<form action="" method="POST" >

						<?php if (isset($mess)) { echo $mess;} ?>

						<input class="form-control mb-3" type="text" name="Name" placeholder="Your Name" required>
						<input class="form-control mb-3"  type="email" name="UserEmail" placeholder="Your Email" required>
						<input class="form-control mb-3"  type="password" name="UserPassword" placeholder="Your Password" required>
						<input class="form-control btn bg-success text-white" type="submit" name="sign_up">
						
					</form>
				</div>

			</div>
		</div>
	</div>
</body>
</html>