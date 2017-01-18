<?php include('functions.php'); ?>
<html>
<style>
	body {
		font-size: 14px;
	}
	.today {
		overflow: hidden;
		width: 210px;
	}
	#datePicker {
		margin: 0 0 5px;
	}
	.glyph {
		width: 36px;
	}
	.glyph img {
		float: left;
		width: 36px;
		margin: 0 5px 0 -5px;
	}
	h2, h1, h3, p {
		font-family: "Helvetica Neue", Helvetica, Arial;		
		font-size: 12px;
		font-weight: normal;
		margin: 0;
		padding: 0;
	}	
	h1 {
		font-weight: bold;		
	}
	h2 {
		
	}
	.code-spell {
		margin: 10px 0 0 2px;
	}
	h3, .code-spell p {
		line-height: 1.4em;
		margin: 0;
		font-size: 11px;
		color: #777;
		font-style: italic;
	}
	h3 {
		font-style: normal;
		line-height: 1em;
		color: #999;
		font-size; 10px
	}
	.ui-widget {
		font-size: .8em
	}
	#today {
		border: 1px #ccc solid;
		display: block;
		color: #777;
		width: 195px;
		padding: 4px;
		text-align: center;
		border-radius: 2px;
		background: white;		
		font-size: 10px
	}
	#today:hover {
		cursor: pointer;
		background: #eee;
	}
	#todayButton {
		margin-bottom: 10px;
	}
</style>
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.8.23/jquery-ui.min.js"></script>
<script src="jquery.validate.js"></script>
<script src="jquery.ui.datepicker.validation.min.js"></script>
<script>
$(document).ready(function() {
	var date = new Date(),
		day =  ("0" + date.getDate()).slice(-2), 
		month = ("0" + (date.getMonth() + 1)).slice(-2) , 
		year = date.getFullYear();
	
	date = year + '-' + month + '-' + day;	
	localDate =  month + '/' + day + '/' + year;	

	//$.cookie('currentDay', date);

	$('#date').datepicker({
		inline: true
	});

	currentDate = $("#date").val();

	console.log('Today:   ' + currentDate);
	console.log('Current: ' + localDate);

	show = (currentDate == localDate) ? $("#todayButton").hide() : $("#todayButton").show();



	$("#datePicker").submit(function(){
		var date = $("#date").val();
			date = date.split('/');
		var errors = new Array(),			
			m = date[0],
			d = date[1],
			y = date[2];

		console.log(m);
		console.log(d);
		console.log(y);


		console.log();

//		event.preventDefault();
//      	return false;
	})


});



</script>
<?php

	if(!$_SESSION['date']) {
		$date = date('m/d/Y');
	} else {
		$date = $_SESSION['date'];
	}

	$dateArray = explode('/', $date);
	$month = $dateArray[0];
	$day = $dateArray[1];
	$year = $dateArray[2];

	if($month == 2 && $day == 29) {
		$month == 3;
		$day == 1;
	}

	// Get the year and month conversions
	$yearNumber = get_year_number($year, $yearConversion);
	$monthNumber = $monthConversion[$month - 1];
	// Calculate the galactic signature
	$galacticSignature = $yearNumber + $monthNumber + $day;
	if($galacticSignature > 260) $galacticSignature -= 260;

	// Get kin info
	$kinNumber = $galacticSignature;
	$kin = get_kin_info($kinNumber, $sealColors, $sealNames, $toneNames, $seasons, $portals, $sealPoem1, $sealPoem2, $sealPoem3, $sealPoem4, $guidedByPoem, $tonePoem1, $tonePoem2, $tonePoem3, $dateArray, $dayNames);

?>


<div class="today">
	<form id="todayButton" action="update-widget-date.php" method="post">
		<input type="hidden" name="date" value="<?php print date('m/d/Y'); ?>">
		<input type="submit" id="today" value="Go Back to Today">		
	</form>
	<form id="datePicker" action="update-widget-date.php" method="post">
		<input type="text" id="date" name="date" value="<?php print $date; ?>">
		<input type="submit" value="Look Up">		
	</form>
	
	
	<p class="glyph">
		<img src="<?= $kin->imgUrl; ?>" alt="">		
	</p>
	<h3>Kin <?= $kin->imgNumber; ?></h3>
	<h2 class="moon">
		<?= $kin->date["moonName"]; ?>
		Moon
		<?= $kin->date["dayName"]; ?>
		<?= $kin->date["dayNumber"]; ?>
	</h2>
	<h1 class="kin">		
		<?= $kin->color; ?>
		<?= $kin->toneName; ?>
		<?= $kin->sealName; ?>
	</h1>
	<div class="code-spell">
		<p><?= $kin->codeSpell->line1; ?></p>
		<p><?= $kin->codeSpell->line2; ?></p>
		<p><?= $kin->codeSpell->line3; ?></p>
		<p><?= $kin->codeSpell->line4; ?></p>
		<p><?= $kin->codeSpell->line5; ?></p>
		<p><?= $kin->codeSpell->line6; ?></p>
	</div>
</div>
</html>