<!DOCTYPE html>
<html>
	<head>
		<title>13:20 Mayan Calendar Kin Picker</title>
		<style>	
			body {margin: 0; padding: 0; font-family: "Helvetica Neue", Helvetica, Arial;}	
			.today {width: 220px; /* border: 1px #ccc solid; */ position: relative; float: left; clear: both; display: block; padding: 5px 0;}			
			.icons {float: left; width: 45px; }
			.icons img {display: block; float: left; clear: both; margin-left: -5px}
			.today h1 {font-size: 14px;  margin:0; color: #444;}
			.today h2 {font-size: 12px;  color: #666; font-weight: normal; margin: 14px 0 0 0; padding: 0;}
		</style>		
	</head>
	<body title="<?= $kin->name;?>">
		<div class="today <?= $kin->color; ?>">
			<div class="icons">
				<img src="<?= $kin->image; ?>" id="glyph">
			</div>
			<h2>Kin <?= $kin->number; ?></h2>
			<h1>
				<?= $kin->tone_name; ?> <?= $kin->seal_name; ?>
			</h1>
