<?php
function show_weather($apikey, $state, $city, $show_n_days, $type_degree, $names_month) {
	$xml_weather = simplexml_load_file("http://api.wunderground.com/api/$apikey/geolookup/forecast/q/$state/$city.xml");
	if ($xml_weather) {
		$xml_weather_city = $xml_weather->location->city;
		$xml_weather_forecast = $xml_weather->forecast->simpleforecast->forecastdays;
		
		switch($type_degree) {
			case "c":
				$char_degree = "&#8451;";
			break;
			case "f":
				$char_degree = "&#8457;";
			break;
		}
		
		$i = 0;
		foreach($xml_weather_forecast->forecastday as $n) {
			$forecast[$i]["day"] = $n->date->day;
			$forecast[$i]["month"] = $n->date->month;
			$forecast[$i]["year"] = $n->date->year;
			$forecast[$i]["high"] = $n->high->celsius;
			$forecast[$i]["low"] = $n->low->celsius;
			$forecast[$i]["icon_url"] = $n->icon_url;
			$forecast[$i]["icon"] = $n->icon;
			$i++;
		}
	}
	
	$w_html = null;
	$w_html .= "<div id=\"weather\">\n";
	$w_html .= "<div class=\"title_w\">$xml_weather_city</div>\n";
	$w_html .= "<div class=\"wrap_w\">\n";
	if ($xml_weather) {
		for ($is = 0; $is < $show_n_days; $is++) {
			$w_html .= "<div class=\"day\">\n";
				$w_html .= "<div class=\"image\"><img src=\"".$forecast[$is]["icon_url"]."\" alt=\"".$forecast[$is]["icon"]."\" /></div>\n";
				$w_html .= "<div class=\"degree\"><span class=\"high\">".$forecast[$is]["high"] . " $char_degree</span> / <span class=\"low\">" . $forecast[$is]["low"] . " $char_degree</span>" . "</div>\n";
				$w_html .= "<div class=\"date\">".$forecast[$is]["day"] . " " . $names_month[$forecast[$is]["month"]-1] . " " . $forecast[$is]["year"] . "</div>\n";
			$w_html .= "</div>\n";
		}
	} else {
		echo "Non va un caz";
	}
	$w_html .= "<div class=\"clear\"></div>";
	$w_html .= "</div>\n";
	$w_html .= "</div>\n";
	return $w_html;
}
?>
