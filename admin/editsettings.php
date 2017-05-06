<?php include ('header.php') ?>
<?php
include ('config.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
	if(!empty($id)){
		
		$query = "SELECT * FROM `settings` where id = '".$id."';";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$res = mysqli_fetch_assoc($result);
				
		$servicename = $res['servicename'];
		$serviceaddress = $res['serviceaddress'];
		$serviceemail = $res['serviceemail'];
		$servicephone = $res['servicephone'];
		$commission = $res['commission'];
		$commissiontype = $res['commissiontype'];
		$phone = $res['phone'];
		$termsandcondition = $res['termsandcondition'];
		$terms = nl2br(stripslashes($termsandcondition));
		
		}
}
?>
	<!-- Header -->
  <header class="w3-container " style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Settings </b></h5>
  </header>



<br><br>

<div class="w3-row">
<div class="w3-half w3-container"> 
 <form class="w3-container w3-responsive" method="post" action="updatesettings.php">

<label class="w3-label"  for="amount">Service Name:</label>
 <input class="w3-input w3-border  w3-animate-input"  type="text" name="servicename" id="servicename" value = "<?php echo $servicename;?>">

 <label class="w3-label"  for="date">Service Address:</label>
 <input class="w3-input w3-border w3-animate-input" type="text" name="serviceaddress" id="serviceaddress" value = "<?php echo $serviceaddress;?>">
 
<label class="w3-label"  for="paymentid">Service Email:</label>
 <input class="w3-input w3-border w3-animate-input"  type="text" name="serviceemail" id="serviceemail" value = "<?php echo $serviceemail;?>">

<label class="w3-label" for="paymentdesc">Service Phone:</label>
<input class="w3-input w3-border w3-animate-input"   type="text" name="servicephone" id="servicephone" value = "<?php echo $servicephone;?>">

<label class="w3-label" for="paymentdesc">Commission:</label>
<input class="w3-input w3-border w3-animate-input"   type="text" name="commission" id="commission" value = "<?php echo $commission;?>">

<label class="w3-label" for="paymentdesc">Phone No:</label>
<input class="w3-input w3-border w3-animate-input"   type="text" name="phone" id="phone" value = "<?php echo $phone;?>">

 <label class="w3-label"  for="day">Commission Type</label>
        <select  class="w3-select"  name="payment" id="payment">
			<option value="Flat">Flat</option>
			<option value="Percentage">Percentage</option>
	</select>

<label class="w3-label" for="paymentdesc">Terms and Conditions:</label>

<textarea  class="tinymce" class="w3-input w3-border w3-animate-input" name="termsandcondition" id="termsandcondition" >
<?php echo htmlspecialchars($termsandcondition); ?></textarea>

<input type = "hidden" name = "id" id = "id" value = "<?php echo $id;?>">
<br><br>

<input  class="w3-btn w3-amber w3-card-8" type="submit"  value="Update" >



<br><br>

</form>
</div>

<div class="w3-half">
<p></p>
</div>
</div>


  </div>
</div>
  <script type = "text/javascript" src= "js/jquery.min.js"></script>
	<script type = "text/javascript" src= "plugins/tinymce/js/tinymce/tinymce.min.js"></script>
	<script type = "text/javascript" src= "plugins/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
	<script type = "text/javascript" src= "plugins/tinymce/init-tinymce.js"></script>  
<?php include 'footer.php' ?>
?>