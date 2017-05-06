<!DOCTYPE html>
<html>
<head>
<title>One Way Taxi</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />

<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; //class name in css 
  } 
}
?>

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

.active {
background-color: #FFC107;

}


</style>




<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
  <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  
<span class="w3-right"><img src="car.svg" height="24px" width=""></span>
</div>

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-dark-grey w3-animate-left " style="z-index:3;width:200px;height:800px;" id="mySidenav"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="img_avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 ">
      <span>Welcome, <strong></strong></span><br>
      <a href="#" class="w3-hover-none w3-hover-text-red w3-show-inline-block"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-hover-none w3-hover-text-green w3-show-inline-block"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-hover-none w3-hover-text-blue w3-show-inline-block"><i class="fa fa-cog"></i></a>
    </div>
  </div>
<hr>
  <div class="w3-container">
    <strong>Dashboard</strong>
  </div>

  <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black " onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
   <a href="manage-users.php" class="w3-padding  w3-small  <?php active('manage-users.php');?>"><i class="fa fa-users fa-fw"></i>  Manage Agents</a>
  <a href="add-user.php" class="w3-padding w3-small  <?php active('add-user.php');?>"><i class="fa fa-eye fa-fw"></i>  Add Agent</a>

  <a href='addfixeddeals.php' class="w3-padding w3-small  <?php active('addfixeddeals.php');?>"><i class="fa fa-eye fa-fw"></i>  

Add Fixed Deals</a>
  <a href="addfixeddeals.php" class="w3-padding w3-small  <?php active('addfixeddeals.php');?>"><i class="fa fa-eye fa-fw"></i>  Add City</a>
  
  
  <a href="show-offers.php" class="w3-padding w3-small <?php active('show-offers.php');?>"><i class="fa fa-diamond fa-fw"></i>  Show Offers</a>
  <!--<a href="add-offer.php" class="w3-padding w3-small <?php active('add-offer.php');?>"><i class="fa fa-bell fa-fw"></i>  Add Offer</a>
  <a href="add-counter.php" class="w3-padding w3-small <?php active('add-counter.php');?>"><i class="fa fa-bank fa-fw"></i>  Add Counter</a>-->
  
  <!--<a href="requote.php" class="w3-padding w3-small <?php active('requote.php"');?>"><i class="fa fa-cog fa-fw"></i>  Requote</a>-->
  <a href="transactions.php" class="w3-padding w3-small <?php active('transactions.php');?>"><i class="fa fa-history fa-fw"></i>  Transactions</a>
  <a href="settings.php" class="w3-padding w3-small <?php active('settings.php');?>"><i class="fa fa-cog fa-fw"></i>  Settings </a>
</nav>


<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:200px;margin-top:43px; ">

  
