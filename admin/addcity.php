<?php include('config.php');
if(isset($_POST['mytext'])){
$mytext = $_POST["mytext"];

//answers
foreach ($mytext as $eachInput) {
     $details[] = $eachInput;
}				
	for($i = 0; $i<= count($details)-1 ; $i++ ){
		$query = "INSERT INTO `cities`(`id`, `placename`) VALUES (NULL, '".$details[$i]."');";
		$result = mysqli_query($conn, $query) or die('Something went wrong. Please try again.');
	}
}

?>