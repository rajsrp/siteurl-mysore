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
			<h2>Login</h2>
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
		
				<form id="login-form" method="post" class="w3-container" action = "log.php"> 									<!--added extra here-->

					<p><input class="w3-input" type="text" id="email" name="email" required><label>Email Id</label></p>
					
					<p><input class="w3-input" type="password" id="password" name="password" required><label>Password</label></p><br/>
 				
				<input type = "submit" class="w3-btn w3-khaki" value="Login" > <br><br>	
				</form>

			<!--<button class="w3-btn w3-khaki" >Login</button> <br><br>-->
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





function login(){
			//login code here
			debugger;
			//validate();
			
		if( document.getElementById('email').value == "" &&  document.getElementById('password').value == "" )
		{
			alert("Enter valid email and password");
			return false;
		}
 else if( document.getElementById('email').value == "" ||  document.getElementById('password').value == "" )
		{
			alert("Enter  email or password");
			return false;
		} 
		
		
		else
		{
		var email = $('#email').val();
		var password = $('#password').val();	
		
		//alert(email+' email');
		//alert(password+' password');		
		
		//alert('login function is called');
		var url = 'http://localhost/owtadmin/log.php?email='+ email +'&password='+ password;
		
		//alert(url);
		console.log(url);
		
		$.post(url,
		function(data, status){
		
		//alert(JSON.stringify(data));
		var status = data[0].status;
		
		if(status == 2){		
			
			//this is the success code
			alert("enter valid email and password");
			window.location.href = 'index.php';
			
			return true;
		}
		
		if(status == 1){
			//alert("status");
			
			//this is the success code
			window.location.href = 'manage-users.php';
			return true;
		}
		
		});
		}
}

 function validate()
 {
	 if( document.getElementById('email').value == "" &&  document.getElementById('password').value == "" )
		{
			alert("Enter valid email and password");
		} 
		 else if( document.getElementById('email').value == "" ||  document.getElementById('password').value == "" )
		{
			alert("Enter  email or password");
		} 
	 
	 
 }

</script>


</body>
</html>

