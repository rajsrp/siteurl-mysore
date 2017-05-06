<!DOCTYPE html>
<?php include 'header.php' ?>
<?php
	 $errors = array(
                                    1=>"Email already exsists",
                                    2=>"Could not complete the process. Please try again"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }

?>

<!-- Header -->
  <header class="w3-container " style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Add Agents</b></h5>
  </header>

<div class="w3-container w3-padding">
  
 <div class="w3-half w3-small">
 
 <form class="w3-container" method="POST" action = "registration.php"  onsubmit="return adduser()">

<label  class="w3-label" for="name">Name:</label>
<input type="text" name="name" id="name" class="w3-input w3-border">

 <label for="email" class="w3-label ">Email:</label>
<input type="text" name="email" id="email" class="w3-input w3-border">

<label for="password" class="w3-label  ">password:</label>
<input type="password" name="password" id="password" class="w3-input w3-border">

<label for="phone" class="w3-label  ">Phone:</label>
<input type="text" name="phone" id="phone" class="w3-input w3-border">

<label for="agency" class="w3-label  ">Agency:</label>
<input type="text" name="agency" id="agency" class="w3-input w3-border">

<label for="address" class="w3-label  ">Address:</label>
<input type="text" name="address" id="address" class="w3-input w3-border">

<label for="city" class="w3-label  ">City:</label>
<input type="text" name="city" id="city" class="w3-input w3-border">

<label for="pin" class="w3-label  ">pin:</label>
<input type="text" name="pin" id="pin" class="w3-input w3-border">

<label for="phone" class="w3-label  ">position:</label>
<input type="text" name="position" id="position" class="w3-input w3-border">

<label for="No of Vehicles" class="w3-label  ">No of Vehicles:</label>
<input type="text" name="noofvehicles" id="noofvehicles" class="w3-input w3-border">

<label for="emailverified" class="w3-label  ">emailverified:</label>
<input type="text" name="emailverified" id="emailverified" class="w3-input w3-border">

<label for="mobileverified" class="w3-label  ">mobileverified:</label>
<input type="text" name="mobileverified" id="mobileverified" class="w3-input w3-border">

<label for="usertype" class="w3-label  ">usertype:</label>
<input type="text" name="usertype" id="usertype" class="w3-input w3-border">

<label for="approval" class="w3-label  ">approval:</label>
<input type="text" name="approval" id="approval" class="w3-input w3-border">
 
 
<br>
<input type="submit" name="submit" class="w3-btn w3-amber w3-card-8" value="Submit"></div> 


</form>
<!--<button class="w3-btn w3-amber w3-card-8" name = "submit" id ="submit" >Submit</button> <br><br> -->
</div>

<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script> 

<script type= "text/javascript">

function adduser(){
	debugger;
	
	var name = $('#name').val();
	var email = $('#email').val();	
	var password = $('#password').val();	
	var resetpasswordkey = $('#resetpasswordkey').val();	
	var phone = $('#phone').val();	
	var agency = $('#agency').val();	
	var address = $('#address').val();	
	var city = $('#city').val();	
	var pin = $('#pin').val();	
	var position = $('#position').val();	
	var noofvehicles = $('#noofvehicles').val();
	var regdate = $('#regdate').val();		
	var emailverified = $('#emailverified').val();		
	var mobileverified = $('#mobileverified').val();		
	var usertype = $('#usertype').val();		
	var approval = $('#approval').val();		

	alert(name+' name');
	alert(email+' email');
	alert(password+' password');
	alert(resetpasswordkey+' resetpasswordkey');
	alert(phone+' phone');
	alert(agency+' agency');
	alert(address+' address');
	alert(city+' city');
	alert(pin+' pin');
	alert(position+' position');
	alert(noofvehicles+' noofvehicles');
	alert(regdate+' regdate');
	alert(emailverified+' emailverified');	
	alert(mobileverified+' mobileverified');	
	alert(usertype+' usertype');	
	alert(approval+' approval');	
	
	var url = 'http://localhost/html_1/webservices/add.php?name='+ name +'&email='+ email +'&password=' + password + '&resetpasswordkey=' + resetpasswordkey + '&phone='+ phone +'&agency=' + agency + '&address=' + address + '&city =' + city + '&pin=' + pin + '&position=' + position +'&noofvehicles=' +noofvehicles '&regdate=' + regdate + '&emailverified=' + mobileverified + '&emailverified=' + mobileverified + '&usertype=' + usertype + '&approval=' + approval +;
	alert(url);
	console.log(url);
}

</script>
<?php include 'footer.php' ?>
