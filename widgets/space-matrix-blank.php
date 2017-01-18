<?php include('441.php'); ?>
<!DOCTYPE html>
<html charset="UTF-8">
<head>
<title>441 Cube Space Matrix - 13:20 Time.net</title>
<style>
	table {border-collapse:collapse; font-size:14px}
	td {width: 28px; height: 28px; padding: 2px; text-align:center; border: 1px #222 solid}
	.border-top {border-top:3px #222 solid}
	.border-right {border-right:3px #222 solid}
	.border-bottom {border-bottom:3px #222 solid}
	.border-left{border-left:3px #222 solid}
	.border-top-bottom {border-bottom:3px #222 solid; border-top:3px #222 solid}
	.border-left-right {border-left:3px #222 solid; border-right:3px #222 solid}
	.border-all {border:3px #222 solid;}

	/* RED */
	tr:nth-child(3) td:nth-child(3), tr:nth-child(3) td:nth-child(4),
	tr:nth-child(3) td:nth-child(5), tr:nth-child(3) td:nth-child(6),
	tr:nth-child(3) td:nth-child(7), tr:nth-child(3) td:nth-child(8),
	tr:nth-child(3) td:nth-child(9), tr:nth-child(3) td:nth-child(10),
	tr:nth-child(10) td:nth-child(3), tr:nth-child(10) td:nth-child(4),
	tr:nth-child(10) td:nth-child(5), tr:nth-child(10) td:nth-child(6),
	tr:nth-child(10) td:nth-child(7), tr:nth-child(10) td:nth-child(8),
	tr:nth-child(10) td:nth-child(9), tr:nth-child(10) td:nth-child(10),
	tr:nth-child(4) td:nth-child(3),	
	tr:nth-child(5) td:nth-child(3), tr:nth-child(6) td:nth-child(3),
	tr:nth-child(7) td:nth-child(3), tr:nth-child(8) td:nth-child(3),
	tr:nth-child(9) td:nth-child(3), tr:nth-child(10) td:nth-child(3),
	tr:nth-child(4) td:nth-child(10),	
	tr:nth-child(5) td:nth-child(10), tr:nth-child(6) td:nth-child(10),
	tr:nth-child(7) td:nth-child(10), tr:nth-child(8) td:nth-child(10),
	tr:nth-child(9) td:nth-child(10), tr:nth-child(10) td:nth-child(10),	
	tr:nth-child(11) td:nth-child(11) {background-color:#e94b79;}
	
	/* BLUE */
	tr:nth-child(14) td:nth-child(3), tr:nth-child(14) td:nth-child(4),
	tr:nth-child(14) td:nth-child(5), tr:nth-child(14) td:nth-child(6),
	tr:nth-child(14) td:nth-child(7), tr:nth-child(14) td:nth-child(8),
	tr:nth-child(14) td:nth-child(9), tr:nth-child(14) td:nth-child(10),
	tr:nth-child(21) td:nth-child(3), tr:nth-child(21) td:nth-child(4),
	tr:nth-child(21) td:nth-child(5), tr:nth-child(21) td:nth-child(6),
	tr:nth-child(21) td:nth-child(7), tr:nth-child(21) td:nth-child(8),
	tr:nth-child(21) td:nth-child(9), tr:nth-child(21) td:nth-child(10),
	tr:nth-child(21) td:nth-child(3),	
	tr:nth-child(15) td:nth-child(3), tr:nth-child(16) td:nth-child(3),
	tr:nth-child(17) td:nth-child(3), tr:nth-child(18) td:nth-child(3),
	tr:nth-child(19) td:nth-child(3), tr:nth-child(20) td:nth-child(3),
	tr:nth-child(21) td:nth-child(10),	
	tr:nth-child(15) td:nth-child(10), tr:nth-child(16) td:nth-child(10),
	tr:nth-child(17) td:nth-child(10), tr:nth-child(18) td:nth-child(10),
	tr:nth-child(19) td:nth-child(10), tr:nth-child(20) td:nth-child(10),			
	tr:nth-child(13) td:nth-child(11) {background-color:#38bcf0;}

	/* GREEN */
	tr:nth-child(3) td:nth-child(21), tr:nth-child(3) td:nth-child(14),
	tr:nth-child(3) td:nth-child(15), tr:nth-child(3) td:nth-child(16),
	tr:nth-child(3) td:nth-child(17), tr:nth-child(3) td:nth-child(18),
	tr:nth-child(3) td:nth-child(19), tr:nth-child(3) td:nth-child(20),
	tr:nth-child(10) td:nth-child(21), tr:nth-child(10) td:nth-child(14),
	tr:nth-child(10) td:nth-child(15), tr:nth-child(10) td:nth-child(16),
	tr:nth-child(10) td:nth-child(17), tr:nth-child(10) td:nth-child(18),
	tr:nth-child(10) td:nth-child(19), tr:nth-child(10) td:nth-child(20),
	tr:nth-child(4) td:nth-child(14),	
	tr:nth-child(5) td:nth-child(14), tr:nth-child(6) td:nth-child(14),
	tr:nth-child(7) td:nth-child(14), tr:nth-child(8) td:nth-child(14),
	tr:nth-child(9) td:nth-child(14), tr:nth-child(10) td:nth-child(14),
	tr:nth-child(4) td:nth-child(21),	
	tr:nth-child(5) td:nth-child(21), tr:nth-child(6) td:nth-child(21),
	tr:nth-child(7) td:nth-child(21), tr:nth-child(8) td:nth-child(21),
	tr:nth-child(9) td:nth-child(21), tr:nth-child(10) td:nth-child(21),
	tr:nth-child(11) td:nth-child(13) {background-color:#9cd09c;}	
	
	/* YELLOW */
	tr:nth-child(14) td:nth-child(21), tr:nth-child(14) td:nth-child(14),
	tr:nth-child(14) td:nth-child(15), tr:nth-child(14) td:nth-child(16),
	tr:nth-child(14) td:nth-child(17), tr:nth-child(14) td:nth-child(18),
	tr:nth-child(14) td:nth-child(19), tr:nth-child(14) td:nth-child(20),
	tr:nth-child(21) td:nth-child(21), tr:nth-child(21) td:nth-child(14),
	tr:nth-child(21) td:nth-child(15), tr:nth-child(21) td:nth-child(16),
	tr:nth-child(21) td:nth-child(17), tr:nth-child(21) td:nth-child(18),
	tr:nth-child(21) td:nth-child(19), tr:nth-child(21) td:nth-child(20),
	tr:nth-child(21) td:nth-child(14),	
	tr:nth-child(15) td:nth-child(14), tr:nth-child(16) td:nth-child(14),
	tr:nth-child(17) td:nth-child(14), tr:nth-child(18) td:nth-child(14),
	tr:nth-child(19) td:nth-child(14), tr:nth-child(20) td:nth-child(14),
	tr:nth-child(21) td:nth-child(21),	
	tr:nth-child(15) td:nth-child(21), tr:nth-child(16) td:nth-child(21),
	tr:nth-child(17) td:nth-child(21), tr:nth-child(18) td:nth-child(21),
	tr:nth-child(19) td:nth-child(21), tr:nth-child(20) td:nth-child(21),	
	tr:nth-child(13) td:nth-child(13) {background-color:#f7e03f;}
	

	tr.axis td, tr td:nth-child(12) {background:#d4eaf8}

	tr:nth-child(2) td:nth-child(1), tr:nth-child(1) td:nth-child(2),
	tr:nth-child(8) td:nth-child(1), tr:nth-child(1) td:nth-child(8),
	tr:nth-child(9) td:nth-child(1), tr:nth-child(1) td:nth-child(9),			
	tr:nth-child(15) td:nth-child(1), tr:nth-child(1) td:nth-child(15),				
	tr:nth-child(16) td:nth-child(1), tr:nth-child(1) td:nth-child(16),			
	tr:nth-child(12) td:nth-child(12)
	{background: #fff;}

	.q1 {background:#FBEFDC}
	.q2 {background:#ECEAFF}
	<?php //print 'tr:nth-child(' . $tfi['h'] . ') td:nth-child(' . $tfi['v'] . ')'; ?> {		
		background: #03dd00;		
	}
</style>
<script src="http://code.jquery.com/jquery.js"></script>
</head>

<body>
<table summary="441 cube with the time matrix overlay">
  <caption>
    Time Matrix
  </caption>
  <tr>
    <td>&nbsp;</td>
    <td>V1</td>
    <td>V2</td>
    <td>V3</td>
    <td>V4</td>
    <td>V5</td>
    <td>V6</td>
    <td>V7</td>
    <td>V8</td>
    <td>V9</td>
    <td>V10</td>
    <td>V11</td>
    <td>V12</td>
    <td>V13</td>
    <td>V14</td>
    <td>V15</td>
    <td>V16</td>
    <td>V17</td>
    <td>V18</td>
    <td>V19</td>
    <td>V20</td>
    <td>V21</td>
  </tr>
  <tr>
    <td>H1</td>
    <td class="border-left border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-left-right border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-top">&nbsp;</td>
    <td class="border-right border-top">&nbsp;</td>
  </tr>
  <tr>
    <td>H2</td>
    <td class="border-left">&nbsp;</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H3</td>
    <td class="border-left">&nbsp;</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H4</td>
    <td class="border-left">&nbsp;</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H5</td>
    <td class="border-left">&nbsp;</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H6</td>
    <td class="border-left">&nbsp;</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H7</td>
    <td class="border-left">&nbsp;</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H8</td>
    <td class="border-left">&nbsp;</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H9</td>
    <td class="border-left">&nbsp;</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H10</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr class="axis">
    <td >H11</td>
    <td class="border-top-bottom border-left">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-all">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom">&nbsp;</td>
    <td class="border-top-bottom border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H12</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H13</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H14</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H15</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H16</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H17</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H18</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H19</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H20</td>
    <td class="border-left">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-left-right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="border-right">&nbsp;</td>
  </tr>
  <tr>
    <td>H21</td>
    <td class="border-bottom border-left">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom border-left-right">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom">&nbsp;</td>
    <td class="border-bottom border-right">&nbsp;</td>
  </tr>
</table>
</body>
</html>
