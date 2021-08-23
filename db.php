<?php 
		$connect = mysqli_connect('localhost', 'root', '' ,'facebook');
		if ($connect) {
			// echo "Database Connected!";
		}
		else{
			die('Database Connection Failed!');
		}

 ?>