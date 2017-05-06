<?php
include_once('config.php');


$query = "SELECT count(*) co FROM `users` WHERE usertype = 'agent';";

$result = mysqli_query($conn, $query) or trigger_error(mysqli_error($conn)." ".$query);

while($users = mysqli_fetch_assoc($result){
	echo "<td>".$users['id']."</td>";
	echo "<td>".$users['name']."</td>";
	echo "<td>".$users['email']."</td>";
	echo "<td>".$users['phone']."</td>";
	echo "<td>".$users['agency']."</td>";
	echo "<td>".$users['address']."</td>";
	echo "<td>".$users['city']."</td>";
	echo "<td>".$users['pin']."</td>";
	echo "<td>".$users['noofvehicles']."</td>";
	echo "<td>".$users['password']."</td>";
	echo "<td>".$users['resetpasswordkey']."</td>";
	echo "<td>".$users['position']."</td>";
	echo "<td>".$users['regdate']."</td>";
	echo "<td>".$users['emailverified']."</td>";
	echo "<td>".$users['mobileverified']."</td>";
	echo "<td>".$users['usertype']."</td>";
	echo "<td>".$users['approval']."</td>";
}

//$co= (int)$co;




/* if($co >= 1){
    
	$result = array();
	$result[] = array("status" => 1);
}
 */
?>