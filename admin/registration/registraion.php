<!DOCTYPE html>
<html>
	<head>
	<title>One Way Taxi</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	</head>
	
	<style>
	html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
	</style>
	
<body class="w3-light-grey">
<div class="wrapper">
	<!-- Top container -->
	<header class="w3-container  w3-center w3-padding  w3-black w3-card-8">
		<img src="car.svg" height="30">
	</header>

<div class="w3-container w3-padding-32  style="min-height:800px;">
	<div class="w3-quarter"><p> </p>
</div>

<div class="w3-half">
	<div class="w3-card-16">

		<div class="w3-container w3-amber">
			<h2>Register</h2>
		</div>
				  <?php 

                                $errors = array(
                                    1=>"Invalid user name or password, Try again",
                                    2=>"Please login to access this area"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }
                               ?>  		
		
				<form id="registration-form" method="post" class="w3-container" action="regg.php"> 									<!--added extra here-->

					<p><input class="w3-input" type="text" id="name" name="name"><span style ="color : red; font-size: 15pt">*</span>User Name</label></p>
					
					<p><input class="w3-input" type="text" id="email" name="email" ><span style ="color : red; font-size: 15pt">*</span><label>Email</label></p>
					
					<p><input class="w3-input" type="password" id="password" name="password" ><span style ="color : red; font-size: 15pt">*</span><label>Password</label></p>
					
					<p><input class="w3-input" type="password" id="retypepassword" name="retypepassword" ><span style ="color : red; font-size: 15pt">*</span><label>Retype Password</label></p>

					<p><input class="w3-input" type="text" id="phone" name="phone" ><span style ="color : red; font-size: 15pt">*</span><label>Phone Number</label></p>
					
					<p><input class="w3-input" type="text" id="agency" name="agency" ><span style ="color : red; font-size: 15pt">*</span><label>Agency</label></p>
					
					<p><input class="w3-input" type="text" id="address" name="address" ><span style ="color : red; font-size: 15pt">*</span><label>Address</label></p>
					
					<p><input class="w3-input" type="text" id="city" name="city" ><span style ="color : red; font-size: 15pt">*</span><label>city</label></p>
					
					<p><input class="w3-input" type="text" id="pin" name="pin" ><span style ="color : red; font-size: 15pt">*</span><label>pin</label></p>
					
					<p><input class="w3-input" type="text" id="position" name="position" ><span style ="color : red; font-size: 15pt">*</span><label>position</label></p>
					
					<p><input class="w3-input" type="text" id="noofvehicles" name="noofvehicles" ><span style ="color : red; font-size: 15pt">*</span><label>noofvehicles</label></p>
					
					<!-- <p><input type="button" name="submit" class="w3-btn w3-amber w3-card-8" onclick = "register()" value="Submit"></div> </p>-->
 				
				</form>

			 <button class="w3-btn w3-khaki" onclick="register()">Register</button> <br><br>
	</div>
</div>

</div>  

  <!-- Footer -->
<footer class="w3-container w3-padding-48 w3-small  w3-center w3-dark-grey ">
	<p>Powered by <a href="http://www.siteurl.in" target="_blank">SiteURL</a></p>
</footer>

  <!-- End page content -->
</div>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>

<script>





function register(){
			//login code here
			debugger;
			//validate();
			
/* 		if( document.getElementById('name').value == "" )
		{
			alert("Enter valid username");
			return false;
		}
 else if( document.getElementById('name').value == "" ||  document.getElementById('password').value == "" )
		{
			alert("Enter  username or password");
			return false;
		} 
		
		
		else
		{ */
	if( document.getElementById('password').value ==  document.getElementById('retypepassword').value ){
		
			var name = $('#name').val();
			var email = $('#email').val();	
			var password = $('#password').val();	
			var retypepassword = $('#retypepassword').val();	
			var phone = $('#phone').val();	
			var agency = $('#agency').val();	
			var address = $('#address').val();	
			var city = $('#city').val();	
			var pin = $('#pin').val();	
			var position = $('#position').val();	
			var noofvehicles = $('#noofvehicles').val();
			
			
			alert(name+' name');
			alert(email+' email');
			alert(password+' password');
			alert(retypepassword+' retypepassword');
			alert(phone+' phone');
			alert(agency+' agency');
			alert(address+' address');
			alert(city+' city');
			alert(pin+' pin');
			alert(position+' position');
			alert(noofvehicles+' noofvehicles');
			
		
		
		
		alert('register function is called');
		var url = 'http://localhost/html_1/webservices/regg.php?name='+ name +'&email='+ email +'&password='+ password +'&retypepassword='+ retypepassword +'&phone='+ phone +'&agency='+ agency +'&address='+ address +'&city='+ city +'&pin='+ pin +'&position='+ position +'&noofvehicles='+ noofvehicles;
		
		alert(url);
		console.log(url);
		
		
	}	else{
		alert ('Password does not match');
	}
		/*} */
}



</script>


</body>
</html>

