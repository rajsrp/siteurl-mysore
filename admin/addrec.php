<?php include 'config.php'; ?>
<?php
	
	$id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) :  "";
	$pickfrom = isset($_POST['pickfrom']) ? mysqli_real_escape_string($conn, $_POST['pickfrom']) :  "";
	$dropto = isset($_POST['dropto']) ? mysqli_real_escape_string($conn, $_POST['dropto']) :  "";
	$offerdate = isset($_POST['offerdate']) ? mysqli_real_escape_string($conn, $_POST['offerdate']) :  "";
	$offertime = isset($_POST['offertime']) ? mysqli_real_escape_string($conn, $_POST['offertime']) :  "";
	$deviatefromdistance = isset($_POST['deviatefromdistance']) ? mysqli_real_escape_string($conn, $_POST['deviatefromdistance']) :  "";
	$deviatetodistance = isset($_POST['deviatetodistance']) ? mysqli_real_escape_string($conn, $_POST['deviatetodistance']) :  "";
	$waitperiod = isset($_POST['waitperiod']) ? mysqli_real_escape_string($conn, $_POST['waitperiod']) :  "";
	$cartype = isset($_POST['cartype']) ? mysqli_real_escape_string($conn, $_POST['cartype']) :  "";
	$carmodel = isset($_POST['carmodel']) ? mysqli_real_escape_string($conn, $_POST['carmodel']) :  "";
	$offerprice = isset($_POST['offerprice']) ? mysqli_real_escape_string($conn, $_POST['offerprice']) :  "";
	$noofseats = isset($_POST['noofseats']) ? mysqli_real_escape_string($conn, $_POST['noofseats']) :  "";
	

	$query = "INSERT INTO `offers`(`id`, `offerdate`, `offertime`, `waitperiod`, `pickfrom`, `deviatefromdistance`, `dropto`, `deviatetodistance`, `offerprice`, `cartype`, `noofseats`, `carmodel`) VALUES
	(NULL, 'CONVERT(VARCHAR(11),GETDATE(),106)', 'CONVERT(VARCHAR(19),GETDATE())', '$waitperiod', '$pickfrom', '$deviatefromdistance', '$dropto', '$deviatetodistance', '$offerprice', '$cartype', '$noofseats', '$carmodel');";
	$result = mysqli_query($conn, $query) or die ("could not update" .mysqli_error($conn));
	header('location:index.php');

 ?>
