<!DOCTYPE html> 
<html> 
	<head> 
	<title>13:20 Time Mobile Site</title> 
	<?php include('includes/header.php'); ?>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>Tzolkin //G<?php echo date('n/j'); ?></h1>
	</div><!-- /header -->

	<div data-role="content">	
		<iframe id="tzolkinWidget" style="border:none;" src="http://api.1320time.net/widgets/tzolkin_mobile/"></iframe>
		<script type="text/javascript">
		var userDate, userDay, tzolkinWidget, tzolkinWidgetURL, userDate = new Date(),userDay = userDate.getDate(), userMonth = userDate.getMonth() + 1, userYear = userDate.getFullYear();
		tzolkinWidget = document.getElementById('tzolkinWidget');
		tzolkinWidgetURL = 'http://api.1320time.net/widgets/tzolkin_mobile/' + userDay + '/' + userMonth + '/' + userYear + '/';
		tzolkinWidget.setAttribute('src', tzolkinWidgetURL);
		</script>
	</div><!-- /content -->


<?php include('includes/footer.php'); ?>