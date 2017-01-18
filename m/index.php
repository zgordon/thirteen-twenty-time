<!DOCTYPE html> 
<html> 
	<head> 
	<title>13:20 Time Mobile Site</title> 
	<?php include('includes/header.php'); ?>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>13:20 //G<?php echo date('n/j'); ?></h1>
	</div><!-- /header -->

	<div data-role="content">	
		<iframe id="dailyKinWidget" style="border:none" src="http://1320time.net/api/index.php/widgets/kin_mobile/"></iframe>
		<script type="text/javascript">
		var userDate, userDay, dailyKinWidget, dailyKinWidgetURL, userDate = new Date(),userDay = userDate.getDate(), userMonth = userDate.getMonth() + 1, userYear = userDate.getFullYear();
		dailyKinWidget = document.getElementById('dailyKinWidget');
		dailyKinWidgetURL = 'http://1320time.net/api/index.php/widgets/kin_mobile/' + userDay + '/' + userMonth + '/' + userYear + '/';
		dailyKinWidget.setAttribute('src', dailyKinWidgetURL);
		</script>
	</div><!-- /content -->


<?php include('includes/footer.php'); ?>