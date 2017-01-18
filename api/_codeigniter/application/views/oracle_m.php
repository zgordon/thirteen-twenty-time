<!DOCTYPE html>
<html charset="UTF-8">
<head>
<title>13:20 Destiny Oracle - 13:20 Time.net API</title>
<style>
	.oracle {width: 200px; background: #fff; font-family: Helvetica, Arial;}
		.Blue {border-color: blue}
		.Red {border-color: red}
		.Yellow {border-color: yellow}
	.oracle div {width: 45px; height: 30px; margin: 20px; position: absolute}	
		.oracle div.destiny {top: 105px; left: 112px; }
		.oracle div.analog {top: 115px; left: 185px;}
		.oracle div.guide {left: 105px; top: 10px}
		.oracle div.challenge {top: 115px; left: 15px;}		
		.oracle div.occult {top: 190px; left: 105px;}				
	.oracle div img {width: 45px;}
	.oracle div.destiny img { width: 30px;}
	.oracle div.challenge img { margin-left: 5px }
	h1,h2 {margin: 0; padding: 0; width: 30px; margin: 0; padding: 0; text-align: center; font-weight: normal; color: #777}
	h1 {font-size: 10px; margin-top: -5px}
	h2 {font-size: 12px;}
	.guide h2 {text-align: left; margin-left: 8px;}
	.sunrise {position: absolute; top: 15px; right: -30px; text-align: left}
	.sunset {position: absolute; top: 15px; left: -35px; text-align: left}
</style>
</head>
<body>
	
<div class="oracle <?= $kin->color;?>">
	<div class="analog">		
		<img src="<?= $oracle->analog_img; ?>" alt="<?= $oracle->analog; ?> Glyph - Mayan Calendar" title="<?= $oracle->analog; ?> Glyph - Mayan Calendar">
		<h2 class="sunrise">Sunrise</h2>
	</div>

	<div class="guide">
		<h2>Noon</h2>
		<img src="<?= $oracle->guide_img; ?>" alt="<?= $oracle->guide; ?> Glyph - Mayan Calendar" title="<?= $oracle->guide; ?> Glyph - Mayan Calendar">
	</div>
	
	<div class="destiny">
		<img src="<?= $oracle->destiny_img; ?>" alt="<?= $oracle->destiny; ?>" title="<?= $oracle->destiny; ?>">
		<h1>Today</h1>
	</div>

	<div class="challenge">
		<img src="<?= $oracle->challenge_img; ?>" alt="<?= $oracle->challenge; ?> Glyph - Mayan Calendar" title="<?= $oracle->challenge; ?> Glyph - Mayan Calendar">
		<h2 class="sunset">Sunset</h2>		
	</div>

	<div class="occult">
		<img src="<?= $oracle->occult_img; ?>" alt="<?= $oracle->occult; ?> Glyph - Mayan Calendar" title="<?= $oracle->occult; ?> Glyph - Mayan Calendar">
		<h2>Midnight</h2>		
	</div>	
</div>
</body>
</html>