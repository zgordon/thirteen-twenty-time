<?php include('../functions.php'); ?>
<?php		
	$kinNumber = get_galactic_signature($GLOBALS[dateArray]);	
	$kin = get_kin_object($kinNumber);	
?>
<!DOCTYPE html> 
<html> 
<head> 
	<title>Galactic Signature</title> 
	
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

		<p class="glyph">
			<img src="<?php print $kin['imgUrl']; ?>" alt="">		
		</p>		
		<h1 class="kin">		
			<?php print $kin['color']; ?>
			<?php print $kin['toneName']; ?>
			<?php print $kin['sealName']; ?>
		</h1>
		<div class="code-spell">
			<p><?php print $kin['codeSpell']['line1']; ?></p>
			<p><?php print $kin['codeSpell']['line2']; ?></p>
			<p><?php print $kin['codeSpell']['line3']; ?></p>
			<p><?php print $kin['codeSpell']['line4']; ?></p>
			<p><?php print $kin['codeSpell']['line5']; ?></p>
			<p><?php print $kin['codeSpell']['line6']; ?></p>
		</div>

		<pre>
			<?php //var_dump($kin); ?>
		</pre>

	</div><!-- /content -->
	
	<pre>
		<?php //var_dump($kinInMoon); ?>
	</pre>

	
</div><!-- /page -->

</body>
</html>