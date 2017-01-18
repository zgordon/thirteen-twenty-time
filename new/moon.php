<?php include('functions.php'); ?>
<?php	

	// Get kin info
	$kinNumber = get_galactic_signature($GLOBALS[dateArray]);	
	$kin = get_kin_object($kinNumber);	
	$kinInMoon = get_kin_in_moon($kinNumber, $kin['date']['dayNumber']);	
	//print json_encode($kin);		

?>
<!DOCTYPE html>
<html>
<head>
	<title>13 Moon 28 Day Mayan Calendar</title>
	<style>
		table {
			border-collapse: collapse;
			border: 4px #ccc double;
			width: 100%;			
		}
		th, td {
			border: 1px #000 solid;			
		}
		.portal {
			background: green
		}
		.today {
			background: blue
		}
		table img {

		}
	</style>
<body>
<h1><?php print $kin['date']['moonName']; ?> Moon</h1>
<h2><?php print $kin['date']['dayName'] . ' ' . $kin['date']['dayNumber']; ?></h2>

<p>
	get_moon_kin() <?php get_kin_in_moon($kin['number'], $kin['date']['dayNumber']); ?>
</p>
<table>
	<thead>
		<tr>
		<?php foreach ($GLOBALS['dayNames'] as $day): ?>
			<th><?php print $day; ?></th>	
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
				<ul>
					<li class="kin-number"><?php print $kinInMoon[$i]['number'] ?></li>
					<li class="kin-img"><img src="<?php print $kinInMoon[$i]['imgUrl']; ?>" alt="Solar Seal for Kin <?php print $kinInMoon[$i]['number']; ?>"></li>
					<li class="kin-name">
						<?php print $kinInMoon[$i]['toneName'] ?>
						<?php print $kinInMoon[$i]['sealName'] ?>

					</li>
				</ul>					
			</td>
		<?php if(($i % 7) == 6): ?>
		</tr>
		<?php endif; ?>
		<?php endfor; ?>
	</tbody>
</table>

<?php 
	print '<br><pre>';
	var_dump($kin);
	print '</pre>';
 ?>
</body>