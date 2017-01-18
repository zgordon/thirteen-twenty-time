<?php include('../functions.php'); ?>
<?php	
	$kinNumber = get_galactic_signature($GLOBALS[dateArray]);	
	$kin = get_kin_object($kinNumber);	
	$kinInMoon = get_kin_in_moon($kinNumber, $kin['date']['dayNumber']);		
?>
<!DOCTYPE html> 
<html> 
<head> 
	<title>13 Moon 28 Day Mayan Calendar</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" href="mobile.css">
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 

<body> 

<div data-role="page">

	<div data-role="header">
		<h1><?php print $kin['date']['moonName']; ?> Moon, <?php print $kin['date']['dayName'] . ' ' . $kin['date']['dayNumber']; ?></h1>
	</div><!-- /header -->

	<div data-role="content">			


		<table>
			<thead>
				<tr>
				<?php foreach ($GLOBALS['dayNames'] as $day): ?>					
					<th>
						<img src="/assets/images/plasma<?php print $day; ?>.png" alt="Solar Seal <?php print $day; ?>">
						<?php print $day; ?>
					</a>					
				<?php endforeach; ?>
				</tr>
			</thead>
			<tbody>	
				<?php for($i=0;$i<28;$i++): ?>		
				<?php if(($i % 7) == 0): ?>
				<tr>
				<?php endif; ?>					
					<td class="
						<?php if($kinInMoon[$i]['number'] == $kinNumber) print 'today'; ?> 
						<?php if($kinInMoon[$i]['codeSpell']['portal'] == true) print 'portal'; ?>
					"
					>
					<a data-transition="" data-rel="dialog" href="kin.php?kin=<?php print $kinInMoon[$i]['number']; ?>">
						<ul>
							<li class="kin-number"><?php print $kinInMoon[$i]['number'] ?></li>
							<li class="kin-img"><img src="<?php print $kinInMoon[$i]['imgUrl']; ?>" alt="Solar Seal for Kin <?php print $kinInMoon[$i]['number']; ?>"></li>
							<li class="kin-name">
								<?php print $kinInMoon[$i]['toneName'] ?><br>
								<?php print $kinInMoon[$i]['sealName'] ?>

							</li>
						</ul>					
					</a>						
					</td>					
				<?php if(($i % 7) == 6): ?>
				</tr>
				<?php endif; ?>
				<?php endfor; ?>
			</tbody>
		</table>

	</div><!-- /content -->
	
	<pre>
		<?php //var_dump($kinInMoon); ?>
	</pre>

	<div data-role="footer">
		<h4>Footer content</h4>
	</div><!-- /footer -->
	
</div><!-- /page -->

</body>
</html>