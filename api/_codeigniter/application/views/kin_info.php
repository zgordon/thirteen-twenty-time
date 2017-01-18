<!DOCTYPE html>
<html>
	<head>
		<title>13:20 Mayan Calendar Kin Picker</title>
		<style>	
			body {margin: 0; padding: 0; font-family: "Helvetica Neue", Helvetica, Arial;}	
			.today {width: 220px; /* border: 1px #ccc solid; */ position: relative; float: left; clear: both; display: block; padding: 5px 0;}			
			.icons {float: left; width: 36px; margin-right: 4px;}
			.icons img {display: block; float: left; clear: both; width: 36px;}
			.today h1 {font-size: 12px;  margin:0; color: #444;}
			.today h2 {font-size: 12px;  color: #666; font-weight: normal; margin: 8px 0 0 0; padding: 0;}
			.today p.gregorian {font-size: 10px; color: #ccc; position: absolute; right: 5px; top: 1px; display: none;}
			.codespell {float: right; clear: both; width: 180px; margin-top: 5px}
			.codespell p {line-height: 1.4em; margin: 0; font-size: 11px; color: #666; font-style: italic;}
			.codespell p.guided {margin: 10px 0; line-height: 1.2em}
			.rounded {
				-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;
				-webkit-box-shadow: 1px 2px 2px 0px #ccc;
				-moz-box-shadow: 1px 2px 2px 0px #ccc;
				box-shadow: 1px 2px 2px 0px #ccc;
				}
		</style>		
	</head>
	<body title="<?= $kin->name;?>">
		<div class="today <?= $kin->color; ?>">
			<div class="icons">
				<img src="<?= $kin->image; ?>" id="glyph">
			</div>
			<h2>
			<?php if(isset($moon)): ?>
				<?= $moon->name; ?> Moon <?= $moon->weekday; ?> <?= $moon->day; ?>
			<?php else: ?>
			 	&nbsp;
			<?php endif; ?>				
			</h2>
			<h1>
				<?= $kin->name; ?>
			</h1>
			<div class="codespell">
