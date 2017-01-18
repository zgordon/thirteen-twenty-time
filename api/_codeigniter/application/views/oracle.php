<!DOCTYPE html>
<html charset="UTF-8">
<head>
<title>13:20 Destiny Oracle - 13:20 Time.net API</title>
<style>
	.oracle {width: 140px; height: 140px;}
		.Blue {border-color: blue}
		.Red {border-color: red}
		.Yellow {border-color: yellow}
	.oracle div {width: 30px; height: 30px; margin: 20px; position: absolute}
		.oracle div.destiny {top: 30px; left: 35px;}
		.oracle div.analog {top: 45px; left: 80px;}
		.oracle div.guide {top: 0; left: 40px;}
		.oracle div.challenge {top: 45px; left: 0;}		
		.oracle div.occult {top: 85px; left: 40px;}				
	.oracle div img {width: 30px;}
	.oracle div.destiny img { width: 40px;}
</style>
</head>
<body>
	
<div class="oracle <?= $kin->color;?>">
	<div class="analog">		
		<img src="<?= $oracle->analog_img; ?>" alt="<?= $oracle->analog; ?> Glyph - Mayan Calendar" title="<?= $oracle->analog; ?> Glyph - Mayan Calendar">
	</div>

	<div class="guide">
		<img src="<?= $oracle->guide_img; ?>" alt="<?= $oracle->guide; ?> Glyph - Mayan Calendar" title="<?= $oracle->guide; ?> Glyph - Mayan Calendar">
	</div>
	
	<div class="destiny">
		<img src="<?= $oracle->destiny_img; ?>" alt="<?= $oracle->destiny; ?>" title="<?= $oracle->destiny; ?>">
	</div>

	<div class="challenge">
		<img src="<?= $oracle->challenge_img; ?>" alt="<?= $oracle->challenge; ?> Glyph - Mayan Calendar" title="<?= $oracle->challenge; ?> Glyph - Mayan Calendar">
	</div>

	<div class="occult">
		<img src="<?= $oracle->occult_img; ?>" alt="<?= $oracle->occult; ?> Glyph - Mayan Calendar" title="<?= $oracle->occult; ?> Glyph - Mayan Calendar">
	</div>	
</div>
</body>
</html>