<!DOCTYPE html> 
<html> 
	<head> 
	<title>13:20 Watches //G<?php echo date('n'); ?></title>
	<?php include('includes/header.php'); ?></head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>Moon //G<?php echo date('n'); ?></h1>
	</div><!-- /header -->

	<div data-role="content">	
		<iframe id="moonWidget" style="border:none; width: 100%; background: white" src="http://api.1320time.net/widgets/moon_mobile/"></iframe>
		<script type="text/javascript">
		var userDate, userDay, moonWidget, moonWidgetURL, userDate = new Date(),userDay = userDate.getDate(), userMonth = userDate.getMonth() + 1, userYear = userDate.getFullYear();
		moonWidget = document.getElementById('moonWidget');
		moonWidgetURL = 'http://api.1320time.net/widgets/moon_mobile/' + userDay + '/' + userMonth + '/' + userYear + '/';
		moonWidget.setAttribute('src', moonWidgetURL);
		</script>
	</div><!-- /content -->


<?php include('includes/footer.php'); ?>