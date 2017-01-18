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
<table id="tzolkin">
  <tr>
    <th scope="col"></th>
    <th scope="col"><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></th>
    <th scope="col"><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></th>
    <th scope="col"><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></th>
    <th scope="col"><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></th>
    <th scope="col"><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></th>
    <th scope="col"><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></th>
    <th scope="col"><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Seven" /></th>
    <th scope="col"><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></th>
    <th scope="col"><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></th>
    <th scope="col"><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></th>
    <th scope="col"><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></th>
    <th scope="col"><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Twelve" /></th>
    <th scope="col"><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></th>
  </tr>
  <tr>
    <th ><img src="http://1320time.net/assets/images/seal1.png"  alt="Dragon" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td ><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td ><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td ><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td ><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td ><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td ><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td ><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td ><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td ><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td ><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td ><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
  </tr>

  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal2.png"  alt="Wind" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal3.png"  alt="Night" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal4.png"  alt="Seed" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal5.png"  alt="Serpent" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal6.png"  alt="World Bridger" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal7.png"  alt="Hand" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal8.png"  alt="Star" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal9.png"  alt="Moon" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal10.png"  alt="Dog" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal11.png"  alt="Monkey" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal12.png"  alt="Human" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal13.png"  alt="Skywalker" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal14.png"  alt="Wizard" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal15.png"  alt="eagle" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal16.png"  alt="Warrior" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal17.png"  alt="Earth" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal18.png"  alt="Mirror" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal19.png"  alt="Storm" /></th>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
  </tr>
  <tr>
    <th scope="row"><img src="http://1320time.net/assets/images/seal0.png"  alt="Sun" /></th>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar7.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar1.png"  alt="One" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar8.png"  alt="Eight" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar2.png"  alt="Two" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar9.png"  alt="Nine" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar3.png"  alt="Three" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar10.png"  alt="Ten" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar4.png"  alt="Four" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar11.png"  alt="Eleven" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar5.png"  alt="Five" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar12.png"  alt="Human" /></td>
    <td><img src="http://1320time.net/assets/images/dotbar6.png"  alt="Six" /></td>
    <td class="portal"><img src="http://1320time.net/assets/images/dotbar13.png"  alt="Thirteen" /></td>
  </tr>
</table>
