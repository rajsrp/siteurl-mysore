<?php include 'header.php' ?>
<header class="w3-container " style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Add Fixed Offer</b></h5>
 </header>
 <div>
  <?php 

                                $errors = array(
                                    1=>"Offer has been added successfully.",
                                    2=>"Please fill in all the details."
                                  );

                                $error_id = isset($_GET['message']) ? (int)$_GET['message'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }
                               ?>  
 </div>

<div class="w3-container w3-padding">
  
 <div class="w3-half w3-small">
 
<form class="w3-container" method="POST" action = "fixeddeal.php" >

<label  class="w3-label" for="pickfrom">Pick From:</label>
<input type="text" name="pickfrom" id="pickfrom" class="w3-input w3-border" required>

 <label for="dropto" class="w3-label ">Drop To:</label>
<input type="text" name="dropto" id="dropto" class="w3-input w3-border" required>

<label for="cartype" class="w3-label  ">Car Type:</label>
<input type="text" name="cartype" id="cartype" class="w3-input w3-border" >

<label for="carmodel" class="w3-label  ">Car Model:</label>
<input type="text" name="carmodel" id="carmodel" class="w3-input w3-border">

<label for="noofseats" class="w3-label  ">No of seats:</label>
<input type="text" name="noofseats" id="noofseats" class="w3-input w3-border">

<label for="price" class="w3-label  ">Price:</label>
<input type="text" name="price" id="price" class="w3-input w3-border" required>
<br>
<input type="submit" name="submit" class="w3-btn w3-amber w3-card-8" value="Submit">
</div> 
</form>
</div>
<?php include 'footer.php' ?>