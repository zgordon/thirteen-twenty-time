<!DOCTYPE html>
<html charset="utf-8">
<head>
<title>Tzolkin - Harmonic Module - 13:20 Time.net API</title>
<style>
	table#tzolkin {border-collapse:collapse;}
	td {border: 1px #222 solid; padding: 0}	
	img {width: 25px; height: 25px}	
	tr td.portal {background:#00b50c;}	
	tr:nth-child(4n-6) {background:#f3b7bd}
	tr:nth-child(4n-4) {background:#e0e9fd}	
	tr:nth-child(4n-3) {background:#fdfba1}	
	tr th {background: #fff}
	tr td.current {
		border: 3px purple solid;
		background:#c588cb ;
	}
	
</style>
<script src="http://code.jquery.com/jquery.min.js"></script>		
<script>		
$(document).ready(function(){

	var currentKin = <?= $kin->number; ?>;

	var i = 0;
	var j = 0;
	var row, rowCells;
	$("table tr").each(function(){		
		$(this).attr("data-row", i);
		row = $(this);
		row  
		i++
	})
	$("table td").each(function(){
		var col = $(this).parent().children().index($(this));
		var row = $(this).parent().attr('data-row');
		$(this).attr("data-row", row);
		$(this).attr("data-col", col);		
		var kin = ((parseInt(col) - 1)* 20) + parseInt(row); 
		$(this).attr("data-kin", kin);				
	})
	var kinCell = 'td[data-kin="' + currentKin + '"]';
	$(kinCell).addClass("current");
});
</script>
</head>

<body>
<table id="wavespell">
  <tr>
	<td class=""></td>
  </tr>
</table>
