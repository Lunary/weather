<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Gleisdorf Wetter</title>
		<link href="themes/style.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="top"></div>
		
		<?php
			include "hl.weather.php";
			$names_month = array("Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember");
			echo show_weather("YOUR_API_KEY", "AT", "Gleisdorf", 3, "c", $names_month);
		?>
	</body>
</html>
