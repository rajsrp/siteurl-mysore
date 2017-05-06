<?php
session_start();

$username = $_SESSION['username'];?>
<?php include 'header1.php'; ?>
<?php include 'config.php'; ?>
<?php
	$query = "SELECT * FROM `offers`;";

	$result = mysqli_query($conn, $query) or trigger_error(mysqli_error($conn)." ".$query);

?>


 <div class="w3-responsive">
<table class="w3-table w3-table-all w3-responsive">
<tr>
  <th>Offer ID</th>
	<th>From </th>
	<th>To </th>	
<th>Date </th>
<th>Time </th>
<th>Deviate From </th>
<th> Deviate To</th>
<th>Waiting Period </th>
<th> Vehicle Type</th>
<th>Model </th>
<th> Seating</th>
<th>Amount </th>
<th>My Status</th>
<th>Offer Status</th>
<th>Accept </th>
<th> ReQuote</th>
<th> Deal</th>
</tr>
<tr>
<?php
while($users = mysqli_fetch_assoc($result)){
	echo "<td>".$users['id']."</td>";
	echo "<td>".$users['pickfrom']."</td>";
	echo "<td>".$users['dropto']."</td>";
	echo "<td>".$users['offerdate']."</td>";
	echo "<td>".$users['offertime']."</td>";
	echo "<td>".$users['deviatefromdistance']."</td>";
	echo "<td>".$users['deviatetodistance']."</td>";
	echo "<td>".$users['waitperiod']."</td>";
	echo "<td>".$users['cartype']."</td>";
	echo "<td>".$users['carmodel']."</td>";
	echo "<td>".$users['noofseats']."</td>";
	echo "<td>".$users['offerprice']."</td>";
	echo "<td><a href='' class='w3-btn w3-green'>Accepted</a> </td>";
    echo "<td><a href='' class='w3-btn w3-orange'>Accept</a> </td>";
	echo "<td><button class='w3-btn w3-blue-grey'>Pending</button> </td>";
	echo "<td><button class='w3-btn w3-yellow'>requote</button> </td>";
	echo "<td><a href='' class='w3-btn w3-green'>Closed</a> </td>";
	echo "</tr>";						
}
?>

</table>

</div>
<?php include 'footer1.php'; ?>

