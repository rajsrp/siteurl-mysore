
<?php include 'header.php' ?>
<?php include 'config.php' ?>

<!-- Header -->
  <header class="w3-container " style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Counters</b></h5>
  </header>

<div class="w3-responsive w3-padding w3-theme">

<table class="w3-table-all w3-table-responsive w3-small">

<thead>
	<tr class="w3-dark-grey">
		<th>Offer ID</th>
		<th>Agent Name</th>
		<td>Date</td>
		<td>Time</td>
		<td>From</td>
		<td>To</td>
		<td>Deviate From</td>
		<td>Deviate To</td>
		<td>Offer</td>
	</tr>
</thead>
<tbody>
	<tr>
<?php
include ('offerdetails.php');
	for($i = 0; $i <= count($json3)-1; $i++){
		echo "<td>".$json3[$i]['id']."</td>";
		echo "<td>".$json3[$i]['name']."</td>";
		echo "<td>".$json3[$i]['offerdate']."</td>";
		echo "<td>".$json3[$i]['offertime']."</td>";
		echo "<td>".$json3[$i]['pickfrom']."</td>";
		echo "<td>".$json3[$i]['dropto']."</td>";
		echo "<td>".$json3[$i]['deviatefromdistance']."</td>";
		echo "<td>".$json3[$i]['deviatetodistance']."</td>";
		echo "<td>".$json3[$i]['offerprice']."</td>";
		echo "</tr>";
	}
?>
</tbody>
</table>    
</div>
<div class="w3-responsive w3-padding w3-theme">
<table    class="w3-table-all w3-table-responsive w3-small">
      <thead>
    <tr class="w3-khaki">

   
    <th>offer ID</th>
    <th>Counter ID</th>
    <th>Agent Name</th>
	<td>Date</td>
	<td>Counter</td>
	<td>Counter Status</td>
	<td>Offer Status</td> 
	<td>Deal</td>
   </tr>
      </thead>
	<tbody>
	    <tr>
<?php
include('showcounters.php');
if($errorvalue == 2){
	
}
else if(count($json)>=1){
for($i = 0; $i <= count($json)-1; $i++){		
		echo "<td>".$json[$i]['offerid']."</td>";
		echo "<td>".$json[$i]['id']."</td>";
		echo "<td>".$json[$i]['name']."</td>";
		echo "<td>".$json[$i]['counterdatetime']."</td>";
		echo "<td>".$json[$i]['counterprice']."</td>";
		echo "<td><button class='w3-btn w3-light-green'>".$json[$i]['status']."</button></td>";
		echo "<td><button class='w3-btn w3-orange'>".$json[$i]['offerstatus']."</button></td> ";
		echo "<td><button class='w3-btn w3-black'>".$json[$i]['dealstatus']."</button></td>"; 
        echo "</tr>";
	}
}
?>       
	</tbody>
   </table>    
</div>










<?php include 'footer.php' ?>










