<?php
session_start();
    $usertype = $_SESSION['usertype'];
    if(!isset($_SESSION['username']) && $role!="agent"){
	header('Location: index.php?err=2');
    }
?>
<?php include 'header1.php'; ?>
<?php include 'config.php'; ?>
<?php


if(isset($_POST['submit']))
{
	$id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) :  "";
  
	$amount = isset($_POST['amount']) ? mysqli_real_escape_string($conn, $_POST['amount']) :  "";

	$query = "UPDATE `counters` SET counterprice = '$amount' WHERE offerid = '$id';";
	
	$result = mysqli_query($conn,$query) or die("could not update " .mysqli_error($conn)); 
	
	header('Location: view-offers.php');
}

?>


<div class="w3-row w3-padding">
<div class="w3-third">
<div class="w3-container w3-orange ">
<h3>Quote</h3>
</div>

<form class="w3-container w3-border" action="quote.php" method="post">

<p>    
<input type='hidden' name='id'  id='id'  value= "<?php echo $_GET['id'];?>" class='w3-input w3-border'>
  
<label class="w3-label w3-text-brown"><b>Amount</b></label>
<input class="w3-input w3-border w3-sand" name="amount" type="text"></p>


<p>

<button class="w3-btn w3-brown" name ="submit" >Quote</button></p>
</form><br />

</div>

</div>







<?php include 'footer1.php'; ?>

