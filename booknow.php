<?php
ob_start();
include('config.php');

$s = "SELECT id, phone FROM settings ORDER BY id DESC LIMIT 1";
  $r = mysqli_query($conn, $s);
  $rs = mysqli_fetch_assoc($r);
 $contactno = $rs['phone'];
if(isset($_GET['id'])){
	$offer_id = mysqli_real_escape_string($conn, $_GET['id']);
	$postedpickfrom = mysqli_real_escape_string($conn, $_GET['pickfrom']);
	$posteddropto = mysqli_real_escape_string($conn, $_GET['dropto']);
	$postedcarmodel = mysqli_real_escape_string($conn, $_GET['carmodel']);

	if(!empty($offer_id)){
		
		$query = "SELECT * FROM `offers` WHERE id = '".$offer_id."' AND (status = 'open' or status = 'fixed');";
		$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
		if(mysqli_num_rows($result) >= 1){
		$res = mysqli_fetch_assoc($result);
		$pickfrom = $res['pickfrom'];
		$dropto = $res['dropto'];
		$offerdate = $res['offerdate'];
                if($offerdate > 0){
                  $offerdate = date('d/m/Y', strtotime($offerdate));
                  $offerdate1 = $offerdate;
                }else{
                  $offerdate = 'Pick your Date';
                  $offerdate1 = $res['offerdate'];
                }		
		$enddate = $res['enddate'];
$enddate = date('d/m/Y', strtotime($enddate));
                $pickupfrom = $res['pickupfrom'];
                $dropto = $res['dropto'];
                $cartype = $res['cartype'];
                $carmodel = $res['carmodel'];
		$offertime = $res['offertime'];
                
                if($offertime > 0){
                   $offertime = date("h:ia", strtotime($offertime));
                   $offertime1 = $res['offertime'];
                }else{
                  $offertime = 'Pick your Time';
                  $offertime1 = $res['offertime'];
                }
                //$offertime = date("h:ia");
		$offerprice = $res['offerprice'];
		$userid = $res['userid'];
			if($userid == 0){
				$t = " SELECT id, termsandcondition from settings ORDER BY id DESC LIMIT 1 ";
				$r = mysqli_query($conn, $t);
				$rt = mysqli_fetch_assoc($r);
				$termsandcondition = $rt['termsandcondition'];
			}

		$drivercharges= $res['drivercharges'];
		$extrakm = $res['extrakm'];
		$userid = $res['userid'];
		$servicetax = $res['servicetax'];
		$_SESSION['offertime'] =  $offertime;
		$_SESSION['endtime'] = $endtime;
		$_SESSION['offerdate'] =  $offerdate;
		$_SESSION['enddate'] = $enddate;
		}else{
		 $noresults = 1;		
		}
	}
}
?>

	
<?php 
	if(isset($_GET['message'])){
		$message = $_GET['message'];
		if($message ==1){
echo "Fill in all the details.";
	}
if($message == 2){
echo 'Date and time does not match.';
}
	}
	?>
<!DOCTYPE html>
<html>

<head>
<title><?php if(isset($_GET['pickfrom'])){ echo $_GET['pickfrom'] .' -to-';}else if(isset($_POST['pickfrom'])){ echo $_POST['pickfrom'] .' -to-';}?><?php if(isset($_GET['dropto'])){ echo $_GET['dropto'];}else if(isset($_POST['dropto'])){ echo $_POST['dropto'];} ?> Oneway cabs</title>
<meta charset="UTF-8">

<meta name="description" content="We offer oneway cabs from <?php if(isset($_GET['pickfrom'])){ echo $_GET['pickfrom'];}else if(isset($_POST['pickfrom'])){ echo $_POST['pickfrom'];}?> to <?php if(isset($_GET['dropto'])){ echo $_GET['dropto'];}else if(isset($_POST['dropto'])){ echo $_POST['dropto'];} ?> at highly competitive rates. Get in touch with us if you do not find a suitable offer. ">

<meta name="keywords" content="cabs, one way taxi, one way cab, taxi booking, taxi, cab one way, one side taxi, rent a car, rent a taxi, inter city taxi, taxi for outstation, oneway cab from <?php if(isset($_GET['pickfrom'])){ echo $_GET['pickfrom'];}else if(isset($_POST['pickfrom'])){ echo $_POST['pickfrom'];}?> to <?php if(isset($_GET['dropto'])){ echo $_GET['dropto'];}else if(isset($_POST['dropto'])){ echo $_POST['dropto'];} ?>, cabs from <?php if(isset($_GET['pickfrom'])){ echo $_GET['pickfrom'];}else if(isset($_POST['pickfrom'])){ echo $_POST['pickfrom'];}?> to <?php if(isset($_GET['dropto'])){ echo $_GET['dropto'];}else if(isset($_POST['dropto'])){ echo $_POST['dropto'];} ?>, <?php if(isset($_GET['pickfrom'])){ echo $_GET['pickfrom'];}else if(isset($_POST['pickfrom'])){ echo $_POST['pickfrom'];}?> to <?php if(isset($_GET['dropto'])){ echo $_GET['dropto'];}else if(isset($_POST['dropto'])){ echo $_POST['dropto'];} ?> taxi">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">-->
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-vivid.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="timepicker/jquery.timepicker.css">
 <script src="myScript.js"></script>
</head>
<body class="w3-theme">



<!-- Header -->
<header class="w3-container w3-bar w3-dark-grey  w3-padding " id="myHeader">
<a href="http://caboneway.com/" class="w3-bar-item  w3-left w3-button "><img src="images/logo.png"  width="160px"></a>
<div class="w3-right">
<a href="tel: +<?php if(isset($contactno)){echo $contactno;}?>" class="w3-button w3-bar-item w3-border w3-tiny w3-text-yellow w3-border-yellow w3-round"> <i class="fa fa-phone"></i> <?php if(isset($contactno)){echo $contactno;}?></a> &nbsp;
  </div>
 
</header>


<div class="w3-container  w3-padding">
	<div>

<h1><?php  if(isset($_GET['pickfrom'])){ echo ucfirst($_GET['pickfrom']) .' to ';}else if(isset($_POST['pickfrom'])){ echo ucfirst($_POST['pickfrom']) .' to ';}?><?php if(isset($_GET['dropto'])){ echo ucfirst($_GET['dropto']) .' one way cabs';}else if(isset($_POST['dropto'])){ echo ucfirst($_POST['dropto']) .' one way cab booking';} ?></h1>

	
</div>
<br><br>
<div class="w3-col l4 s12 w3-padding">


<div class="w3-card-4" id = "bookingdetails">

<header class="w3-container w3-center w3-vivid-yellow">
<h3>Booking Summary</h3>
</header>

<div class="w3-container w3-padding">
<table class="w3-table w3-striped w3-hoverable">
<tr>
<td>Pick From</td>
<td><?php  if ( isset($pickfrom) ){ echo $pickfrom; }?></td>
</tr>		
<tr>
<td>Drop To</td>
<td><?php  if ( isset($dropto) ){ echo $dropto; }?></td>
</tr>
<tr>
<td>Pickup Time</td>
<td><?php  if ( isset($offertime) ){ echo $offertime; }?></td>
</tr>
<tr>
<td>Pickup Date</td>
<td><?php  if ( isset($offerdate) ){ echo $offerdate; }?></td>
</tr>
<tr>
<td>Car Model</td>
<td><?php  if ( isset($cartype) ){ echo $cartype; }?></td>
</tr>
<tr>
<td>Car Type</td>
<td><?php  if ( isset($carmodel) ){ echo $carmodel; }?></td></tr>
<tr>
<td>Total Amount</td>
<td><?php  if ( isset($offerprice) ){ echo $offerprice; }?></td>
</tr>
</table>
</div>
</div>
<br/>	

<div class="w3-card-4" id = "termsandcondition">

<header class="w3-container w3-center w3-vivid-yellow">
<h3>Terms and Conditions</h3>
</header>

<div class="w3-container w3-padding">
<table class="w3-table w3-striped w3-hoverable">
<tr>
<td>Driver Charges</td>
<td><?php  if ( isset($drivercharges) ){ echo $drivercharges; }?></td>
</tr>		
<tr>
<td>Extra Kms</td>
<td><?php  if ( isset($extrakm) ){ echo $extrakm; }?></td>
</tr>
<tr>
<td>Service Tax</td>
<td><?php  if ( isset($servicetax) ){ echo $servicetax; }?></td>
</tr>

<th>Terms and Conditions</th>
<tr>
<td><?php  if ( isset($termsandcondition) ){ echo $termsandcondition; }?></td>
</tr>
</table>
</div>
</div>	
</div>

<div class="w3-container  w3-padding" id = "noresultsfound" style="display: none;">

<div class="w3-col l8 s12 w3-padding">	
<div class="w3-container  w3-center w3-padding-32" style="min-height:400px">
<div class=" w3-white w3-panel w3-padding w3-round"><p>We are unable to find a suitable cab<?php if(isset($postedcarmodel)){echo $postedcarmodel;}?> from <?php if(isset($postedpickfrom)){echo $postedpickfrom;}?> to <?php if(isset($posteddropto)){echo $posteddropto;}?>  at this moment.</p>
	<p>Share your contact details so that, we can arrange you a drop.</p>

	<?php $contactmessage = "if(isset($postedcarmodel)){echo $postedcarmodel;} from if(isset($postedpickfrom)){echo $postedpickfrom;} to if(isset($posteddropto)){echo $posteddropto;}";?>

 <img src="images/no-rides.png" class="w3-image" style="margin-top:30px" width="200px">

<div>
	<h4>Oops! No cabs found.</h4> 
	<p>There are no cabs found from <?php echo $pickfrom;?> to <?php echo $dropto;?>. Please try different route.</p>
</div>
</div>
</div>
<br><br>
</div>



<div class="w3-col l4 s12 w3-padding">
<div class="w3-container ">

<?php include 'sidebar.php' ?>
</div>

</div>

</div>


<div class="w3-col l8 s12 w3-padding">
<div class="w3-container ">
<div class="w3-card-4" id = "booking">

<header class="w3-container w3-center w3-vivid-yellow">
<h3>Booking Confirmation</h3>
</header>

<div class="w3-container w3-small">

	 <form class="w3-container" method="post" action="booking.php" >	
	<input type='hidden' name='id' id='id' value = "<?php echo $offer_id;?>"class='w3-input w3-border' >
	<input type='hidden' name='offerprice' id='offerprice' value = "<?php echo $offerprice;?>"class='w3-input w3-border' >
        <input type='hidden' name='pickuplocation' id='pickuplocation' value = "<?php echo $pickfrom;?>"class='w3-input w3-border' >
        <input type='hidden' name='dropto' id='dropto' value = "<?php echo $dropto;?>"class='w3-input w3-border' >
<input type='hidden' name='cartype' id='cartype' value = "<?php echo $cartype;?>"class='w3-input w3-border' >
<input type='hidden' name='carmodel' id='carmodel' value = "<?php echo $carmodel;?>"class='w3-input w3-border' >
	<p><label class='w3-label' for='name'>Name:</label>
	<input type='text' name='name' value="" id='name'  class='w3-input  w3-border' required></p>

	<label for="email" class="w3-label ">Email:</label>
	<input type="email" name="email" id="email" value="" class="w3-input w3-border" required>

	<label for="phone" class="w3-label  ">Phone:</label>
	<input type="text" name="phone" id="phone" value="" class="w3-input w3-border" pattern="[0-9]{10}" required>	
	
	<label for="pickupdate" class="w3-label">Pick Up Date:</label>
	<input type="text" name="datepicker" id="datepicker" value="<?php  if ( isset($offerdate) ) echo $offerdate; ?>" class="w3-input w3-border" required>
	
	<label for="pickuptime" class="w3-label  ">Pick Up Time:</label>
	<input type="text" name="timepicker" id="timepicker" value="<?php  if ( isset($offertime) ) echo $offertime; ?>" class="w3-input w3-border" required>
	
	<label for="pickuplocation" class="w3-label  "> Pick Up Specific Location in <?php  if ( isset($pickfrom) ){ echo $pickfrom; }?> :</label>
	<input type="text" name="pickspecification" id="pickspecification" value="" class="w3-input w3-border">
	
	
	<label for="pickuplocation" class="w3-label  ">Drop To Specific Location in <?php  if ( isset($dropto) ){ echo $dropto; }?> :</label>
	<input type="text" name="dropspecification" id="dropspecification" value="" class="w3-input w3-border"><br>
	
	<input type="hidden" name="paymenttype" id = "paymenttype"class="w3-input w3-border" value="banking"><br>
	<!--<input type="radio" name="paymenttype" id ="paymenttype" class="w3-input w3-border" value="online"> Online Payment<br>-->
<br />	
<input type="submit" name="submit" class="w3-btn w3-amber " value="Book Now" required>
<br>	<br>
</form>


</div>
</div><!--booking-->



</div>

</div>

</div>

<footer class="w3-container w3-padding-64 w3-grey w3-center w3-opacity w3-xxlarge" > 
  <i class="fa fa-facebook-official w3-blue w3-hover-opacity"></i>
  
  <p class="w3-medium">Powered by <a href="http://www.siteurl.in" target="_blank" class="w3-hover-text-green">SiteURL</a></p>
</footer>


<script type = "text/javascript" src= "js/jquery.min.js"></script>
	<script type = "text/javascript" src= "plugins/tinymce/js/tinymce/tinymce.min.js"></script>
	<script type = "text/javascript" src= "plugins/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
	<script type = "text/javascript" src= "plugins/tinymce/init-tinymce.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="timepicker/jquery.timepicker.js"></script>
	<script src="timepicker/jquery.timepicker.min.js"></script>
  <script>
   debugger;
	var offerdate = '<?php if(isset($_SESSION['offerdate'])){echo $_SESSION['offerdate'];}?>';
	var enddate = '<?php if(isset($_SESSION['enddate'])){echo $_SESSION['enddate'];}?>';  
	var ofdat = <?php echo json_encode($offertime); ?>;
	var endtime = <?php echo json_encode($endtime); ?>;
	var userid = <?php echo json_encode($userid); ?>;
	var noresults = <?php echo json_encode($noresults); ?>;

  if(userid == 0){
  	document.getElementById('termsandcondition').style.display = "none";
  }

	if(ofdat == "Pick your Time"){
		$('#timepicker').timepicker();  
	}else{
		  $('#timepicker').timepicker({
			'minTime': ofdat,
			'maxTime': endtime
		});  
	}
	if(offerdate = ''){
		 $( "#datepicker" ).datepicker({ minDate: 0 ,dateFormat: 'dd/mm/yy' });
	}else if(offerdate == enddate){
               $("#datepicker").datepicker().hide(); 
	}else{
                $('#datepicker').datepicker({
		dateFormat: 'dd/mm/yy',
		minDate: 'offerdate',
		maxDate: new Date(enddate),
			
});  
	}
if(noresults == 1){
document.getElementById('termsandcondition').style.display = "none";
document.getElementById('booking').style.display = "none";
document.getElementById('bookingdetails').style.display = "none";
document.getElementById('noresultsfound').style.display = "block";
}
  </script>


</body>
</html>
<ul class="w3-ul w3-red">
<li>Distance will be calculated from&nbsp;garage to garage.
</li>
<li>
No extra charges up to 150 Km's, after exceeding the 150 Km's each km will be charged as&nbsp;additionally.</li>
</li>
<li>
If driver drives the vehicle before&nbsp;06:00 Hrs or after 22:00 Hrs, then the additional driver batta will be added to the total.â€‹</li>

<li>
Vehicle will be confirm for the trip, once we receive the advance amount (15% of the approximate total amount).
</li>
<li>
Toll / Parking Charges and interstate entry (Road Tax) / Police entry charges are has to be paid by the Clients.
</li>
</ul>

