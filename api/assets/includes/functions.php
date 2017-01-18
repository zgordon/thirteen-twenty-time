<?php

$portals= array ("1","20","22","39","43","50","51","58","64","69","72","77","85","88","93","96","106","107","108","109","110","111","112","113","114","115","146","147","148","149","150","151","152","153","154","155","165","168","173","176","184","189","192","197","203","210","211","218","222","239","241","260");

$season= array("2","10","30","50","55","75","95","115","120","140","160","180","185","205","225","245","250");


$moons = array("errorincode", "Magnetic Moon", "Lunar Moon", "Electric Moon", "Self-Existing Moon", "Overtone Moon", "Rhythmic Moon", "Resonant Moon", "Galactic Moon", "Solar Moon", "Planetary Moon", "Spectral Moon", "Crystal Moon", "Cosmic Moon");

$moon_days = array("0", "Dali 1","Seli 2","Gamma 3","Kali 4","Alpha 5","Limi 6","Silio 7","Dali 8","Seli 9","Gamma 10","Kali 11","Alpha 12","Limi 13","Silio 14","Dali 15","Seli 16","Gamma 17","Kali 18","Alpha 19","Limi 20","Silio 21","Dali 22","Seli 23","Gamma 24","Kali 25","Alpha 26","Limi 27","Silio 28");

$months = array("0","31","28","31","30","31","30","31","31","30","31","30","31");

$sol_seals = array("Sun","Dragon","Wind","Night","Seed","Serpent","Worldbridger","Hand","Star","Moon","Dog","Monkey","Human","Skywalker","Wizard","Eagle","Warrior","Earth","Mirror","Storm");

$seal_color = array("Yellow","Red","White","Blue","Yellow","Red","White","Blue","Yellow","Red","White","Blue","Yellow","Red","White","Blue","Yellow","Red","White","Blue");

$gal_tones = array("errorincode","Magnetic","Lunar","Electric","Self-Existing","Overtone","Rhythmic","Resonant","Galactic","Solar","Planetary","Spectral","Crystal","Cosmic");
	
$poem_seal_1 = array ("Enlighten", "Nurture", "Communicate", "Dream", "Target", "Survive", "Equalize", "Know", "Beautify", "Purify", "Love", "Play", "Influence", "Explore", "Enchant", "Create", "Question", "Evolve", "Reflect", "Catalyse");

$poem_seal_2 = array ("Life", "Being", "Breath", "Intuition", "Awareness", "Instinct", "Opportunity", "Healing", "Art", "Flow", "Loyalty", "Illusion", "Wisdom", "Wakefullness", "Receptivity", "Mind", "Fearlessness", "Synchronicity", "Order", "Energy");

$poem_seal_3 = array ("Matrix", "Input", "Input", "Input", "Input", "Store", "Store", "Store", "Store", "Process", "Process", "Process", "Process", "Output", "Output", "Output", "Output", "Matrix", "Matrix", "Matrix");

$poem_seal_4 = array ("Universal Fire", "Birth", "Spirit", "Abundance", "Flowering", "Life Force", "Death", "Accomplishment", "Elegance", "Universal Water", "Heart", "Magic", "Free Will", "Space", "Timelessness", "Vision", "Intelligence", "Navigation", "Endlessness", "Self-generation");

$guided_by = array ("Universal Fire", "Birth", "Spirit", "Abundance", "Flowering", "Life Force", "Death", "Accomplishment", "Elegance", "Universal Water", "Heart", "Magic", "Free Will", "Space", "Timelessness", "Vision", "Intelligence", "Navigation", "Endlessness", "Self-generation");

$tone_seal_1 = array ("0","Unify", "Polarize", "Activate", "Define", "Empower", "Organize", "Channel", "Harmonize", "Pulse", "Perfect", "Dissolve", "Dedicate", "Endure");

$tone_seal_2 = array ("0","Attracting", "Stabilizing", "Bonding", "Measuring", "Commanding", "Balancing", "Inspiring", "Modeling", "Realizing", "Producing", "Releasing", "Universalizing", "Transcending");

$tone_seal_3 = array ("0","Purpose", "Challenge", "Service", "Form", "Radiance", "Equality", "Attunement", "Integrity", "Intention", "Manifestation", "Liberation", "Cooperation", "Presence");
	
	
	$start_year = 10;
	$seal=9;
	$tone=10;
	$kin=49;
	
	$moon_of_13=1;
	$day_of_28=1;

	$curr_date = date("j");
	$check_for_date = isset( $_GET['day'] ) ? $user_date = $_GET['day'] : $user_date = '' ;
	//$user_date = $_GET['day'];
	if($user_date != '') $curr_date = $user_date;
	$curr_month = date("n");
	$weekday = date("l");
	$month_name = date("F");
	$curr_year = date("Y");


	$xx = 7;
	$xy = 26;
	$moon=1;
	$mday=1;
	$wday=1;
	$week=1;

if($curr_year > 2002) {
	$drop_year = $curr_year - 2002;
	for($count = 1; $count <= $drop_year; $count++) {
		$seal += 5;
		$kin += 105;
		$tone++;
		if($tone == 14) $tone = 1;
		if($seal >= 20) $seal = 4;
		if($kin >= 260) $kin -= 260;		
	}
}

if (($curr_month<8) || (($curr_month==8) && ($curr_date<26))) {	
	$seal -= 5;
	$tone -= 1;
	$kin -= 105;
	if($kin <= 2) $kin += 260;
	if($tone <= 0) $tone = 13;	
	if($seal <= 3) $seal = 19;
}

//print $curr_month . "- xx: " . $xx . " - xy: " . $xy;
while (($xx != $curr_month) || ($xy != $curr_date)) {
	$kin++;
	$xy++;
	$seal++;
	$tone++;
	$mday++;
	$wday++;
	if ($wday>7) {
		$wday=1;
		$week++;
	}
	if ($mday>28) {
		$mday=1;
		$moon++;
	}
	if ($seal==20) {
		$seal=0;
	}
	if ($tone==14) {
		$tone=1;
	}
	if ($kin==261) {
		$kin=1;
	}

	if ($xy > $months[$xx]) {
		$xx++;
		$xy=1;
		if ($xx==13) {
			$xx=1;
		}
	}
}

if ($kin <= 9) {
	$glyphImgSrc = 'assets/images/Kin00'. $kin . '.png';
}
if ((9 < $kin) && ($kin < 100)) {
	$glyphImgSrc = 'assets/images/Kin0'. $kin . '.png';
}
if (99 < $kin) {
	$glyphImgSrc = 'assets/images/Kin'. $kin . '.png';
}

?>