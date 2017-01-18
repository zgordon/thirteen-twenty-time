<?php 
session_start(); 
include('data.php');

function arrayRecursiveSearch($needle, $haystack, $path=""){
  if(!is_array($haystack)){
    die("second argument is not array");
  }
  
  global $matches;
  
  foreach($haystack as $key=>$value)
  {  	  	
    if(preg_match("/$needle/i", $key)){
	  $matches[] = array($path . "$key/", "KEY: $key");
	}
	
	if(is_array($value)){
	  $path .= "$key/";
	  arrayRecursiveSearch($needle, $value, $path);
	  unset($path);
	}else{
	  if(preg_match("/$needle/i", $value)){
	    $matches[] = array($path . "$key/", "VALUE: $value");
	  }
	}
  }
  
  return $matches;
}

$dateArray = get_date_array();

function get_year_number($year) {
	// Get array of path to year	
	$results = arrayRecursiveSearch($year,$GLOBALS['yearConversion'],"");
	// Get the path to the year number
	$pathArray =  explode('/',$results[0][0]);
	// Get the year number for the date
	$yearNumber = $GLOBALS['yearConversion'][$pathArray[0]][0];	
	return $yearNumber;
}
function get_date_array() {
	if(isset($_GET['m'])) $m = $_GET['m'];
	if(isset($_GET['d'])) $d = $_GET['d'];
	if(isset($_GET['y'])) $y = $_GET['y'];		
	
	if(!isset($m) || !isset($d) || !isset($y)) {
		$date = date('m/d/Y');
	} else {
		$date = "$m/$d/$y";
	}

	$dateArray = explode('/', $date);		
	return $dateArray;
}
function get_galactic_signature() {

	if($GLOBALS['dateArray'][0] == 2 && $GLOBALS['dateArray'][1] == 29) {
		$GLOBALS['dateArray'][0] = 3;
		$GLOBALS['dateArray'][1] = 1;
	}		

	$yearNumber = get_year_number($GLOBALS['dateArray'][2]);	
	$monthNumber = $GLOBALS['monthConversion'][$GLOBALS['dateArray'][0] - 1];	

	$galacticSignature = $yearNumber + $monthNumber + $GLOBALS['dateArray'][1];
	if($galacticSignature > 260) $galacticSignature -= 260;	

	return $galacticSignature;
}	
function get_seal_number($kinNumber) {
	return $kinNumber % 20;
}
function get_seal_name($sealNumber) {					
	return $GLOBALS['sealNames'][$sealNumber];
}
function get_kin_color($kinNumber) {
	$colorNumber = $kinNumber % 4;
	return $GLOBALS['sealColors'][$colorNumber];
}
function get_tone_number($kinNumber) {
	return $kinNumber % 13;
}
function get_tone_name($toneNumber) {	
	return $GLOBALS['toneNames'][$toneNumber];
}



function get_kin_object($kinNumber) {	
	$kin['leapYear'] = check_if_leap_year($GLOBALS['dateArray'][2]);
	$kin['leapDay'] = check_if_leap_day($GLOBALS['dateArray'][0], $GLOBALS['dateArray'][1]);
	$kin['daysFromDOOT'] = get_days_from_doot($GLOBALS['dateArray']);
	$kin_date["moonNumber"] = get_moon_number($kin['daysFromDOOT'], $kin['leapDay']);	
	$kin_date["moonName"] = $GLOBALS['toneNames'][$kin_date['moonNumber'] - 1];	
	$kin_date["dayNumber"] = get_day_number($kin['daysFromDOOT'], $kin['leapDay']);
	$dayOfWeekNumber = $kin_date["dayNumber"] % 7;
	$kin_date["dayName"] = get_day_name($dayOfWeekNumber);
	$kin['date'] = $kin_date;

	if($kin['leapDay'] == true) {
		$kinNumber = 0;
	}	
	$kin['number'] = $kinNumber;
	if($kin['number'] < 10) {
		$kin['imgNumber'] = '00' . $kin['number'];
	} elseif(9 < $kin['number'] && $kin['number'] < 100) {
		$kin['imgNumber'] = '0' . $kin['number'];
	} else {
		$kin['imgNumber'] = $kin['number'];
	}	
	$kin['imgUrl'] = 'http://1320time.net/assets/images/Kin' . $kin["imgNumber"] . '.png';
	$kin['color'] = get_kin_color($kin['number']);
	$kin['toneNumber'] = get_tone_number($kin['number']);
	if($kin['toneNumber'] == 0) $kin['toneNumber'] = 13;
	$kin['toneName'] = get_tone_name($kin['toneNumber'] - 1, $toneNames);
	$kin['sealNumber'] = get_seal_number($kin['number']);
	$kin['sealName'] = get_seal_name($kin['sealNumber']);
	$kin['oracle'] = get_oracle($kin);		
	$kin['codeSpell'] = get_code_spell($kin);	
	

	return $kin;
}

function get_oracle($kin) {
	$oracle;
	$oracle['analog'] = (19 - $kin['sealNumber']) % 20;
	$oracle['challenge'] = (10 + $kin['sealNumber']) % 20;		
	$oracle['occult'] = (21 - $kin['sealNumber']) % 20;	

	if(($kin['toneNumber'] == 1) || ($kin['toneNumber'] == 6) || ($kin['toneNumber'] == 11)) {
		$oracle['guide'] = $kin['sealNumber'];
	} elseif (($kin['toneNumber'] == 2) || ($kin['toneNumber'] == 7) || ($kin['toneNumber'] == 12)) {
		$oracle['guide'] = $kin['sealNumber'] + 12;
	} elseif (($kin['toneNumber'] == 3) || ($kin['toneNumber'] == 8) || ($kin['toneNumber'] == 13)) {
		$oracle['guide'] = $kin['sealNumber'] + 4;
	} elseif (($kin['toneNumber'] == 4) || ($kin['toneNumber'] == 9)) {
		$oracle['guide'] = $kin['sealNumber'] - 4;
	} else {
		$oracle['guide'] = $kin['sealNumber'] + 8;
	}
	if($oracle['guide'] < 20)$oracle['guide'] = $oracle['guide'] + 20; ;
	if($oracle['guide'] > 20)$oracle['guide'] = $oracle['guide'] - 20; ;
	$oracle['guide'] = $oracle['guide'] % 20;
/*	
	if($oracle->analog >= 20) $oracle->analog -= 20;
	//$oracle->analog_img = $imgPath . 'seal' . $oracle->analog . '.png';
	$oracle->analog = $sealNames[$oracle->analog];
	
	if($oracle->challenge >= 20) $oracle->challenge -= 20;
	//$oracle->challenge_img = $imgPath . 'seal' . $oracle->challenge . '.png';
	$oracle->challenge = $sealNames[$oracle->challenge];
	
	if($oracle->occult >= 20) $oracle->occult -= 20;
	//$oracle->occult_img = $imgPath . 'seal' . $oracle->occult . '.png';
	$oracle->occult = $sealNames[$oracle->occult];

	if($oracle->guide < 0) $oracle->guide += 20;
	if($oracle->guide >= 20) $oracle->guide -= 20;		
	//$oracle->guide_img = $imgPath . 'seal' . $oracle->guide . '.png';
	$oracle->guide_number = $oracle->guide;
	$oracle->guide = $sealNames[$oracle->guide];
	
	//$oracle->destiny_img = get_glyph_image($kin->number);
	$oracle->destiny = $kin->name;
*/
	return $oracle;				
}

function get_code_spell($kin) {		
	$codeSpell['season'] = null;
	$codeSpell['portal'] = false;
	$codeSpell['line1'] = "I " . $GLOBALS['tonePoem1'][$kin['toneNumber']] . " in order to " . $GLOBALS['sealPoem1'][$kin['sealNumber']]. " ";
	$codeSpell['line2'] = $GLOBALS['tonePoem2'][$kin['toneNumber']] . " " . $GLOBALS['sealPoem2'][$kin['sealNumber']];
	$codeSpell['line3'] = "I seal the " . $GLOBALS['sealPoem3'][$kin['sealNumber']] . " of  " . $GLOBALS['sealPoem4'][$kin['sealNumber']];
	$codeSpell['line4'] = "With the " . $kin['toneName'] . " tone of " . $GLOBALS['tonePoem3'][$kin['toneNumber']] . ".";		
	$oracle = get_oracle($kin);		
	if($oracle['guide'] == $kin['number']) {
		$codeSpell['line5'] = "I am guided by my own power doubled."; 
	}
	else{		
		$codeSpell['line5'] = "I am guided by the power of " . $GLOBALS['guidedByPoem'][$oracle['guide']] . "."; 
	}
	if((in_array($kin['number'], $GLOBALS['seasons'])) && (($kin['number'] == "3" || $kin['number'] == "11") || ($kin['number'] == "4") || ($kin['number'] == "10"))  ) {				
		$codeSpell['season'] = $kin['color'];
		$codeSpell['line7'] = "I am a polar kin. I extend the " . $codeSpell['season'] . "galactic spectrum.";
	}			
	if(in_array($kin['number'], $GLOBALS['portals'])) {
		$codeSpell['portal'] = true;
		$codeSpell['line6'] = "I am a Galactic Activation Portal.  Enter me!";
	}					
	return $codeSpell;
}

function get_days_from_doot() {
	
	$dateMonth = $GLOBALS['dateArray'][0];
	$dateDay = $GLOBALS['dateArray'][1];
	$dateYear = $GLOBALS['dateArray'][2];
	

	if($dateMonth <= 7 && $dateDay < 25) {
		$dootDateYear = $dateYear - 1;	
	} else {
		$dootDateYear = $dateYear;
	}
	
	$dootDate = $dootDateYear . '-07-25';
	$currentDay = $dateYear . '-' . $dateMonth . '-' . $dateDay;

	$date1 = new DateTime($dootDate);
	$date2 = new DateTime($currentDay);
	//$interval = $date1->diff($date2);
	//$daysFromDOOT = $interval->format('%a');	
	$interval = round(abs($date2->format('U') - $date1->format('U')) / (60*60*24));
	$daysFromDOOT = $interval;


	return $daysFromDOOT;
	
}

function get_moon_number($daysFromDOOT, $leapDay) {	
	if($leapDay == false) {		
		$moon = $daysFromDOOT / 28;				
	} else {
		$moon = 0;
	}

	return ceil($moon);
}

function get_day_number($daysFromDOOT, $leapDay) {
	if($leapDay == false) {		
		$day = $daysFromDOOT % 28;				
	} else {
		$day = 1;
	}	
	if($day == 0) $day = 28;
	return ceil($day);
}

function get_day_name($dayOfWeekNumber) {	
	if ($dayOfWeekNumber == 0) $dayOfWeekNumber = 7;
	return $GLOBALS['dayNames'][$dayOfWeekNumber - 1];
}

function check_if_leap_year($year) {
	$leapYear = false;
	if($year % 4 == 0) $leapYear = true;
	if(($year % 1000 == 0) && ($year % 400 == 0)) $leapYear = true;
	if(($year % 1000 == 0) && ($year % 400 != 0)) $leapYear = false;
	return $leapYear;	
}

function check_if_leap_day($month, $day) {
	$leapDay = false;
	if($month == 2 && $day == 29) $leapDay = true;
	return $leapDay;
}

function get_kin_in_moon($kinNumber, $dayNumber) {


	$firstKin = $kinNumber - $dayNumber + 1;

	if($firstKin <= 0) $firstKin = 260 + $firstKin;

	//print $kinNumber . ' ' . $firstKin;

	for ($i=0; $i<28; $i++) {
		$kinInMoon[$i] = get_kin_object($firstKin);
		$firstKin++;	
		if($firstKin > 260)	$firstKin = 1;
	}
	
	return $kinInMoon;		

}

?>