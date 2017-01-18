<html>
	<head>
		<title>28 day Moon - 13 Moon 28 Calendar of Synchronicity</title>
		<style>
			body {font-family: Helvetica, Arial, san-serif}
			#wrapper {width: 720px; margin: 0 auto;}
			h1 {font-size: 18px; font-weight: normal; width: 800px; text-align: center;}
			table {}
			tr {display: block; float: left; clear: both; border-radius: 10px; -moz-border-radius: 10px; margin: 2px 0; padding: 0 5px }			
			th {width: 95px; font-weight: normal; padding: 0; margin: 0;border: 1px #fff solid; font-size: 13px}
			td {float: left; clear: none;position: relative; border: 1px #ccc solid; width: 90px; padding: 10px 0 0; margin: 3px; border-radius: 10px; -moz-border-radius: 10px; background: #fff}
			td:hover, td:active { border-color: #888}
			th img {display: block; margin: 5px auto; width: 28px;}			
			td img {display: block; width: 35px; height: 42px; margin: 10px 0 10px 10px;}
			td a img {border-radius: 10px; -moz-border-radius: 10px; padding: 2px 4px;}
			td a:hover img, td a:active img {background: #ededed}
			tr.one {background: #f3b7bd;}
/* 				tr.one span.gregorian {background:#fcd1d4;} */
			tr.two {background: #ededed;}
/* 				tr.two span.gregorian {background:#ededed;}			 */
			tr.three {background: #e0e9fd;}
/* 				tr.three span.gregorian {background:#e0e9fd;}							 */
			tr.four {background: #fdfba1;}
/* 				tr.four span.gregorian {background:#fdfba1;}		 */
			tr td.active {border: 1px #777 solid; background:#d5ffd4 ;}
			tr td.active:hover {border-color: black;}
			td span.day {display: block;float:left; width: 14px;  background: #f7931c; color: #222; padding: 5px; font-size: 11px;-webkit-border: 14px;-moz-border-radius: 14px;border-radius: 14px; text-align: center; margin: -5px 0 0 5px;}
			td span.gregorian {display: block; clear: both; text-align: center; font-size: 11px; padding: 3px 0 2px; margin-bottom: 0; }
/* 			tr td.active span.gregorian {background: #84f085;} */
			iframe {border: 1px #ccc solid;}
			iframe#dailyKinWidget {height: 200px; width: 220px; float:  left; clear: none;}
			iframe#oracleWidget {width: 160px; height: 160px; float: right; clear: both; margin-left: 20px: }
			img#glyph {display: none;}
		</style>
		<link href="http://1320time.net/assets/css/reveal.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery.min.js"></script>	
		<script src="http://1320time.net/assets/js/jquery.reveal.js"></script>	
		<script>		
			$(document).ready(function(){
				var el,img, gregorian, gregorianDay, gregorianMonth, gregorianEl, currerntDay, currentMonth, startingGregorianDay;
				
/*
				gregorianDay = "<?= $gregorian->day; ?>";
				gregorianMonth = "<?= $gregorian->month; ?>";				
				gregorianDate = "<?php print $gregorian->day . '.' . $gregorian->month; ?>";				
				gregorianEl = '<span class="gregorian">' + gregorianDate + '</span>';				
*/
				
				<?php for($i = 1; $i <= 28; $i++): ?>
					<?php $current_kin = $moon_kin[$i]; ?>
					el = 'td[data-day="<?= $i;?>"]';
					gregorianDateFull = "<? print $moon_gregorian_days[$i][0] . "/" . $moon_gregorian_days[$i][1] . "/" . $moon_gregorian_days[$i][2]; ?>";
					gregorianDateShort = "<? print $moon_gregorian_days[$i][0] . "." . $moon_gregorian_days[$i][1]; ?>";
					gregorianEl = '<span class="gregorian">' + gregorianDateShort + '</span>';	
					img = '<a class="kin" data-date="' + gregorianDateFull + '" data-kin="<?= $current_kin->number; ?>" href="#">' +
								'<img class="kin-image" src="<?= $current_kin->image; ?>"' + 
								'alt="<?= $current_kin->name; ?>"' +
								'title="<?= $current_kin->name; ?>">' +
								'</a>';						 
					
					$(el).append(img, gregorianEl);									
				<?php endfor; ?>				
				
				$('td[data-day="<?= $moon->day; ?>"]').addClass("active");					
/*
				$('a.kin').click(function(e) {
			        e.preventDefault();
			        var kinLink = $(this).attr("href");
					$("#dailyKinWidget").attr("src",kinLink);
					var oracleLink = "http://api.1320time.net/widgets/oracle/kin/" + $(this).attr("data-kin") + "/";					
					$("#oracleWidget").attr("src",oracleLink);
					//$('#kinWidget').reveal();
					 $("iframe #dailyKinWidget img#glyph").hide();
			     });								
*/
			});
		</script>
	</head>
	<body>
	<div id="wrapper">
	<?php	
		print '<h1>' . $moon->name . ' Moon, '. $moon->weekday . ' ' . $moon->day . '</h1>';
	?>
	<?php 
	
	?>
	<table>
	<thead>
		<tr>
			<th>
				<img src="http://1320time.net/assets/images/plasma1.png" alt="Dali Radial Plasma - 13:20 Time">				
				Dali
			</th>
			<th>
				<img src="http://1320time.net/assets/images/plasma2.png" alt="Seli Radial Plasma - 13:20 Time">
				Seli
			</th>
			<th>
				<img src="http://1320time.net/assets/images/plasma3.png" alt="Gamma Radial Plasma - 13:20 Time">	
				Gamma
			</th>
			<th>
				<img src="http://1320time.net/assets/images/plasma4.png" alt="Kali Radial Plasma - 13:20 Time">	
				Kali
			</th>
			<th>
				<img src="http://1320time.net/assets/images/plasma5.png" alt="Alpha Radial Plasma - 13:20 Time">
				Alpha
			</th>
			<th>
				<img src="http://1320time.net/assets/images/plasma6.png" alt="Limi Radial Plasma - 13:20 Time">
				Limi
			</th>
			<th>
				<img src="http://1320time.net/assets/images/plasma7.png" alt="Silio Radial Plasma - 13:20 Time">
				Silio
			</th>
		</tr>
	</thead>
	<tbody>
		<tr class="one">
			<td data-day="1"><span class="day">1</span></td>
			<td data-day="2"><span class="day">2</span></td>
			<td data-day="3"><span class="day">3</span></td>
			<td data-day="4"><span class="day">4</span></td>
			<td data-day="5"><span class="day">5</span></td>
			<td data-day="6"><span class="day">6</span></td>
			<td data-day="7"><span class="day">7</span></td>
		</tr>
		<tr class="two">
			<td data-day="8"><span class="day">8</span></td>	
			<td data-day="9"><span class="day">9</span></td>
			<td data-day="10"><span class="day">10</span></td>
			<td data-day="11"><span class="day">11</span></td>
			<td data-day="12"><span class="day">12</span></td>
			<td data-day="13"><span class="day">13</span></td>
			<td data-day="14"><span class="day">14</span></td>
		</tr>
		<tr class="three">
			<td data-day="15"><span class="day">15</span></td>	
			<td data-day="16"><span class="day">16</span></td>
			<td data-day="17"><span class="day">17</span></td>
			<td data-day="18"><span class="day">18</span></td>
			<td data-day="19"><span class="day">19</span></td>
			<td data-day="20"><span class="day">20</span></td>
			<td data-day="21"><span class="day">21</span></td>
		</tr>
		<tr class="four">
			<td data-day="22"><span class="day">22</span></td>
			<td data-day="23"><span class="day">23</span></td>
			<td data-day="24"><span class="day">24</span></td>
			<td data-day="25"><span class="day">25</span></td>
			<td data-day="26"><span class="day">26</span></td>
			<td data-day="27"><span class="day">27</span></td>
			<td data-day="28"><span class="day">28</span></td>
		</tr>
		</tbody>	
	</table>	
<div id="kinWidget" class="reveal-modal">
	<iframe id="oracleWidget" style="border:none" src="http://api.1320time.net/widgets/oracle/"></iframe>
	<iframe id="dailyKinWidget" style="border:none" src="http://api.1320time.net/widgets/kin/"></iframe>
	</div>
</div>
