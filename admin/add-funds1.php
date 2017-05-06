<?php
session_start();

$id = $_SESSION['id'];
$username = $_SESSION['username'];

?>

<?php include 'header1.php'; ?>
<?php include 'config.php'; ?>
<?php
	
		
		$balance = isset($_POST['balance']) ? mysqli_real_escape_string($conn, $_POST['balance']) :  "";
		
		$date = isset($_POST['date']) ? mysqli_real_escape_string($conn, $_POST['date']) :  "";
		
		$description = isset($_POST['description']) ? mysqli_real_escape_string($conn, $_POST['description']) :  "";
		$user_id = isset($_POST['user_id']) ? mysqli_real_escape_string($conn, $_POST['user_id']) :  "";
		
 $query = "UPDATE `transactions` SET  balance='$balance', date='CONVERT(VARCHAR(11),GETDATE(),106)', description='$description' WHERE user_id='".$_SESSION['id']."';";
$result = mysqli_query($conn, $query) or die("could not update " .mysqli_error($conn));
?>



<div class="w3-row">
<div class="w3-half w3-container"> 
<h2>Add Funds</h2>
 <form class="w3-container w3-responsive" method="post" action="add-funds1.php">

        <label class="w3-label"  for="day">Payment Type</label>
        <select  class="w3-select"  name="payment" id="payment">
          <option value="">Credit Card</option>
          <option value="">Netbanking Transfer</option>
          <option value="">Netbanking</option>
          
        </select>

<p> <label class="w3-label"  for="amount">Amount Rs:</label>
 <input class="w3-input w3-border  w3-animate-input" type="text" name="balance" id="amount">
</p>
 <label class="w3-label"  for="date">Date:</label>
 <input class="w3-input w3-border w3-animate-input" type="date" name="date" id="date">

<label class="w3-label" for="paymentdesc">Paymentdesc:</label>
 <input class="w3-input w3-border w3-animate-input"   type="text" name="description" id="paymentdesc">
<br>

<input  class="w3-btn w3-amber"  type="submit"  name = "submit" value="Add Fund">

<br><br>

</form>
</div>

<div class="w3-half">
<p></p>
</div>
</div>













<?php include 'footer1.php'; ?>

