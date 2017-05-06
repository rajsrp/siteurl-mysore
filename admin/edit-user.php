
<?php include 'header.php' ?>
<?php
include('edituser.php');
?>


<!-- Header -->
  <header class="w3-container " style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Edit Users</b></h5>
  </header>

<div class="w3-container w3-padding">

 <div class="w3-half w3-small">
 <form class="w3-container" method="post" action="edituser.php">

	<input type='hidden' name='id'  id='id'  value= "<?php echo $_GET['id'];?>" class='w3-input w3-border'>

	<label class='w3-label' for='name'>Name:</label>
	<input type='text' name='name' value="<?php echo $name;?>" id='name' class='w3-input w3-border'>

	<label for="email" class="w3-label ">Email:</label>
	<input type="text" name="email" id="email" value="<?php echo $email;?>" class="w3-input w3-border">

	<label for="phone" class="w3-label  ">Phone:</label>
	<input type="text" name="phone" id="phone" value="<?php echo $phone;?>" class="w3-input w3-border">

	<label for="agency" class="w3-label  ">Agency:</label>
	<input type="text" name="agency" id="agency" value="<?php echo $agency;?>" class="w3-input w3-border">

	<label for="address" class="w3-label  ">Address:</label>
	<input type="text" name="address" id="address" value="<?php echo $address;?>" class="w3-input w3-border">

	<label for="city" class="w3-label  ">City:</label>
	<input type="text" name="city" id="city" value="<?php echo $city;?>" class="w3-input w3-border">

	<label for="pin" class="w3-label  ">pin:</label>
	<input type="text" name="pin" id="pin" value="<?php echo $pin;?>" class="w3-input w3-border">

	<label for="vehiclenu" class="w3-label  ">No of Vehicles:</label>
	<input type="text" name="noofvehicles" id="noofvehicles" value="<?php echo $noofvehicles;?>" class="w3-input w3-border"> 
<br />	
<input type="submit" name="submit" class="w3-btn w3-amber w3-card-8" value="Submit">

</form>

</div>

</div> 

<?php include 'footer.php' ?>
