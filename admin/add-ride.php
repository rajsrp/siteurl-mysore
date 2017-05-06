<!DOCTYPE html>

<?php include 'header1.php'; ?>
<?php include 'config.php'; ?>

<div class="w3-container w3-padding">
<h2>Add Ride</h2>  

 <div class="w3-half w3-small">
 <form class="w3-container" method="post" action="">
 
 
<label  class="w3-label" for="from">From:</label>
<input type="text" name="pickfrom" id="pickfrom" class="w3-input w3-border">


 <label for="to" class="w3-label ">To:</label>
<input type="text" name="dropto" id="dropto" class="w3-input w3-border">

<label for="date" class="w3-label  ">Date:</label>
<input type="date" name="offerdate" id="offerdate" class="w3-input w3-border">

<label for="time" class="w3-label  ">Time:</label>
<input type="time" name="offertime" id="offertime" class="w3-input w3-border">

<label for="deviate from" class="w3-label  ">Deviate From:</label>
<input type="text" name="deviatefromdistance" id="deviatefromdistance" class="w3-input w3-border">

<label for="deviate to" class="w3-label  ">Deviate To:</label>
<input type="text" name="deviatetodistance" id="deviatetodistance" class="w3-input w3-border">

<label for="wait period" class="w3-label  ">Waiting Period:</label>
<input type="text" name="waitperiod" id="waitperiod" class="w3-input w3-border">

<label for="cartype" class="w3-label  ">Vehicle Type:</label>
<input type="text" name="cartype" id="cartype" class="w3-input w3-border">

<label for="car model" class="w3-label  ">Model:</label>
<input type="text" name="carmodel" id="carmodel" class="w3-input w3-border">

<label for="no of seats" class="w3-label  ">Seating:</label>
<input type="text" name="noofseats" id="noofseats" class="w3-input w3-border">

<label for="offer price" class="w3-label  ">Amount:</label>
<input type="text" name="offerprice" id="offerprice" class="w3-input w3-border">



<br>

 <input type="submit" onclick = "add();" class="w3-btn w3-amber " value="Submit"></div>

</form>

</div>

<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script type = "text/javascript" >
 
 function add(){
	 if( document.getElementById('pickfrom').value == "")
	 {
		 alert('pick up from fields is empty');
		 
	 }else 
	 if( document.getElementById('dropto').value == "")
	 {
		 alert('pick up from fields is empty');
		 
	 }else 
	 if( document.getElementById('offerdate').value == "")
	 {
		 alert('offerdate fields is empty');
		 
	 }else
	if( document.getElementById('offertime').value == "")
	 {
		 alert('offertime fields is empty empty');
		 
	 }else
	if( document.getElementById('deviatefromdistance').value == "")
	 {
		 alert('deviatefromdistance fields is empty');
		 
	 }else
	if( document.getElementById('deviatetodistance').value == "")
	 {
		 alert('deviatetodistance fields is empty');
		 
	 }else
	if( document.getElementById('waitperiod').value == "")
	 {
		 alert('waitperiod fields is empty');
		 
	 }else
	if( document.getElementById('cartype').value == "")
	 {
		 alert('cartype fields is empty');
		 
	 }else
	if( document.getElementById('carmodel').value == "")
	 {
		 alert('carmodel fields is empty');
		 
	 }else
	if( document.getElementById('noofseats').value == "")
	 {
		 alert('noofseats fields is empty');
		 
	 }else
	if( document.getElementById('offerprice').value == "")
	 {
		 alert('offerprice fields is empty');
		 
	 }
	 else{
	return true;
	 }
}













</script>














<?php include 'footer1.php'; ?>

