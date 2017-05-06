<?php
if(isset($_GET['offerid']) &&!empty($_GET['offerid'])&& isset($_GET['name']) && !empty($_GET['name'])){
	$offerid = $_GET['offerid'];
	$name = $_GET['name'];
		$query = "SELECT u.*, o.*  FROM users u, offers o WHERE o.id='".$offerid."' AND  u.name = '".$name."' AND usertype='agent';";

		$result = mysqli_query($conn, $query) or trigger_error(mysqli_error($conn)." ".$query); 

				while($users = mysqli_fetch_assoc($result)){
					$id = $users['id'];
					$name = $users['name'];
					$offerdate = $users['offerdate'];
					$offertime = $users['offertime'];
					$deviatefromdistance = $users['deviatefromdistance'];
					$deviatetodistance = $users['deviatetodistance'];
					$offerprice = $users['offerprice'];
					$pickfrom = $users['pickfrom'];
					$dropto = $users['dropto'];
					$json3[] = $users;
				}
}
?>