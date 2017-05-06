 <?php 
 include('config.php');
 
 if(isset($_GET['id']) && !empty($_GET['id'])){
	 
  $id = $_GET['id'];
   
  $result = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '".mysqli_real_escape_string($conn, $id)."';") or trigger_error(mysqli_error($conn)." ".$query);
  
  $name ="";
  $email ="";
  $phone ="";
  $agency = "";
  $address ="";
  $city = "";
  $pin = "";
  $noofvehicles = ""; 
  
  while($users = mysqli_fetch_array($result)){
	  $name = $users['name'];
	  $email = $users['email'];
	  $phone = $users['phone'];
	  $agency = $users['agency'];
	  $address = $users['address'];
	  $city = $users['city'];
	  $pin = $users['pin'];
	  $noofvehicles = $users['noofvehicles'];
	  
  }
 if(isset($_POST['submit']))
{
  $id = $_POST['id'];
  
  $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) :  "";
  $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) :  "";
  $phone = isset($_POST['phone']) ? mysqli_real_escape_string($conn, $_POST['phone']) :  "";
  $agency = isset($_POST['agency']) ? mysqli_real_escape_string($conn, $_POST['agency']) :  "";
  $address = isset($_POST['address']) ? mysqli_real_escape_string($conn, $_POST['address']) :  "";
  $city = isset($_POST['city']) ? mysqli_real_escape_string($conn, $_POST['city']) :  "";
  $pin = isset($_POST['pin']) ? mysqli_real_escape_string($conn, $_POST['pin']) :  "";
  $noofvehicles = isset($_POST['noofvehicles']) ? mysqli_real_escape_string($conn, $_POST['noofvehicles']) :  "";
  
$query = "UPDATE `users` SET name='$name', email='$email', phone='$phone', agency='$agency', address='$address', city='$city', pin='$pin', noofvehicles='$noofvehicles' WHERE id='$id';";
$result = mysqli_query($conn,$query) or die("could not update " .mysqli_error()); 

header('Location: manage-users.php'); 
}
}
?>