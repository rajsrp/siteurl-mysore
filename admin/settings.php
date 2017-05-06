<?php include ('header.php') ?>
<?php include ('addfunds.php');?>
<?php
	$query = "SELECT * FROM `settings`;";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	while($details = mysqli_fetch_assoc($result)){
		$rows[] = $details;		
	}
	$json = $rows;
?>
<!-- Header -->
  <header class="w3-container " style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Settings </b></h5>
  </header>

 <div class="w3-responsive  w3-theme">
<table    class="w3-table-all w3-table-responsive w3-small" height = "50px">
      <thead>
        <tr class="w3-khaki">
			<th>ID</th>
			<th>Service Name</th>
			<td>Service Address</td>
			<td>Service Email</td>
			<td>Service Phone</td>
			<td>Commission</td>
			<td>Commission Type</td>
			<td>Phone</td>
			<td>Terms And Condition</td>
			<td>Edit</td>
   </tr>
      </thead>
      <tbody>
        <tr>
<?php
for($i = 0; $i <= count($json)-1; $i++){
 
	echo "<td>".$json[$i]['id']."</td>";
	echo "<td>".$json[$i]['servicename']."</td>";
	echo "<td>".$json[$i]['serviceaddress']."</td>";
	echo "<td>".$json[$i]['serviceemail']."</td>";
	echo "<td>".$json[$i]['servicephone']."</td>";
	echo "<td>".$json[$i]['commission']."</td>";
	echo "<td>".$json[$i]['commissiontype']."</td>";
	echo "<td>".$json[$i]['phone']."</td>";	
	echo "<td>".$json[$i]['termsandcondition']."</td>";	
	echo "<td><a href='editsettings.php?id=".$json[$i]['id']."' class='w3-btn w3-blue'>Edit</a></td>";
	echo "</tr>";
	}
?>
        </tr>
        
      </tbody>
   
 <tbody>
 
        </tr>
        
      </tbody>

 </table>    
</div> 

<br><br>

<div class="w3-row">
<div class="w3-half w3-container"> 
 <form class="w3-container w3-responsive" method="post" action="settingprocess.php">

<label class="w3-label"  for="amount">Service Name:</label>
 <input class="w3-input w3-border  w3-animate-input"  type="text" name="servicename" id="servicename">

 <label class="w3-label"  for="date">Service Address:</label>
 <input class="w3-input w3-border w3-animate-input" type="text" name="serviceaddress" id="serviceaddress">
 
<label class="w3-label"  for="paymentid">Service Email:</label>
 <input class="w3-input w3-border w3-animate-input"  type="text" name="serviceemail" id="serviceemail">

<label class="w3-label" for="paymentdesc">Service Phone:</label>
<input class="w3-input w3-border w3-animate-input"   type="text" name="servicephone" id="servicephone">

<label class="w3-label" for="paymentdesc">Commission:</label>
<input class="w3-input w3-border w3-animate-input"   type="text" name="commission" id="commission">

<label class="w3-label" for="paymentdesc">Phone No:</label>
<input class="w3-input w3-border w3-animate-input"   type="phone" name="phone" id="phone">

 <label class="w3-label"  for="day">Commission Type</label>
        <select  class="w3-select"  name="payment" id="payment">
          <option value="Flat">Flat</option>
          <option value="Percentage">Percentage</option>
	</select>

<label  class="w3-label" for="paymentdesc">Terms and Conditions:</label>

<textarea  class="tinymce" class="w3-input w3-border w3-animate-input" name="termsandcondition" id="termsandcondition"></textarea>
<br><br>

<input  class="w3-btn w3-amber w3-card-8" type="submit"  value="Add" >



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
