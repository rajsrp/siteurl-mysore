<?php include 'config.php' ?>
<?php

	if(isset($_POST['search'])) {
				
		$searchvalue = $_POST['searchvalue'];
		
		$query1 = "SELECT u.*, t.* FROM users u, transactions t WHERE u.id = t.user_id AND u.name = '".$searchvalue."';";

		$result = mysqli_query($conn, $query1) or trigger_error(mysqli_error($conn)." ".$query1);
		
		header('Location: manage-users.php');
	}



?>