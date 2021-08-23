<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Register</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/computer.css">
</head>
<body>


	<?php  
		// DATA INSERT

			$message3 = "";
		if (isset($_POST['register-btn'])) {
			# code...
			$Username = $_POST['username'];
			$Password = $_POST['password'];
			$Email = $_POST['email'];
			$Phone = $_POST['phone'];
			$Address = $_POST['address'];

			$query3 = "INSERT INTO register_crud (username, password, user_email, user_phone, user_address) VALUES ('$Username', '$Password', '$Email', '$Phone', '$Address')";
			$query_connection3 = mysqli_query($connect , $query3);

			$message3 = '<div class="alert alert-success">Hi,'. $Username .' Your Register Successfully!</div>';

		}

	?>



	<section class="login_page">
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 cola">
					<div class="login_form">
						<h2>Create New User</h2>
						<?php echo $message3; ?>
						<form action="" method="POST">
							<div class="form-group">
								<label>Username</label>
								<input name="username" type="text" class="form-control" autocomplete="off" required="">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input name="password" type="password" class="form-control" autocomplete="off" required="">
							</div>

							<div class="form-group">
								<label>Email</label>
								<input name="email" type="email" class="form-control" autocomplete="off" required="">
							</div>

							<div class="form-group">
								<label>Phone</label>
								<input name="phone" type="text" class="form-control" autocomplete="off" required="">
							</div>

							<div class="form-group">
								<label>Address</label>
								<input name="address" type="text" class="form-control" autocomplete="off" required="">
							</div>

							<div class="form-group">
								<input name="register-btn" type="submit" class="btn btn-primary" value="Register User">
							</div>
						</form>
						
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</section>
	

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>	
</body>
</html>