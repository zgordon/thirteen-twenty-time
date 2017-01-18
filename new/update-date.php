<?php 	
	include('functions.php');	
	$_SESSION['date'] = $_POST['date']; // store session data	
	//print $_SESSION['date'];
	header("Location: http://1320time.net/new/");
?>