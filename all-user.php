<?php include'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ALL USER</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<?php ob_start(); ?>
</head>
<body>

	<section class="Datapage">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">ID</th>
					      <th scope="col">username</th>
					      <th scope="col">password</th>
					      <th scope="col">user_email</th>
					      <th scope="col">user_phone</th>
					      <th scope="col">user_address</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php 
					  		$query ="SELECT * FROM register_crud";
					  		$select_from_user = mysqli_query($connect ,$query);
					  		$sl = 0;

					  		while ($row = mysqli_fetch_assoc($select_from_user)) {
					  			# code...
					  			$user_id = $row['ID'];
					  			$username = $row['username'];
					  			$password = $row['password'];
					  			$user_email = $row['user_email'];
					  			$user_phone = $row['user_phone'];
					  			$user_address = $row['user_address'];
					  			$sl++;
					  	?>
						  	<tr>
						      <th scope="row"><?php echo $sl; ?></th>
						      <td><?php echo $username; ?></td>
						      <td><?php echo $password; ?></td>
						      <td><?php echo $user_email; ?></td>
						      <td><?php echo $user_phone; ?></td>
						      <td><?php echo $user_address; ?></td>
						      <td>
						      	<div class="btn-group">
						      		<a class="btn btn-danger btn-sm" href="all-user.php?delete=<?php echo $user_id; ?>">Delet</a>
						      		<a class="btn btn-primary btn-sm" href="edit-user.php">Edit</a>
						      	</div>
						      </td>
						    </tr>

					  	<?php	} ?>
					  	<?php 
					  		if (isset($_GET['delete'])) {
					  			$delete_user_id = $_GET['delete'];

					  			$query = "DELETE FROM register_crud WHERE ID ='$delete_user_id'";
					  			$delete_user = mysqli_query($connect, $query);
					  			header('Location: all-user.php');
					  			
					  		}


					  		 ?>

					    
					  </tbody>
					</table>
	
				</div>
			</div>
		</div>
	</section>
	

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>	
<?php ob_end_flush(); ?>
</body>
</html>