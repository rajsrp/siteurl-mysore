<?php
include('config.php');

if(!empty($_POST['pickfrom']) && !empty($_POST['dropto'])){
	$pickfrom = mysqli_real_escape_string($conn, $_POST['pickfrom']);
	$pickfrom = htmlspecialchars($pickfrom, ENT_QUOTES, 'UTF-8');
	$dropto = mysqli_real_escape_string($conn, $_POST['dropto']);
	$dropto = htmlspecialchars($dropto, ENT_QUOTES, 'UTF-8');
	$cartype = mysqli_real_escape_string($conn, $_POST['cartype']);
	$cartype = htmlspecialchars($cartype, ENT_QUOTES, 'UTF-8');
	$carmodel = mysqli_real_escape_string($conn, $_POST['carmodel']);
	$carmodel = htmlspecialchars($carmodel, ENT_QUOTES, 'UTF-8');
	$noofseats = mysqli_real_escape_string($conn, $_POST['noofseats']);
	$noofseats = htmlspecialchars($noofseats, ENT_QUOTES, 'UTF-8');
	$price = mysqli_real_escape_string($conn, $_POST['price']);
	$price = htmlspecialchars($price, ENT_QUOTES, 'UTF-8');
	
	$query = "INSERT INTO `fixeddeals`(`fixeddealsid`, `pickfrom`, `dropto`, `cartype`, `carmodel`, `noofseats`, `price`) VALUES
	
			(NULL, '".$pickfrom."', '".$dropto."', '".$cartype."', '".$carmodel."', '".$noofseats."', '".$price."');";
	$result = mysqli_query($conn, $query) or die('Something went wrong. Please try again.');
	header('Location: addfixeddeals.php?message=1'); 
}else{
	header('Location: addfixeddeals.php?message=2');
}
?>