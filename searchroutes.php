<?php
include('config.php');
ob_start();
$page = $_GET['page'];
if($page == '' || $page ==1){
	$page1 = 0;
}
else{
	$page1 = ($page*10)-10;
}

$s = "SELECT id, phone FROM settings ORDER BY id DESC LIMIT 1";
  $r = mysqli_query($conn, $s);
  $rs = mysqli_fetch_assoc($r);
 $contactno = $rs['phone']; 
	$dat = date("Y-m-d");
	$query = "SELECT DISTINCT * FROM `offers` WHERE user_id = 0 UNION SELECT DISTINCT * FROM `offers` WHERE enddate >= '".$dat."' AND status = 'open' LIMIT $page1, 10;";  
	
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

	$query1 = "SELECT DISTINCT * FROM `offers` WHERE user_id = 0 UNION SELECT DISTINCT * FROM `offers` WHERE enddate >= '".$dat."' AND status = 'open';";

	$result1 = mysqli_query($conn, $query1) or trigger_error(mysqli_error($conn)." ".$query1);
    
    $res1 = mysqli_num_rows($result1);
	
	$a = $res1/10;
	$a = ceil($a);
		
	$errors = array(
    1=>"Booking details is sent to your email id.");
$error_id = isset($_GET['message']) ? (int)$_GET['message'] : 0;	
?>
<!DOCTYPE html>
<html>
<head>
<title><?php if(isset($_GET['pickfrom'])){ echo $_GET['pickfrom'] .'-to-';}else if(isset($_POST['pickfrom'])){ echo $_POST['pickfrom'] .'-to-';}?><?php if(isset($_GET['dropto'])){ echo $_GET['dropto'];}else if(isset($_POST['dropto'])){ echo $_POST['dropto'];} ?> Oneway cabs</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="We offer oneway cabs from <?php if(isset($_GET['pickfrom'])){ echo $_GET['pickfrom'];}else if(isset($_POST['pickfrom'])){ echo $_POST['pickfrom'];}?> to <?php if(isset($_GET['dropto'])){ echo $_GET['dropto'];}else if(isset($_POST['dropto'])){ echo $_POST['dropto'];} ?> at highly competitive rates. Get in touch with us if you do not find a suitable offer. ">

<meta name="keywords" content="cabs, one way taxi, one way cab, taxi booking, taxi, cab one way, one side taxi, rent a car, rent a taxi, inter city taxi, taxi for outstation, oneway cab from <?php if(isset($_GET['pickfrom'])){ echo $_GET['pickfrom'];}else if(isset($_POST['pickfrom'])){ echo $_POST['pickfrom'];}?> to <?php if(isset($_GET['dropto'])){ echo $_GET['dropto'];}else if(isset($_POST['dropto'])){ echo $_POST['dropto'];} ?>, cabs from <?php if(isset($_GET['pickfrom'])){ echo $_GET['pickfrom'];}else if(isset($_POST['pickfrom'])){ echo $_POST['pickfrom'];}?> to <?php if(isset($_GET['dropto'])){ echo $_GET['dropto'];}else if(isset($_POST['dropto'])){ echo $_POST['dropto'];} ?>, <?php if(isset($_GET['pickfrom'])){ echo $_GET['pickfrom'];}else if(isset($_POST['pickfrom'])){ echo $_POST['pickfrom'];}?> to <?php if(isset($_GET['dropto'])){ echo $_GET['dropto'];}else if(isset($_POST['dropto'])){ echo $_POST['dropto'];} ?> taxi">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">-->
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-vivid.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
 <script src="myScript.js"></script>
</head>
<body class="w3-theme">



<!-- Header -->
<header class="w3-container w3-bar w3-dark-grey  w3-padding " id="myHeader">
<a href="index.php" class="w3-bar-item  w3-left w3-button "><img src="images/logo.png"  width="160px"></a>
<div class="w3-right">
<a href="tel: +<?php if(isset($contactno)){echo $contactno;}?>" class="w3-button w3-bar-item w3-border w3-tiny w3-text-yellow w3-border-yellow w3-round"> <i class="fa fa-phone"></i> <?php if(isset($contactno)){echo $contactno;}?>  </a> &nbsp;
  </div>
 
</header>
	

<div class="w3-container  w3-padding">

<div class="w3-col l9 s12 ">
	<div>
	<?php 
	if ($error_id == 1) {
             echo '<p class="text-danger">'.$errors[$error_id].'</p>';
        }
	?>
</div>	
	<div class="w3-container  w3-section w3-padding">    
		<div class="w3-row">		
	
	
<?php
				if(isset($_POST['search'])) {
				
					$pickfrom = $_POST['pickfrom'];
					$dropto = $_POST['dropto'];
					
					//$query1 = "SELECT * FROM `offers` INNER JOIN `users` ON offers.user_id=users.id where pickfrom LIKE '%".$pickfrom."%' AND dropto LIKE '%".$dropto."%' AND offers.status = 'open'; ";
					$query1 = "SELECT users.name, offers.id, offers.offertime, offers.offerdate,
							offers.pickfrom, offers.dropto, offers.offerprice FROM users INNER JOIN offers
							ON users.id=offers.user_id WHERE pickfrom LIKE '%".$pickfrom."%' AND dropto LIKE '%".$dropto."%' AND offers.status = 'open'" ; 

					$result = mysqli_query($conn, $query1) or trigger_error(mysqli_error($conn)." ".$query1);
					$res = mysqli_num_rows($result);
					if($res >=1){
						
					}else{
						$query1 = "SELECT * FROM offers WHERE user_id = '0' AND  pickfrom LIKE '%".$pickfrom."%' AND dropto LIKE '%".$dropto."%' ORDER BY id ASC LIMIT 7;";

						$result = mysqli_query($conn, $query1) or trigger_error(mysqli_error($conn)." ".$query1);
$res = mysqli_num_rows($result);
							if($res >=1){
						
							}else{
								header('Location: norides.php?from='.$pickfrom.'&to='.$dropto);
							}
					}
				}
				
				//echo $pickfrom = $_GET['sp'];
				if(isset($_GET['pickfrom'])){
					if(!empty($_GET['pickfrom'])){					
					$pickfrom = str_replace("_"," ",$_GET['pickfrom']);
				}else{
					$pickfrom = '';
				}
				if(!empty($_GET['dropto'])){
					$dropto = str_replace("_"," ",$_GET['dropto']);				
				}else{
					$dropto = '';
				}
					$query1 = "SELECT users.name, offers.id, offers.offertime, offers.offerdate,
							offers.pickfrom, offers.dropto, offers.offerprice, offers.carmodel FROM users INNER JOIN offers
							ON users.id=offers.user_id WHERE pickfrom LIKE '%".$pickfrom."%' AND dropto LIKE '%".$dropto."%' AND offers.status = 'open'" ; 

					$result = mysqli_query($conn, $query1) or trigger_error(mysqli_error($conn)." ".$query1);
					$res = mysqli_num_rows($result);
					if($res >=1){
						
					}else{
						$query1 = "SELECT * FROM offers WHERE user_id = '0' LIKE '%".$pickfrom."%' AND dropto LIKE '%".$dropto."%' ORDER BY id ASC LIMIT 8;";

						$result = mysqli_query($conn, $query1) or trigger_error(mysqli_error($conn)." ".$query1);
$res = mysqli_num_rows($result);
							if($res >=1){
						
							}else{
								header('Location: norides.php?from='.$pickfrom.'&to='.$dropto);
							}
					}
				}
				?>
			</div>
	

<div>
	<h3><?php  if(isset($_GET['pickfrom'])){ echo ucfirst($_GET['pickfrom']) .' to ';}else if(isset($_POST['pickfrom'])){ echo ucfirst($_POST['pickfrom']) .' to ';}?><?php if(isset($_GET['dropto'])){ echo ucfirst($_GET['dropto']) .' oneway cabs';}else if(isset($_POST['dropto'])){ echo ucfirst($_POST['dropto']) .' oneway cabs';} ?> </h3>

	<div class=" w3-dark-grey w3-panel w3-padding w3-round">We offer oneway cabs  <?php  if(isset($_GET['pickfrom'])){ echo 'from ' . ucfirst($_GET['pickfrom']) .' to ';}else if(isset($_POST['pickfrom'])){ echo 'from ' . ucfirst($_POST['pickfrom']) .' to ';}?><?php if(isset($_GET['dropto'])){ echo ucfirst($_GET['dropto']) .' ';}else if(isset($_POST['dropto'])){ echo ucfirst($_POST['dropto']) .' ';} ?> at highly competitive	 rates.
		Get in touch with us if you do not find a suitable offer.
	
	<p>These offers change dynamically. Book immedietely to freeze the oneway drop offer.</p></div>
</div>
	
</div>


	 <div class="w3-responsive">
<table class="w3-table-all w3-small w3-card-4 ">
	<tr class="w3-amber">
		<th>Offer Number</th> 
		<th>Pickup Date</th>     
		<th>Pickup Time</th>
		<th>Pickup From</th>
		<th>Drop To</th>
		<th>Car Model</th>
		<th>Offer Price</th>
		<th></th>
	</tr>
	<tr class=' w3-text-black'>
	<?php while($details = mysqli_fetch_assoc($result)) {	
		echo "<td>".$details['id']."</td>";
	if($details['offerdate'] != 0 ){  
		            $details['offerdate'] = date('d/m/Y', strtotime($details['offerdate']));
	    echo "<td>".$details['offerdate']."</td>";
        }else{
            $offerdate = 'Pick your Date';
            echo "<td>".$offerdate."</td>";
        }
       if($details['offertime'] != 0 ){
             $details['offertime'] = date("h:ia", strtotime($details['offertime']));
	    echo "<td>".$details['offertime']."</td>";
        }else{
            $offertime = 'Pick your Time';
            echo "<td>".$offertime."</td>";
        }
	    echo "<td>".$details['pickfrom']."</td>";
	    echo "<td>".$details['dropto']."</td>";
	    echo "<td>".$details['carmodel']."</td>";
	    echo "<td>".$details['offerprice']."</td>";
	    echo "<td><a href='".str_replace(" ", "_", $details['pickfrom'])."-to-".str_replace(" ", "_", $details['dropto'])."-".$details['id']."' class='w3-btn w3-vivid-yellow'>Book Now</a></td>"; 
		echo "</tr>";
	}
?>

 
</table>
</div>

<?php 
echo "<br/>";
for($i = 1; $i <= $a; $i++){
		?> <a href ="<?php echo $i?>" class='w3-btn w3-vivid-yellow'	 style = "text-decoration:none"><?php echo $i." ";?></a><?php
	}
?>
	
</div>



<div class="w3-col l3 s12 w3-padding ">
	
	<form class="w3-container w3-small   " action="searchroutes.php" id="" method="post" >
    <label>
        Pick From</label>
        <input id="name" name="pickfrom"  class="w3-input w3-border " type="text"/ >
    
    <label>
       Drop To</label>
        <input id="phone" class="w3-input w3-border " name="dropto" type="text"/ >
    <br>
	<input type = "submit" name = "search" id= "search" value ="Search" class="w3-button  w3-vivid-yellow" >
  <br>
</form>


<?php include 'sidebar.php' ?>


</div>

</div>







<footer class="w3-container w3-padding-64 w3-grey w3-center w3-opacity w3-xxlarge" > 
  <i class="fa fa-facebook-official w3-blue w3-hover-opacity"></i>
  
  <p class="w3-medium">Powered by <a href="http://www.siteurl.in" target="_blank" class="w3-hover-text-green">SiteURL</a></p>
</footer>


</body>
</html>


