<?php
include('config.php');

$s = "SELECT id, phone FROM settings ORDER BY id DESC LIMIT 1";
  $r = mysqli_query($conn, $s);
  $rs = mysqli_fetch_assoc($r);
 $contactno = $rs['phone']; 
$errors = array(
    1=>"Booking details is sent to your email id.",
    2=>"Fill in all the details.",
    3=>"Something went wrong. Please try again.",
    4=>"Thank you for contacting Oneway Taxi. Our customer service executive will get in touch with you soon."
   
);
     $error_id = isset($_GET['message']) ? (int)$_GET['message'] : 0;

$dat = date("Y/m/d");
	$query = "SELECT DISTINCT id, pickfrom, dropto FROM `offers` ORDER BY id ASC LIMIT 10 ;";	
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		
?>
<!DOCTYPE html>
<html>
<title>Cab Oneway</title>
<meta charset="UTF-8">
<meta name="description" content="Cabone way surves best offers for travelers in and around Mysore as well as inter city. It avails users to choose a ride at affordable price and reliable service. ">
<meta name="keywords" content="cabs, one way taxi, one way cab, taxi booking, taxi, cab one way, one side taxi, rent a car, rent a taxi, inter city taxi, taxi for outstation">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">-->
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-vivid.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
 <script src="myScript.js"></script>
<body class="w3-theme">

<!-- Side Navigation -->
<!--<nav class="w3-sidebar w3-bar-block w3-card-2  w3-theme w3-animate-left w3-center" style="display:none" id="mySidebar">
  <!--<h1 class="w3-xxxlarge w3-text-theme">Side Navigation</h1>-->
  <!--<button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
</nav>-->

<!-- Header -->
<header class="w3-container w3-bar  bgimg w3-padding parallax" id="myHeader">
<a href="http://caboneway.com/" class="w3-bar-item  w3-left w3-button "><img src="images/logo.png"  width="160px"></a>
<div class="w3-right">
<a href="tel: +91 821 6999444" class="w3-button w3-bar-item w3-border w3-tiny w3-text-yellow w3-border-yellow w3-round"> <i class="fa fa-phone"></i>  <?php if(isset($contactno)){echo $contactno;}?> </a> &nbsp;
  <!--<i onclick="w3_open()" class="fa fa-bars w3-text-black w3-xlarge w3-button w3-round w3-border w3-border-yellow"></i>--> </div>
  <div class="w3-center ">
  <div class="w3-center" style="height:600px">
<div class="w3-display-bottommiddle">
  
    <div class="w3-padding-32">
     <!--<button class="w3-btn w3-xlarge w3-animate-right w3-dark-grey w3-hover-light-grey" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">Contact Us</button>-->
    </div>
  </div>  </div>
</header>


<div class="w3-container  w3-row-col w3-dark-grey w3-padding-32">
<div class="w3-col l9 s12">

	<h3>Popular Routes</h3>
	
<table class="w3-table-all w3-card-4 ">
	<tr class="w3-dark-grey">
		<th>From</th>     
		<th>To</th>
		<th></th>
	</tr>
	<tr class=' w3-text-black'>
	<?php while($details = mysqli_fetch_assoc($result)) {		
	echo "<td class=w3-text-black>".$details['pickfrom']."</td>";
    echo "<td class=w3-text-black>".$details['dropto']."</td>";
    echo "<td><a href='".str_replace(" ", "_", $details['pickfrom'])."-to-".str_replace(" ", "_", $details['dropto'])."-taxi' class='w3-btn w3-amber' id = 'showoffers'>Show offers</a></td>"; 
	
	echo "</tr>";
	}
?>

 
</table></br>
 <div align="right">
  <a href = "searchroutes.php" class='w3-btn w3-blue-grey'>More Offers.. </a>
</div> 

</div>



<div class="w3-col l3 s12">
<?php include 'sidebar.php' ?>
</div>

</div>





<footer class="w3-container w3-padding-64 w3-grey w3-center w3-opacity w3-xxlarge" > 
  <i class="fa fa-facebook-official w3-blue w3-hover-opacity"></i>
  
  <p class="w3-medium">Powered by <a href="http://www.siteurl.in" target="_blank" class="w3-hover-text-green">SiteURL</a></p>
</footer>
<script>

//var hidedi = '<?php if(isset($_SESSION['fixdealsied'])){echo $_SESSION['fixdealsied'];}?>';
var smallcar = '<?php echo json_encode($ressmallcar);?>';

if(smallcar == 0){
	document.getElementById("smallcar").style.display =  'none';	
}
//alert( showid[0] );

</script>

</body>
</html>


