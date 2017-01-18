<!DOCTYPE html>
<html>
	<head>
		<title>13 Moon 28 Day Interactive Online Calendar</title>
		<meta name="description" content="Interactive online 13 moon 28 day mayan calendar for the modern day keeper">
<style>
	body{margin: 0}
	header {width: 100%; background: rgb(0,0,0); color: white; margin: 0; float: left;}
	header p,header h1 {font-size: 14px; float: left; clear: none; margin: 5px 0; padding: 2px 10px; }
	header p.gregorian {float: right;}
	header a {color: white; }
	header a img {background: white;}
	header a:hover img {background: yellow;}	
	header img.icon {width: 20px; margin: 0 0 -5px; }
	header input#datePicker {background: #000; border: #fff; outline: none;}
	header button {margin: 0; padding: 2px 2px 0; border: 1px #fff solid; background: #fff}
	#ui-datepicker-div {background: #fff}
	
	nav {background: #ccc; float: left; height: 90%; display: none;}
	nav a img {padding: 10px;}
	nav a:hover img {background: #ededed}
	nav a.active img,
	nav a.active:hover img {background: #fff }	
	nav img {float: left; clear: left; width: 20px; display: block;}

	article.cal iframe#moonWidget {margin: 20px; float: left; border:none; border: 1px #ededed solid; width: 730px; height: 540px; overflow: hidden; border-radius: 10px; -moz-border-radius: 10px;}
	article.kin { float: left; clear: none;}
	article.kin iframe#oracleWidget {float: left; clear:  none; width: 160px; padding-left: 13px; padding-right: 7px;height: 160px; border: none; margin: 20px 0 0 20px; background: url("http://1320time.net/assets/images/sundown.png") no-repeat -5px 50%,  url("http://1320time.net/assets/images/sunrise.png") no-repeat right 50%;;}
	article.kin iframe#dailyKinWidget {float: left; clear: left; width: 210px; border: none; overflow: hidden;}
	article.kin iframe#planetHolonWidget {float: left; clear: left; width: 220px; }
	
	article.tzolkin iframe#tzolkinWidget {border: none; width: 400px; height:690px; float: left; margin-left: 10px}
	
</style>
<link href="http://1320time.net/assets/css/smoothness.css" rel="stylesheet">


<script>
	var userDate, userDay, moonWidget, moonWidgetURL, userDate = new Date(),userDay = userDate.getDate(), userMonth = userDate.getMonth() + 1, userYear = userDate.getFullYear();
</script>
</head>
<body>



<header>
<!-- 	<p class="sitename"><a href="<?= site_url('widgets/demo/') ;?>">13:20time.net</a></p> -->
	<h1><a href="<?= site_url('widgets/demo/') ;?>">13 Moon 28 Day Interactive Online Calendar</a></h1>
	<p class="gregorian">		
		<input id="datePicker" type="text" value="">
	</p>
</header>



<nav>
<a class="active" href="#"><img class="icon" src="http://1320time.net/assets/images/calendar-alt-1.png" alt="Default calendar icon"></a>
<a href="#"><img class="icon" src="http://1320time.net/assets/images/calendar-alt-1.png" alt="Default calendar icon"></a>
<a href="#"><img class="icon" src="http://1320time.net/assets/images/calendar-alt-1.png" alt="Default calendar icon"></a>
<a href="#"><img class="icon" src="http://1320time.net/assets/images/calendar-alt-1.png" alt="Default calendar icon"></a>
<a href="#"><img class="icon" src="http://1320time.net/assets/images/calendar-alt-1.png" alt="Default calendar icon"></a>
<a class="back" href="#"><img class="icon" src="http://1320time.net/assets/images/arrow-7-left_0.png" alt="Default calendar icon"></a>
</nav>

<article class="cal">

	<iframe id="moonWidget" scrolling="no" src="http://api.1320time.net/widgets/moon/"></iframe>
	<script type="text/javascript">
	moonWidget = document.getElementById('moonWidget');
	function updateMoon(){
	moonWidgetURL = 'http://api.1320time.net/widgets/moon/' + userDay + '/' + userMonth + '/' + userYear + '/';
	moonWidget.setAttribute('src', moonWidgetURL);
	}
	</script>
</article>

<article class="kin">
<iframe id="oracleWidget" scrolling="no" src="http://api.1320time.net/widgets/oracle/"></iframe>
<script type="text/javascript">
function updateOracle(){
oracleWidget = document.getElementById('oracleWidget');
oracleWidgetURL = 'http://api.1320time.net/widgets/oracle/' + userDay + '/' + userMonth + '/' + userYear + '/';
oracleWidget.setAttribute('src', oracleWidgetURL);
}
</script>
<iframe id="dailyKinWidget" scrolling="no" src="http://api.1320time.net/widgets/kin/"></iframe>
<script type="text/javascript">
dailyKinWidget = document.getElementById('dailyKinWidget');
function updateDailyKin(){
dailyKinWidgetURL = 'http://api.1320time.net/widgets/kin/' + userDay + '/' + userMonth + '/' + userYear + '/';
dailyKinWidget.setAttribute('src', dailyKinWidgetURL);
}
</script>
<iframe id="planetHolonWidget" style="border:none;" src="http://api.1320time.net/widgets/planet_holon/"></iframe>
<script type="text/javascript">
var userDate, userDay, planetHolonWidget, planetHolonWidgetURL, userDate = new Date(),userDay = userDate.getDate(), userMonth = userDate.getMonth() + 1, userYear = userDate.getFullYear();
planetHolonWidget = document.getElementById('planetHolonWidget');
planetHolonWidgetURL = 'http://api.1320time.net/widgets/planet_holon/' + userDay + '/' + userMonth + '/' + userYear + '/';
planetHolonWidget.setAttribute('src', planetHolonWidgetURL);
</script>
</article>

<article class="tzolkin">
<iframe id="tzolkinWidget" scrolling="no" src="http://api.1320time.net/widgets/tzolkin/"></iframe>
<script type="text/javascript">
var userDate, userDay, tzolkinWidget, tzolkinWidgetURL, userDate = new Date(),userDay = userDate.getDate(), userMonth = userDate.getMonth() + 1, userYear = userDate.getFullYear();
tzolkinWidget = document.getElementById('tzolkinWidget');
updateTzolkin();
function updateTzolkin(){
tzolkinWidgetURL = 'http://api.1320time.net/widgets/tzolkin/' + userDay + '/' + userMonth + '/' + userYear + '/';
tzolkinWidget.setAttribute('src', tzolkinWidgetURL);
}
</script>
</article>

		<script src="http://code.jquery.com/jquery.min.js"></script>	
		<script src="http://1320time.net/assets/js/jquery-ui-1.8.16.custom.min.js"></script>
		<script>		
			$(document).ready(function(){
					$( "#datePicker" ).datepicker({
						showOn: "button",
						buttonImage: "http://1320time.net/assets/images/calendar-alt-1.png",
						dateFormat: "dd/mm/yy"
					});
					
					$("#datePicker").change(function(){
						var newDate = $(this).val();
						var newDate = newDate.split("/");
						userDay = newDate[0];
						userMonth = newDate[1];					
						userYear = newDate[2];				
						updatePage();
					});
					
					$("#moonWidget").load(function(){					
						$(this).contents().find("a").click(function(){
							var newDate = $(this).attr("data-date")
							var newDate = newDate.split("/");
							userDay = newDate[0];
							userMonth = newDate[1];					
							userYear = newDate[2];				
							updatePage();
						});
					})
					
					$("#planetHolonWidget").load(function(){					
						$(this).contents().find("img").attr("width", 200);
					})
					
					userDay = "<?= $gregorian->day; ?>";
					userMonth = "<?= $gregorian->month; ?>";					
					userYear = "<?= $gregorian->year; ?>";					
					function updatePage() {
						updateMoon();
						updateDailyKin();
						updateTzolkin();
						updateOracle();
					}
			});
		</script>