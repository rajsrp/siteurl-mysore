<?php include 'header.php' ?>

<?php

include('showoffers.php');
?>
  
<!-- Header -->
  <header class="w3-container " style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Offers</b></h5>
  </header>
  
  
  
  
<div class="w3-row-padding w3-small">
    <div class="w3-quarter">
      <div class="w3-container w3-card-8 w3-round w3-red ">
        <div class="w3-left"><i class="fa fa-comment "></i></div>
        <div class="w3-right ">
          <h5>52</h5>
        </div>
        
        <h5>Section1</h5>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-card-8 w3-round w3-blue ">
        <div class="w3-left"><i class="fa fa-eye "></i></div>
        <div class="w3-right">
          <h5>99</h5>
        </div>
      
        <h5>Section2</h5>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container  w3-card-8 w3-round w3-teal ">
        <div class="w3-left"><i class="fa fa-share-alt"></i></div>
        <div class="w3-right">
          <h5>23</h5>
        </div>
       
        <h5>Section3</h5>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-card-8 w3-round w3-text-white">
        <div class="w3-left"><i class="fa fa-users "></i></div>
        <div class="w3-right">
          <h5>50</h5>
        </div>
       
        <h5>Section4</h5>
      </div>
    </div>
  </div>
<div class="w3-container w3-section">
    <div class="w3-row-padding" style="margin:0 -16px">


<div class="w3-row">
<div class="w3-third w3-padding">
 <label for="search">Search</label>
    <input type="search" name="search" id="search" class="w3-input w3-animate-input w3-border " style="width:50%" placeholder="Name or Agency.. ">
  </div>
</div>
</div>
<br>
<div class="w3-responsive  w3-theme">
<table    class="w3-table-all w3-table-responsive w3-small">
      <thead>
        <tr class="w3-khaki">
  
<th >Delete </th>
<th>Suspend </th>

          <th>ID</th>
          <th>CustomerName</th>
	<td>Date</td>
<td>Time</td>
<td>From</td>
<td>To</td>
<td>Deviate From</td>
<td>Deviate To</td>
<td>Offer</td>
 <td>Show Counters</td>
   </tr>
      </thead>
      <tbody>
        <tr>
<?php
for($i = 0; $i <= count($json)-1; $i++){
 
echo "<td><a href='deleteoffer.php?id=".$json[$i]['id']."' class='w3-btn w3-red'>Delete</a></td>";
echo "<td><a href='suspendoffer.php?id=".$json[$i]['id']."' class='w3-btn w3-blue-grey'>Suspend</a></td>";

	echo "<td>".$json[$i]['id']."</td>";
	echo "<td>".$json[$i]['name']."</td>";
	echo "<td>".$json[$i]['offerdate']."</td>";
	echo "<td>".$json[$i]['offertime']."</td>";
	echo "<td>".$json[$i]['pickfrom']."</td>";
	echo "<td>".$json[$i]['dropto']."</td>";
	echo "<td>".$json[$i]['deviatefromdistance']."</td>";
	echo "<td>".$json[$i]['deviatetodistance']."</td>";
	echo "<td>".$json[$i]['offerprice']."</td>";
	echo "<td><a href='show-counters.php?offerid=".$json[$i]['id']."&name=".$json[$i]['name']."' class='w3-btn w3-blue'>Show Counters</a></td>";
	echo "</tr>";
	}
?>
        </tr>
        
      </tbody>
   
 <tbody>
 
        </tr>
        
      </tbody>

 </table>    
</div>
<?php include 'footer.php' ?>
