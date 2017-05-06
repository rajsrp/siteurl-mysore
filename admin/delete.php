<?php include 'config.php'; ?>
<?php

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
		if(isset($_GET['id'])){
		$id = $_GET['id'];	
		$query = "DELETE from users WHERE id='$id';";
		$result = mysqli_query($conn, $query) or die ("udpate failed  ".mysqli_error($conn));
		if($result){
			$msg = 'Deleted successfully';
		}
		header('Location: manage-users.php');
		}
	
	?>
		
	
