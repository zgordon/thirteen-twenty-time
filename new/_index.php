<?php include('functions.php'); ?>
<?php	

	// Get kin info
	$kinNumber = get_galactic_signature($GLOBALS[dateArray]);
	$kin = get_kin_object($kinNumber);	
	print json_encode($kin);	

?>

<?php 

	// print '<pre>';
	// print_r($kin);
	// print '</pre>';	

?>