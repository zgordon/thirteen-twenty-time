<?php

	$moon_num = $_GET['moon'];
	$day_num = $_GET['day'];	

	$tfi;


	$tfi['moon'] = $moon_num;
	$tfi['day'] = $day_num;
	$tfi['v'] = null;
	$tfi['h'] = null;	

	/* Moons 1 - 7 */	
	if( (($tfi['moon'] >= 1) && ($tfi['moon'] <= 7))  &&  ($tfi['day'] <= 7) ) {
		$tfi['h'] = $tfi['moon'];
		$tfi['v'] = $tfi['day'];
	}
	if( (($tfi['moon'] >= 1) && ($tfi['moon'] <= 7)) &&  (($tfi['day'] >= 8) && ($tfi['day'] <= 14) )) {
		$tfi['h'] = $tfi['moon'];
		$tfi['v'] = $tfi['day'] + 7;
	}
	if( (($tfi['moon'] >= 1) && ($tfi['moon'] <= 7)) &&  (($tfi['day'] >= 15) && ($tfi['day'] <= 21) )) {
		$tfi['h'] = $tfi['moon'] + 14;
		$tfi['v'] = $tfi['day'] - 14;
	}
	if( (($tfi['moon'] >= 1) && ($tfi['moon'] <= 7)) &&  (($tfi['day'] >= 22) && ($tfi['day'] <= 28) )) {
		$tfi['h'] = $tfi['moon'] + 14;
		$tfi['v'] = $tfi['day'] - 7;
	}
	
	/* Moons 8 - 13 */
	if( (($tfi['moon'] >= 8) && ($tfi['moon'] <= 13))  &&  ($tfi['day'] <= 7) ) {
		$tfi['h'] = 30 - $tfi['moon'];
		$tfi['v'] = 22 - $tfi['day'];
	}
	if( (($tfi['moon'] >= 8) && ($tfi['moon'] <= 13))  &&  (($tfi['day'] >= 8) && ($tfi['day'] <= 14)) ){
		$tfi['h'] = 30 - $tfi['moon'];
		$tfi['v'] = 15 - $tfi['day'];
	}
	if( (($tfi['moon'] >= 8) && ($tfi['moon'] <= 13))  &&  (($tfi['day'] >= 15) && ($tfi['day'] <= 21)) ){
		$tfi['h'] = 16 - $tfi['moon'];
		$tfi['v'] = 36 - $tfi['day'];
	}	
	if( (($tfi['moon'] >= 8) && ($tfi['moon'] <= 13))  &&  (($tfi['day'] >= 22) && ($tfi['day'] <= 28)) ){
		$tfi['h'] = 16 - $tfi['moon'];
		$tfi['v'] = 29 - $tfi['day'];
	}
	
	print '<p>' . $tfi['moon'] . '.' . $tfi['day'] . '</p>';	
	print '<p>V' . $tfi['v'].  ",H" . ($tfi['h'] - 1 ). '</p>';	


?>