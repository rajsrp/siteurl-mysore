<?php include 'header.php' ?>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <script type="text/javascript" src="http://code.jquery.com/jquery-compat-git.js"></script>


</head>
<body>
<form method = "POST" action = "addcity.php">
 <div class="input_fields_wrap">
 <br>
    <button class="add_field_button w3-blue w3-button">Add A City</button><br/>
	
    <div><!--<input type="text" name="mytext[]">--></div>
	<!--<br/>-->
	 <!--  <button class="add_field">Add</button> -->
</div>
</form>
<script type='text/javascript'>
$(document).ready(function() {
    var max_fields      = 5; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed            
            $(wrapper).append('<div><br/><input type="text" name="mytext[]" /><a href="#" class="remove_field">Remove</a></div>'); //add input box
			x++; //text box increment
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});


</script>
</body>
<?php include 'footer.php' ?>