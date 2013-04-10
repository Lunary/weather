<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Weather demo - made by hackLover</title>
	<link href="themes/style.css" media="all" rel="stylesheet" type="text/css" />
</head>
	<body>
		<div class="top"></div>
		
		<?php
			include "hl.weather.php";
			$names_month = array("Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre");
			echo show_weather("YOUR_API_KEY", "IT", "Brescia", 3, "c", $names_month);
		?>
		
		<div class="copy">
			made by <a href="http://www.hacklover.net">hackLover</a><br />
			donate to <span class="btc">1GTiuK78RNS6LHPekZ3bo7cCUaaVHG75GE</span>
		</div>
	</body>
</html>
