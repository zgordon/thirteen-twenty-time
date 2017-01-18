<?php include("../assets/includes/functions.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mayan Calendar API</title>
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
	<body class="<?php print $glyphImgSrc; ?>">
		<div class="today <?php print $seal_color[$seal]; ?>">
			<div class="icons">
				<img src="../<?php print $glyphImgSrc; ?>" id="glyph">
			</div>
			<h2>
				<?php print $moons[$moon]; ?>
				<?php print $moon_days[$mday]; ?>
			</h2>
			<h1>
				Kin <?php print $kin; ?>
				<?php print $seal_color[$seal]; ?>
				<?php print $gal_tones[$tone]; ?>
				<?php print $sol_seals[$seal]; ?>
			</h1>
			<div class="codespell">
				<p>I <?php print $tone_seal_1[$tone]; ?> in order to <?php print $poem_seal_1[$seal]; ?></p>
				<p><?php print $tone_seal_2[$tone]; ?> <?php print $poem_seal_2[$seal]; ?></p>					
				<p>I seal the <?php print $poem_seal_3[$seal]; ?> of <?php print $poem_seal_4[$seal]; ?></p>	
				<p>With the <?php print $gal_tones[$tone]; ?> tone of <?php print $tone_seal_3[$tone]; ?></p>
				
			<?php 			
			if(($tone==1) || ($tone==6) || ($tone==11)) {
				print '<p>I am guided by my own power doubled.</p>';
			} else { 								
				if(($tone==2) || ($tone==7) || ($tone==12)) {
					$guide=$seal+12; 
					if($guide >= 20) $guide-=20;					
				} 
				elseif(($tone==3) || ($tone==8) || ($tone==13)) {
					$guide=$seal+4; 
					if($guide >= 20) $guide-=20;					
				} 								
				elseif(($tone==5) || ($tone==10)) {
					$guide=$seal+8; 
					if ($guide >= 20) $guide-=20;
				}
				else {
					$guide=$seal-4; 
					if ($guide < 0) $guide+=20;					
				}
				print 	'<p class="guided">I am guided by the power of ' .
						$guided_by[$guide] .
						'</p>';										
			}
			?>
			
			<?php if((in_array($kin, $season)) && (($kin == "3" || $kin == "11") || ($kin == "4") || ($kin == "10"))  ): ?>
				<p>I am a polar kin. I extend the <?php print $color[$seal]; ?> galactic spectrum.</p>
			<?php endif;?>
			
			<?php if(in_array($kin, $portals)): ?>
				<p>I am a galactic activation portal. Enter me.</p>
			<?php endif; ?>															
			</div>
			<p class="gregorian">
				<?php print 	$curr_month . "." . $curr_date . "." . $curr_year; ?>						
			</p>
		</div>
	</body>
</html>