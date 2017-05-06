<?php include 'header.php' ?>
<?php include('config.php')?>
<?php
ob_start();
if(!isset($_SESSION['name'])){
header('Location: index.php?err=2');
}else{
$page = $_GET['page'];
if($page == '' || $page ==1){
	$page1 = 0;
}
else{
	$page1 = ($page*10)-10;
}

	$query = "SELECT * FROM users  WHERE  usertype = 'agent' LIMIT $page1, 10 ;";

	$result = mysqli_query($conn, $query) or trigger_error(mysqli_error($conn)." ".$query);
	
	
	$query1 = "SELECT * FROM users  WHERE  usertype = 'agent';";

	$result1 = mysqli_query($conn, $query1) or trigger_error(mysqli_error($conn)." ".$query1);
	$res = mysqli_num_rows($result1);
	$a = $res/10;
	$a = ceil($a);

?>

 
<!-- Header -->
  <header class="w3-container " style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Manage Agents</b></h5>
  </header>
<div class="w3-row-padding w3-small">
    <div class="w3-quarter">
      <div class="w3-container w3-card-8 w3-round w3-red ">
        <div class="w3-left"><i class="fa fa-comment "></i></div>
        <div class="w3-right ">
          <h5>52</h5>
        </div>
        
        <h5>Section1</h5>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-card-8 w3-round w3-blue ">
        <div class="w3-left"><i class="fa fa-eye "></i></div>
        <div class="w3-right">
          <h5>99</h5>
        </div>
      
        <h5>Section2</h5>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container  w3-card-8 w3-round w3-teal ">
        <div class="w3-left"><i class="fa fa-share-alt"></i></div>
        <div class="w3-right">
          <h5>23</h5>
        </div>
       
        <h5>Section3</h5>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-card-8 w3-round w3-text-white">
        <div class="w3-left"><i class="fa fa-users "></i></div>
        <div class="w3-right">
          <h5>50</h5>
        </div>
       
        <h5>Section4</h5>
      </div>
    </div>
  </div>
<div class="w3-container w3-section">
    <div class="w3-row-padding" style="margin:0 -16px">
		<div class="w3-row">
			<div class="w3-third w3-padding">
							
				<form action="manage-users.php"  method = "post">
					<input type="text" name="searchvalue" id="searchvalue" class="w3-input w3-animate-input w3-border " style="width:50%" placeholder="Name or Agency.. "><br>
					<input type = "submit" name = "search" id= "search" value ="Search">
				</form>
				<?php
				if(isset($_POST['search']) && !empty($_POST['search'])) {
				$searchvalue = $_POST['searchvalue'];
				$query1 = "SELECT * FROM users WHERE name = '".$searchvalue."' or agency = '".$searchvalue."';";

				$result = mysqli_query($conn, $query1) or trigger_error(mysqli_error($conn)." ".$query1);
				}
				?>
			</div>
		</div>
	</div>
</div>

<div class="w3-row">
<div class="w3-third w3-padding"> <a class="w3-btn w3-teal" href="add-user.php">Add Agent</a></div></div>
<br>
<div class="w3-responsive  w3-theme">
<table  class="w3-table-all w3-table-responsive w3-small">
    <thead>
        <tr class="w3-khaki">
			<th>Edit</th>    
			<th >Delete </th>
			<th>Suspend </th>
			<th>Balance </th>
			<th>Add Funds </th>
			<th>ID</th><br />
		    <th>CustomerName</th>
			<th>Email</th>	
			<th> Phone</th>	
			<th>AgencyName</th>
			<th>Address</th>
			<th >City</th>
			<th>PostalCode</th>
			<th>Number of Vehicles</th>
			<th>Password</th>	
			<th >Reset passwd Key</th>	
			<th >Position</th>	
			<th >Register Date</th>	
			<th >Email Varified</th>	
			<th>Mobile Varified</th>	
			<th>User type </th>
			<th>Approval </th>
		</tr>
    </thead>
 <tbody>
    <tr>
<?php
while($users = mysqli_fetch_assoc($result)){
echo "<td><a href='edit-user.php?id=".$users['id']."' class='w3-btn w3-orange'>Edit</a></td>";  
echo "<td><a href='delete.php?id=".$users['id']."' class='w3-btn w3-red'>Delete</a></td>";
echo "<td><a href='suspend.php?id=".$users['id']."' class='w3-btn w3-blue-grey'>Suspend</a></td>";
//echo "<td>".$users['balance']."</td>";
echo "<td><a href='add-funds.php?id=".$users['id']."' class='w3-btn w3-green'>Add Funds</a></td>";

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
	echo "<td><input type = 'button' value ='".$users['approval']."' class = 'w3-btn w3-orange'></td>";
	echo "</tr>";

}	
}

?>       
</tbody>
</table>
<?php 
echo "<br/>";
for($i = 1; $i <= $a; $i++){
		?> <a href ="manage-users.php?page=<?php echo $i?>" class='w3-btn w3-orange' style = "text-decoration:none"><?php echo $i." ";?></a><?php
	}
?>    
</div>
<?php include 'footer.php' ?>
