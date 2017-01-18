var	today 			= new Object();
	today.gregDate 	= moment();
var	selectedDay		= new Object();
var	moon  			= new Object();
	moon.dates 		= new Array();

// Test dates
// var startDate		= today.gregDate;
// today.gregYear 	= 2013;
// today.gregMonth	= 5;
// today.gregDay 	= 30;

var	daysBetween,
	pathToImages = "http://api.1320time.net/assets/images/";

today.init 	= function() {

	today.setup_new_kin();

	moon.get_kin_for_moon();
	moon.get_dates_for_moon();
	moon.create_moon_table_rows();

	$(".next-moon").click(function(){

		moon.get_next_moon();
		today.setup_new_kin();
		moon.get_kin_for_moon();
		moon.get_dates_for_moon();
		moon.create_moon_table_rows();
		return false;

		//get_future_date(today.gregDate, -today.day);

	});


	$(".prev-moon").click(function(){

		moon.get_prev_moon();
		today.setup_new_kin();
		moon.get_kin_for_moon();
		moon.get_dates_for_moon();
		moon.create_moon_table_rows();
		return false;

		//get_future_date(today.gregDate, -today.day);

	});

	$(".to-today").click(function(){

		today.gregDate = moment();
		today.setup_new_kin();
		moon.get_kin_for_moon();
		moon.get_dates_for_moon();
		moon.create_moon_table_rows();
		return false;

		//get_future_date(today.gregDate, -today.day);

	});

};


//

/*
	moon.methods
*/

//

moon.get_next_moon = function() {

	var daysAway = 29 - today.day;
	today.gregDate.add('days', daysAway);

}

moon.get_prev_moon = function() {

	var daysAway = 29 - today.day;
	today.gregDate.subtract('days', daysAway);

}

moon.get_kin_for_moon = function() {

	var days = new Array();

	var currentKinNumber = today.kinNumber - today.day + 1;
	var prevKinNumber = currentKinNumber;

	days.push(currentKinNumber);

	for( i = 1; i < 28; i ++ ) {
		currentKinNumber = prevKinNumber + 1;
		if ( currentKinNumber < 1 ) currentKinNumber += 260;
		if ( currentKinNumber > 260 ) currentKinNumber -= 260;
		days.push(currentKinNumber);
		prevKinNumber = currentKinNumber;
	}

	moon.days = days;

}

moon.get_dates_for_moon = function() {

	var dates = new Array();

	var currentDate = moment(today.gregDate);
	var previousDate = moment();
	var nextDate = moment();

	currentDate.subtract('days', today.day);

	for (var i = 0; i < 28; i++) {
		currentDate.add('days', 1);
		// Test if leap year
		//if(currentDate.format("MM/DD") != "02/29");
		dates.push(moment(currentDate));
	};

	moon.dates = dates;

}

moon.create_moon_table_rows = function() {

	var day1 			= new Object();
		day1.gregDate 	= new Date();
		day1.tempDate 	= new Date();

	day1.gregDate.setDate( today.gregDate - today.day );

	day1.gregYear 	= day1.gregDate.getFullYear();
	day1.gregMonth 	= day1.gregDate.getMonth() + 1;
	day1.gregDay 	= day1.gregDate.getDate();

	$('td').removeClass('active');
	$('td span.kin-number, td img.seal-and-tone, td .gregorian').remove();
	$('td').each( function(index) {
		//var imgPath = pathToImages;
		$(this).append(
			'<img class="seal-and-tone" src="' +
			get_kin_image_url(moon.days[index]) +
			'.png" alt = "Kin Seal and Tone">' +
			'<span class="kin-number">Kin ' +
			moon.days[index] +
			'</span>'
		);
		$(this).append(
			'<span class="gregorian">G//' +
			moon.dates[index].format("YYYY/MM/DD") +
			'</span>'
		);
		if(today.kinNumber == moon.days[index]) {
			console.log( today.kinNumber );
			console.log( moon.days[index] );
			var containsString = 'td .kin-number:contains(' + today.kinNumber + ')';
			$(containsString).parent().addClass("active");
		}
	});



}

//

/*
	functions
*/

//

function get_kin_image_url( kinNumber ) {

	var kinNumberPrefix = "Kin",
		kinImageURL;

	// if(	kinNumber.toString().length < 2 ) {
	// 	kinNumberPrefix += "00";
	// } else if ( kinNumber.toString().length < 3 ) {
	// 	kinNumberPrefix += "0";
	// } else {
	// 	kinNumberPrefix += "";
	// }

	kinImageURL = pathToImages + kinNumberPrefix + kinNumber;
	return kinImageURL;

}

function days_between(day1, day2) {

	return Math.round( Math.abs( (day1.getTime() - day2.getTime()) / (24*60*60*1000) ) );

}

function get_future_date(startDate, daysAway) {

	var targetDate = new Date();
	targetDate.setDate(targetDate.getDate() + daysAway);
}

function var_dump(obj) {
    var out = '';
    for (var i in obj) {
        out += i + ": " + obj[i] + "\n";
    }


}

Date.prototype.addDays = function(days) {
    var dat = new Date(this.valueOf())
    dat.setDate(dat.getDate() + days);
    return dat;
}

function getDates(startDate, stopDate) {
    var dateArray = new Array();
    var currentDate = startDate;
    while (currentDate <= stopDate) {
        dateArray.push( new Date (currentDate) )
        currentDate = currentDate.addDays(1);
    }
    return dateArray;
}

//

/*
	today.methods
*/

//

today.get_kin_number = function() {

	today.monthNumber = monthConversion[today.gregMonth - 1];
	today.kinNumber = today.gregYearNumber + today.monthNumber + today.gregDay;
	if ( today.kinNumber > 260 ) today.kinNumber -= 260;
}

today.get_thirteen_moon_date = function() {

	today.moon = Math.floor(today.daysFromDOOT / 28) + 1;
	today.day = today.daysFromDOOT % 28;

}

today.setup_new_kin = function() {

	today.set_date_format();
	today.get_days_from_doot();
	today.get_thirteen_moon_date();
	today.get_year_conversion();
	today.get_kin_number();

}

today.set_date_format = function() {
	today.gregYear 	= parseFloat(today.gregDate.format("YYYY"));
	today.gregMonth = parseFloat(today.gregDate.format("MM"));
	today.gregDay 	= parseFloat(today.gregDate.format("DD"));
}

today.get_year_conversion = function() {

	yearConversion.forEach(function(yearArray){
		if( $.inArray(today.gregYear, yearArray) > -1 )  {
			today.gregYearNumber = yearArray[0];
		}
	});

};

today.is_leap_year = function() {

	if(today.gregMonth == 2 && today.gregDay == 29) {
		return true;
	} else {
		return false;
	}

}

today.get_days_from_doot = function() {

	var currentDate = moment(today.gregDate);
	var dayOutofTimeString = today.gregYear + ",7,25";
	var dayOutofTime = moment(dayOutofTimeString);

	if(today.gregDate.format("MM") < 7 || (today.gregMonth == 7 && today.gregDay < 25)) {
		dayOutofTimeString = today.gregYear - 1 + ",7,25";
		dayOutofTime = moment(dayOutofTimeString);
	}

	today.daysFromDOOT = currentDate.diff(dayOutofTime, 'days');

	if(today.gregMonth == 7 && today.gregDay == 25) {
		today.daysFromDOOT = 0;
	}

}


/*
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

*/
