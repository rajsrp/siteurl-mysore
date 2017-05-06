<?php 
    session_start();
    $usertype = $_SESSION['usertype'];
    if(!isset($_SESSION['username']) && $role!="agent"){
	header('Location: login.php?err=2');
    }
?>
<?php include 'header1.php'; ?>


<h2>Welcome <strong><?php echo $_SESSION['username'];?></strong> </h2>














<?php include 'footer1.php'; ?>

