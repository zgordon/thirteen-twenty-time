<!DOCTYPE html>
<html>
	<head>
		<title>13:20 Mayan Calendar Kin Info</title>
		<style>	
			body {margin: 0; padding: 0; font-family: "Helvetica Neue", Helvetica, Arial;}	
			.today {width: 290px;  /* border: 1px #ccc solid; */ position: relative; float: left; clear: both; display: block; padding: 5px 0;}			
			.icons img {display: block;  margin: 10px auto; width: 40px; }
			.today h1 {font-size: 16px;  margin:0; color: #444; text-align: center}
			.today h2 {font-size: 12px;  color: #666; font-weight: normal; margin: 8px 0 0 0; padding: 0;}
			.today p.gregorian {font-size: 10px; color: #ccc; position: absolute; right: 5px; top: 1px; display: none;}
			.codespell {float: left; clear: both; margin: 10px 40px; padding: 10px}
			.codespell p {line-height: 1.4em; margin: 0; font-size: 11px; color: #666;}
			.codespell p:nth-child(1), .codespell p:nth-child(2) {
				font-size: 14px;
			}
			.codespell p:nth-child(2) {
				border-bottom: 1px #ccc solid;
				padding-bottom: 5px;
				margin-bottom: 10px;				
			}
			.codespell p.guided {margin: 10px 0; line-height: 1.2em}
			.rounded {
				-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;
				-webkit-box-shadow: 1px 2px 2px 0px #ccc;
				-moz-box-shadow: 1px 2px 2px 0px #ccc;
				box-shadow: 1px 2px 2px 0px #ccc;
				}
		</style>		
	</head>
	<body title="<?= $kin->name;?>">
		<div class="today <?= $kin->color; ?>">
			<div class="icons">
				<img src="<?= $kin->image; ?>" id="glyph">
			</div>
			<h1>
				<?= $kin->color; ?> <?= $kin->tone_name; ?> <?= $kin->seal_name; ?>
			</h1>

			<div class="codespell">
