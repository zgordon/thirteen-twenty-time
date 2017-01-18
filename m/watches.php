<!DOCTYPE html> 
<html> 
	<head> 
	<title>13:20 Time Mobile Site</title> 
	<?php include('includes/header.php'); ?>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>Watches //G<?php echo date('n/j'); ?></h1>
	</div><!-- /header -->

	<div data-role="content">	
		<iframe id="oracleWidget" style="border:none" src="http://1320time.net/api/index.php/widgets/oracle_mobile/"></iframe>
		<script type="text/javascript">
		var userDate, userDay, dailyKinWidget, dailyKinWidgetURL, userDate = new Date(),userDay = userDate.getDate(), userMonth = userDate.getMonth() + 1, userYear = userDate.getFullYear();
		oracleWidget = document.getElementById('oracleWidget');
		oracleWidgetURL = 'http://1320time.net/api/index.php/widgets/oracle_mobile/' + userDay + '/' + userMonth + '/' + userYear + '/';
		oracleWidget.setAttribute('src', oracleWidgetURL);
		</script>
	</div><!-- /content -->


<?php include('includes/footer.php'); ?>