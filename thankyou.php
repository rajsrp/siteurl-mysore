<?php
include('config.php');
$s = "SELECT id, phone FROM settings ORDER BY id DESC LIMIT 1";
$r = mysqli_query($conn, $s);
$rs = mysqli_fetch_assoc($r);
$contactno = $rs['phone']; 
?>
<!DOCTYPE html>
<html>
<title>Cab Oneway</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">-->
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-vivid.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
 <script src="myScript.js"></script>
<body class="w3-theme">



<!-- Header -->
<header class="w3-container w3-bar w3-dark-grey  w3-padding " id="myHeader">
<a href="http://caboneway.com/" class="w3-bar-item w3-top w3-left w3-button "><img src="images/logo.png"  width="160px"></a>
<div class="w3-right">
<a href="#" class="w3-button w3-bar-item w3-border w3-text-yellow w3-border-yellow w3-round"> <?php if(isset($contactno)){echo $contactno;}?><i class="fa fa-phone"></i> </a> &nbsp;
  </div>
 
</header>


<div class="w3-container  w3-padding">
<br><br>
<div class="w3-col l8 s12 w3-padding">
<--Content Here-->>


	
</div>



<div class="w3-col l4 s12 w3-padding">
<div class="w3-container ">

<?php include 'sidebar.php' ?>
</div>

</div>

</div>

<footer class="w3-container w3-padding-64 w3-grey w3-center w3-opacity w3-xxlarge" > 
  <i class="fa fa-facebook-official w3-blue w3-hover-opacity"></i>
  
  <p class="w3-medium">Powered by <a href="http://www.siteurl.in" target="_blank" class="w3-hover-text-green">SiteURL</a></p>
</footer>


</body>
</html>


