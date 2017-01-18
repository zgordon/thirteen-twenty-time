<?php include('../functions.php'); ?>
<?php		
	$kinNumber = get_galactic_signature($GLOBALS[dateArray]);	
	$kin = get_kin_object($kinNumber);	
	$kinName = 	$kin['color'] . ' ' .
				$kin['toneName'] . ' ' . 
				$kin['sealName'];
?>
<!DOCTYPE html> 
<html> 
<head> 
	<title>Daily Watch</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" href="mobile.css">
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 

<body> 

<div data-role="page">	
	<div data-role="header">
		<h1>
			Kin <?php print $kin['imgNumber']; ?>
		</h1>	
	</div><!-- /header -->

	<div data-role="content">		
	
		<div class="oracle-watch">
			<section class="kin">
				<img src="<?php print $kin['imgUrl']; ?>">
			</section>		
			<section class="analog">
				<img src="/assets/images/seal<?php print $kin['oracle']['analog']; ?>.png">
				<p>Analog<br><strong>Sunrise</strong></p>
			</section>		
			<section class="guide">
				<img src="/assets/images/seal<?php print $kin['oracle']['guide']; ?>.png">
				<p>Guide<br><strong>Zenith</strong></p>
			</section>				
			<section class="challenge">
				<img src="/assets/images/seal<?php print $kin['oracle']['challenge']; ?>.png">
				<p>Challenge<br><strong>Sunset</strong></p>
			</section>					
			<section class="occult">
				<img src="/assets/images/seal<?php print $kin['oracle']['occult']; ?>.png">
				<p>Occult<br><strong>Nadir</strong></p>
			</section>		
		</div>
		<pre>
			<?php //var_dump($kin); ?>
		</pre>

	</div><!-- /content -->
	
	
</div><!-- /page -->

</body>
</html>