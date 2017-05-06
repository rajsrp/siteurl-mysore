<?php include ('header.php') ?>
<?php include ('addfunds.php');?>
<!-- Header -->
  <header class="w3-container " style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Add Funds</b></h5>
  </header>

<div class="w3-row-padding  w3-small">
   <div class="w3-responsive  w3-theme">
  <table   class="w3-table-all w3-table-responsive w3-small">
      <thead>
        <tr>

        <th >ID</th>
        <th>Customer</th>
		<th>Email</th>	
		<th> Phone</th>	
        <th >AgencyName</th>
        <th>Address</th>
        <th >City</th>         
<!--<th >Email Varified</th>	
<th>Mobile Varified</th>	
<th>User type </th>
<th>Approval </th>-->		
 
   </tr>
      </thead>
      <tbody>
        <tr>
<?php
for($i = 0; $i <= count($json)-1; $i++){
	echo "<td>".$json[$i]['id']."</td>";
	echo "<td>".$json[$i]['name']."</td>";
	echo "<td>".$json[$i]['email']."</td>";
	echo "<td>".$json[$i]['phone']."</td>";
	echo "<td>".$json[$i]['agency']."</td>";
	echo "<td>".$json[$i]['address']."</td>";
	echo "<td>".$json[$i]['city']."</td>";
	echo "</tr>";	
}
?>
 <!--<td>Email Varified</td>	
<td>Mobile Varified</td>	
<td>User type </td>
<td>Approval </td>-->
    </tbody>
    </table>    

<br><br>

<div class="w3-row">
<div class="w3-half w3-container"> 
 <form class="w3-container w3-responsive" method="post" action="#">

        <label class="w3-label"  for="day">Payment Type</label>
        <select  class="w3-select"  name="payment" id="payment">
          <option value="1">Credit Card</option>
          <option value="2">Credit Card offline</option>
          <option value="3">Netbanking Transfer</option>
          <option value="4">Netbanking</option>
          <option value="5">Cheque</option>
          <option value="6">DD</option>
          <option value="7">Cash</option>
        </select>
<input type='hidden' name='id'  id='id'  value= "<?php echo $_GET['id'];?>" class='w3-input w3-border'>

<p> <label class="w3-label"  for="amount">Amount Rs:</label>
 <input class="w3-input w3-border  w3-animate-input"  type="text" name="amount" id="amount">
</p>
 <label class="w3-label"  for="date">Date:</label>
 <input class="w3-input w3-border w3-animate-input" type="date" name="date" id="date">
 
<label class="w3-label"  for="paymentid">Paymentid:</label>
 <input class="w3-input w3-border w3-animate-input"  type="text" name="paymentid" id="paymentid">

<label class="w3-label" for="paymentdesc">Paymentdesc:</label>
 <input class="w3-input w3-border w3-animate-input"   type="text" name="paymentdesc" id="paymentdesc">
<br>

<input  class="w3-btn w3-amber w3-card-8" type="submit"  value="Add Fund">

<br><br>

</form>
</div>

<div class="w3-half">
<p></p>
</div>
</div>


  </div>
</div>
  
<?php include 'footer.php' ?>
