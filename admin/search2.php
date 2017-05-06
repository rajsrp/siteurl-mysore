<?php include 'config.php' ?>
<?php
				$search = isset($_POST['search']) ? mysqli_real_escape_string($conn, $_POST['search']) :  "";
				$query = "SELECT * FROM `users` WHERE (`name` LIKE '%".$search."%') OR ('agency' LIKE '%".$search."%');";
				$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
				if(mysqli_num_rows($result) >= 1) {
					
				header('location: manage-users.php');
			?>

