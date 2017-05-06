<?php
session_start();
	$usertype = $_SESSION['usertype'];
	if(!isset($_SESSION['username']) && $role!="agent"){
	header('Location: login.php?err=2');
    }
?>
<?php include 'header1.php'; ?>
<?php include 'config.php'; ?>



<table class="w3-table w3-table-all">

<tr>
	<th>Balance Amount</th>
	<th>Add Funds </th>
</tr>
<?php

$id = $_SESSION['id'];

$query = "SELECT  * FROM  transactions WHERE user_id ='".$_SESSION['id']."';";
$result = mysqli_query($conn, $query);
?>
<tr>
<?php
while($users = mysqli_fetch_assoc($result)){
	echo "<td>".$users['balance']."</td>";
	echo "<td><a href='add-funds1.php?t.user_id='".$_SESSION['id']."' class='w3-btn w3-amber'>Add funds</a> </td>";


echo "</tr>";
}

?>



</table>
<script type = "text/javascript">

function addfund(){
	
}
</script>

<?php include 'footer1.php'; ?>

