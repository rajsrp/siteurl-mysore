<?php include 'header.php' ?>
<?php include 'config.php' ?>
<!-- Header -->
  <header class="w3-container " style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Transactions</b></h5>
  </header>

<div class="w3-responsive w3-padding w3-theme">


<div class="w3-responsive w3-padding w3-theme">
<table    class="w3-table-all w3-table-responsive w3-small">
      <thead>
        <tr class="w3-khaki">

		<th>Offer- Agent</th>
		<th>Counter- Agent </th>
		<th>Offer ID</th>
		<th>Date</th>
		<th>Deal</th>
		
 <th>Amount</th>
   </tr>
      </thead>
      <tbody>
        <tr>
		<?php
		
		$query = "SELECT * FROM transactions where status = 'closed'; ";
		
		$result = mysqli_query($conn, $query) or die("something went wrong" .mysqli_error($conn));
		
		while($users = mysqli_fetch_array($result)){

		echo "<td>".$users['offeragentname']."</td>";
	    echo "<td>".$users['counteragentname']."</td>";
		echo "<td>".$users['id']."</td>";
		echo "<td>".$users['date']."</td>"; 
		echo "<td>".$users['status']."</td>";
		echo "<td>".$users['balance']."</td>";
        echo "</tr>";
		}
	?>
              </tbody>
    

 </table>    
</div>














</div>
<?php include 'footer.php' ?>










