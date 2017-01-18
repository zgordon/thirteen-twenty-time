<?
class Kin_model extends CI_Model {

function _construct()
{
    parent::_construct();		        
}


// Set $glyphImgSrc to the correct images path on the server
public  $imgPath = 'assets/images/';

public 	$gregorian,
		$glyphImgSrc,
		$image_path = 'http://1320time.net/assets/images/',
		$start_year = 10,
		$seal=9,
		$tone=10,
		$kin=49,			
		$moon_of_13=1,
		$day_of_28=1,			
		$xx = 7,
		$xy = 26,
		$moon=1,
		$mday=1,
		$wday=1,
		$week=1,
		$months = array("0","31","28","31","30","31","30","31","31","30","31","30","31"),
		$moon_days = array("0", "Dali 1","Seli 2","Gamma 3","Kali 4","Alpha 5","Limi 6",
			"Silio 7","Dali 8","Seli 9","Gamma 10","Kali 11","Alpha 12","Limi 13",
			"Silio 14","Dali 15","Seli 16","Gamma 17","Kali 18","Alpha 19","Limi 20",
			"Silio 21","Dali 22","Seli 23","Gamma 24","Kali 25","Alpha 26","Limi 27","Silio 28"),
		$weekday_names = array("Dali", "Seli", "Gamma", "Kali", "Alpha", "Limi", "Silio"),
		$tone_names = array("", "Magnetic", "Lunar", "Electric", "Self-Existing", "Overtone", 
			"Rhythmic", "Resonant", "Galactic", "Solar", "Planetary", "Spectral", 
			"Crystal", "Cosmic"),		
		$seal_names = array("Sun","Dragon","Wind","Night","Seed","Serpent",
			"Worldbridger","Hand","Star","Moon","Dog","Monkey","Human",
			"Skywalker","Wizard","Eagle","Warrior","Earth","Mirror","Storm"),
		$seal_colors = array("Yellow", "Red", "White", "Blue"),
		$poem_seal_1 = array ("Enlighten", "Nurture", "Communicate", "Dream", "Target", "Survive", 
			"Equalize", "Know", "Beautify", "Purify", "Love", "Play", "Influence", 
			"Explore", "Enchant", "Create", "Question", "Evolve", "Reflect", "Catalyse"),
		$poem_seal_2 = array ("Life", "Being", "Breath", "Intuition", "Awareness", "Instinct", 
			"Opportunity", "Healing", "Art", "Flow", "Loyalty", "Illusion", "Wisdom", 
			"Wakefullness", "Receptivity", "Mind", "Fearlessness", "Synchronicity", "Order", 
			"Energy"),
		$poem_seal_3 = array ("Matrix", "Input", "Input", "Input", "Input", "Store", "Store", 
			"Store", "Store", "Process", "Process", "Process", "Process", "Output", "Output", 
			"Output", "Output", "Matrix", "Matrix", "Matrix"),
		$poem_seal_4 = array ("Universal Fire", "Birth", "Spirit", "Abundance", "Flowering", 
			"Life Force", "Death", "Accomplishment", "Elegance", "Universal Water", 
			"Heart", "Magic", "Free Will", "Space", "Timelessness", "Vision", "Intelligence", 
			"Navigation", "Endlessness", "Self-generation"),
		$guided_by = array ("Universal Fire", "Birth", "Spirit", "Abundance", "Flowering", 
			"Life Force", "Death", "Accomplishment", "Elegance", "Universal Water", "Heart", 
			"Magic", "Free Will", "Space", "Timelessness", "Vision", "Intelligence", "Navigation", 
			"Endlessness", "Self-generation"),
		$tone_seal_1 = array ("0","Unify", "Polarize", "Activate", "Define", "Empower", 
			"Organize", "Channel", "Harmonize", "Pulse", "Perfect", "Dissolve", "Dedicate", 
			"Endure"),
		$tone_seal_2 = array ("0","Attracting", "Stabilizing", "Bonding", "Measuring", 
			"Commanding", "Balancing", "Inspiring", "Modeling", "Realizing", "Producing", 
			"Releasing", "Universalizing", "Transcending"),
		$tone_seal_3 = array ("0","Purpose", "Challenge", "Service", "Form", "Radiance", 
			"Equality", "Attunement", "Integrity", "Intention", "Manifestation", "Liberation", 
			"Cooperation", "Presence"),
		$seasons= array("2","10","30","50","55","75","95","115","120",
			"140","160","180","185","205","225","245","250"),
		$portals= array ("1","20","22","39","43","50","51","58","64",
			"69","72","77","85","88","93","96","106","107","108",
			"109","110","111","112","113","114","115","146","147",
			"148","149","150","151","152","153","154","155","165",
			"168","173","176","184","189","192","197","203","210",
			"211","218","222","239","241","260");

function get_greg($day=null,$month=null,$year=null) {
	if($day==null) { $gregorian->day = date("j"); }
	else { $gregorian->day = $day; }
	if($month==null) { $gregorian->month = date("n"); }
	else { $gregorian->month = $month; }
	if($year==null) { $gregorian->year = date("Y"); }
	else { $gregorian->year = $year; }

	$timestamp = mktime(0,0,0,$gregorian->month,$gregorian->day,$gregorian->year);
	$gregorian->day_name = date("l", $timestamp);
	$gregorian->month_name = date("F", $timestamp);

	return  $gregorian;
}

function get_moon($gregorian) {
	$this->adjust_day($gregorian);		
	$moonInfo->name = $this->tone_names[$this->moon];
	$moonInfo->number = $this->moon;
	$moonInfo->day = $this->mday;
	
	if(($this->mday != 7) && ($this->mday != 14) && ($this->mday != 21) && ($this->mday != 28)) { $this->mday = ($this->mday % 7) - 1; }
	else { $this->mday = 6; }		
	$moonInfo->weekday = $this->weekday_names[$this->mday]; 
	
	return $moonInfo;
}

function get_moon_gregorian_dates($gregorian, $moon_day) {
	// Get number of days in month
	// Subtract moon day from gregorian day
	// If day < 0 get # days in previous month
	// Subtract remaining days from previous month
	// Set month to previous month
	// This is gregorian start date
	
	// Start on gregorian start date and increase day
	// If day > days in month  reset to 1 and start in next month
	//$gregorian->month -=1;
	
	$days_in_month = cal_days_in_month(CAL_GREGORIAN, $gregorian->month, $gregorian->year);
	$gregorian_start_year = $gregorian->year;
	$gregorian_start_month = $gregorian->month;
	$gregorian_start_day = $gregorian->day - $moon_day;
	if($gregorian_start_day < 0) {
		$gregorian_start_month = $gregorian->month - 1;
		if($gregorian_start_month == 0) {
			$gregorian_start_month = 12;
			$gregorian_start_year--;
		}
		$days_in_month = cal_days_in_month(CAL_GREGORIAN, $gregorian_start_month, $gregorian_start_year);
		$gregorian_start_day = $days_in_month + $gregorian_start_day;
	};
	for($i = 1; $i <= 28; $i++) {
		$moon_days[$i][] = $gregorian_start_day;
		$moon_days[$i][] = $gregorian_start_month;
		$moon_days[$i][] = $gregorian_start_year;
		$gregorian_start_day++;
		if($gregorian_start_day > $days_in_month) {
			$gregorian_start_day = 1;
			$gregorian_start_month++;
		}
		if($gregorian_start_month > 12) {
			$gregorian_start_month = 1;
			$gregorian_start_year++;
		}
	}
	return $moon_days;

}

function get_kin($gregorian) {			
	if($gregorian->year > 2002) $this->adjust_year_up($gregorian);
	if($gregorian->year < 2002) $this->adjust_year_down($gregorian);
	if (($gregorian->month<8) || (($gregorian->month==8) && ($gregorian->day<26))) $this->adjust_moon($gregorian);
	$this->adjust_day($gregorian);				
	$kinInfo->number = $this->kin;
		$colorNumber = $this->kin % 4;
		$this->seal = $this->kin % 20;
	$kinInfo->color = $this->seal_colors[$colorNumber];		
	$kinInfo->seal_name = $this->seal_names[$this->seal];
	$kinInfo->seal_number = $this->seal;
	$kinInfo->tone_name = $this->tone_names[$this->tone];				
	$kinInfo->tone_number = $this->tone;						
	$kinInfo->name = "Kin " . $kinInfo->number . " " . $kinInfo->color . " " . $kinInfo->tone_name . " " . $kinInfo->seal_name;
	$kinInfo->image = $this->get_glyph_image($kinInfo->number);
	return $kinInfo;
}

function get_kin_info($kin_number) {
	//Seal = # % 20
	if($kin_number <= 0) $kin_number += 260;
	$kinInfo->number = $kin_number;		
	$colorNumber = $this->kin % 4;
	$kinInfo->color = $this->seal_colors[$colorNumber];	
	$kinInfo->seal_number = $kin_number % 20;
	if($kinInfo->seal_number < 0) $kinInfo->seal_number += 20;
	$kinInfo->seal_name = $this->seal_names[$kinInfo->seal_number];
	$kinInfo->tone_number = $kin_number % 13;
	if($kinInfo->tone_number <= 0) $kinInfo->tone_number += 13;
	$kinInfo->tone_name = $this->tone_names[$kinInfo->tone_number];				
	$kinInfo->name = "Kin " . $kinInfo->number . " " . $kinInfo->color . " " . $kinInfo->tone_name . " " . $kinInfo->seal_name;
	$kinInfo->image = $this->get_glyph_image($kinInfo->number);
			
	return $kinInfo;
}

/*
private function setDate() {
	$curr_date = date("j");
	$curr_month = date("n");
	$weekday = date("l");
	$month_name = date("F");
	$curr_year = date("Y");

	$user_date = $this->input->get('day');
	if($user_date != '') $curr_date = $user_date;

}
*/


private function adjust_year_up($gregorian) {
		$drop_year = $gregorian->year - 2001;
		for($count = 1; $count <= $drop_year; $count++) {
			$this->seal += 5;
			$this->kin += 105;
			$this->tone++;
			if($this->tone == 14) $this->tone = 1;
			if($this->seal >= 20) $this->seal = 4;
			if($this->kin >= 260) $this->kin -= 260;		
		}
}

private function adjust_year_down($gregorian) {
		$drop_year = 2001 - $gregorian->year;
		for($count = 1; $count <= $drop_year; $count++) {						
			$this->seal -= 5;
			$this->kin -= 105;
			if($this->kin <= 2) $this->kin += 260; 
			$this->tone--;
			if($this->tone <= 0) $this->tone = 13;
			if($this->seal <= 3) $this->seal = 19;
		}			
}

private function adjust_moon($gregorian) {
	if (($gregorian->month<8) || (($gregorian->month==8) && ($gregorian->month<26))) {	
		$this->seal -= 5;
		$this->tone -= 1;
		$this->kin -= 105;
		if($this->kin <= 2) $this->kin += 260;
		if($this->tone <= 0) $this->tone = 13;	
		if($this->seal <= 3) $this->seal = 19;
	}
}

private function adjust_day($gregorian) {
	while (($this->xx != $gregorian->month) || ($this->xy != $gregorian->day)) {
		$this->kin++;
		$this->xy++;
		$this->seal++;
		$this->tone++;
		$this->mday++;
		$this->wday++;
		if ($this->wday>7) {
			$this->wday=1;
			$this->week++;
		}
		if ($this->mday>28) {
			$this->mday=1;
			$this->moon++;
		}
		if ($this->seal==20) {
			$this->seal=0;
		}
		if ($this->tone==14) {
			$this->tone=1;
		}
		if ($this->kin==261) {
			$this->kin=1;
		}
	
		if ($this->xy > $this->months[$this->xx]) {
			$this->xx++;
			$this->xy=1;
			if ($this->xx==13) {
				$this->xx=1;
			}
		}
	}	
}	

function get_oracle($kin) {
	$oracle->analog = 19 - $kin->seal_number;
	$oracle->challenge = 10 + $kin->seal_number;		
	$oracle->occult = 21 - $kin->seal_number;	
	if(($kin->tone_number == 1) || ($kin->tone_number == 6) || ($kin->tone_number == 11)) 
	{
		$oracle->guide = $kin->seal_number;
	}
	elseif (($kin->tone_number == 2) || ($kin->tone_number == 7) || ($kin->tone_number == 12)) 
	{
		$oracle->guide = $kin->seal_number + 12;
	}		
	elseif (($kin->tone_number == 3) || ($kin->tone_number == 8) || ($kin->tone_number == 13)) 
	{
		$oracle->guide = $kin->seal_number + 4;
	}
	elseif (($kin->tone_number == 4) || ($kin->tone_number == 9)) 
	{
		$oracle->guide = $kin->seal_number - 4;
	}
	else {
		$oracle->guide = $kin->seal_number + 8;

	}
	if($oracle->analog >= 20) $oracle->analog -= 20;
	$oracle->analog_img = $this->image_path . 'seal' . $oracle->analog . '.png';
	$oracle->analog = $this->seal_names[$oracle->analog];
	
	if($oracle->challenge >= 20) $oracle->challenge -= 20;
	$oracle->challenge_img = $this->image_path . 'seal' . $oracle->challenge . '.png';
	$oracle->challenge = $this->seal_names[$oracle->challenge];
	
	if($oracle->occult >= 20) $oracle->occult -= 20;
	$oracle->occult_img = $this->image_path . 'seal' . $oracle->occult . '.png';
	$oracle->occult = $this->seal_names[$oracle->occult];

	if($oracle->guide < 0) $oracle->guide += 20;
	if($oracle->guide >= 20) $oracle->guide -= 20;		
	$oracle->guide_img = $this->image_path . 'seal' . $oracle->guide . '.png';
	$oracle->guide_number = $oracle->guide;
	$oracle->guide = $this->seal_names[$oracle->guide];
	
	$oracle->destiny_img = $this->get_glyph_image($kin->number);
	$oracle->destiny = $kin->name;
	return $oracle;				
}

function get_code_spell($kin) {
	$code_spell->season = null;
	$code_spell->portal = false;
	if((in_array($kin->number, $this->seasons)) && (($kin->number == "3" || $kin->number == "11") || ($kin->number == "4") || ($kin->number == "10"))  ) {		
		$color_number = $kin->seal_number % 4;
		$code_spell->season = $this->seal_colors[$color_number];
		$code_spell->line_seven = "I am a polar kin. I extend the " . $code_spell->season . "galactic spectrum.";
	}			
	if(in_array($kin->number, $this->portals)) {
		$code_spell->portal = true;
		$code_spell->line_six = "I am a galactic activation portal.  Enter me!";
	}				
	$code_spell->line_one = "I " . $this->tone_seal_1[$kin->tone_number] . " in order to " . $this->poem_seal_1[$kin->seal_number]. " ";
	$code_spell->line_two = $this->tone_seal_2[$kin->tone_number] . " " . $this->poem_seal_2[$kin->seal_number];
	$code_spell->line_three = "I seal the " . $this->poem_seal_3[$kin->seal_number] . " of  " . $this->poem_seal_4[$kin->seal_number];
	$code_spell->line_four = "With the " . $this->tone_names[$kin->tone_number] . " tone of " . $this->tone_seal_3[$kin->tone_number] . ".";	
	$guided_by_number = $this->get_oracle($kin);
	$guided_by_number = $guided_by_number->guide_number;

	if($guided_by_number == $kin->number) {
		$code_spell->line_five = "I am guided by my own power doubled."; 
	}
	else{
		$code_spell->line_five = "I am guided by the power of " . $this->guided_by[$guided_by_number] . "."; 
	}
	return $code_spell;
}

function get_time_matrix($moon, $day) {
	$tfi;
	$tfi->moon = $moon;
	$tfi->day = $day;
	$tfi->v = null;
	$tfi->h = null;	

	/* Moons 1 - 7 */	
	if( (($tfi->moon >= 1) && ($tfi->moon <= 7))  &&  ($tfi->day <= 7) ) {
		$tfi->h = $tfi->moon;
		$tfi->v = $tfi->day;
	}
	if( (($tfi->moon >= 1) && ($tfi->moon <= 7)) &&  (($tfi->day >= 8) && ($tfi->day <= 14) )) {
		$tfi->h = $tfi->moon;
		$tfi->v = $tfi->day + 7;
	}
	if( (($tfi->moon >= 1) && ($tfi->moon <= 7)) &&  (($tfi->day >= 15) && ($tfi->day <= 21) )) {
		$tfi->h = $tfi->moon + 14;
		$tfi->v = $tfi->day - 14;
	}
	if( (($tfi->moon >= 1) && ($tfi->moon <= 7)) &&  (($tfi->day >= 22) && ($tfi->day <= 28) )) {
		$tfi->h = $tfi->moon + 14;
		$tfi->v = $tfi->day - 7;
	}
	
	/* Moons 8 - 13 */
	if( (($tfi->moon >= 8) && ($tfi->moon <= 13))  &&  ($tfi->day <= 7) ) {
		$tfi->h = 28 - $tfi->moon;
		$tfi->v = 22 - $tfi->day;
	}
	if( (($tfi->moon >= 8) && ($tfi->moon <= 13))  &&  (($tfi->day >= 8) && ($tfi->day <= 14)) ){
		$tfi->h = 28 - $tfi->moon;
		$tfi->v = 15 - $tfi->day;
	}
	if( (($tfi->moon >= 8) && ($tfi->moon <= 13))  &&  (($tfi->day >= 15) && ($tfi->day <= 21)) ){
		$tfi->h = 14 - $tfi->moon;
		$tfi->v = 36 - $tfi->day;
	}	
	if( (($tfi->moon >= 8) && ($tfi->moon <= 13))  &&  (($tfi->day >= 22) && ($tfi->day <= 28)) ){
		$tfi->h = 14 - $tfi->moon;
		$tfi->v = 29 - $tfi->day;
	}

	return $tfi;
}
private function get_glyph_image($kin_number) {
	if ($kin_number <= 9) {
		$path = $this->image_path . 'Kin00'. $kin_number . '.png';
	}
	if ((9 < $kin_number) && ($kin_number < 100)) {
		$path = $this->image_path . 'Kin0'. $kin_number . '.png';
	}
	if (99 < $kin_number) {
		$path = $this->image_path . 'Kin'. $kin_number . '.png';
	}	
	return $path;
}


private function set_glyph_images() {
	if ($kin <= 9) {
		$glyphImgSrc = $imgPath . 'Kin00'. $kin . '.png';
	}
	if ((9 < $kin) && ($kin < 100)) {
		$glyphImgSrc = $imgPath . 'Kin0'. $kin . '.png';
	}
	if (99 < $kin) {
		$glyphImgSrc = $imgPath . 'Kin'. $kin . '.png';
	}	
}
}