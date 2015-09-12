#PHP Weather Script 1.0

YF's weather script is a smart, simple and customizable script that show wunderground.com weather in your website of your city

<img src="http://wetter.gleisdorf.net/demo/demoweather.png" alt="Gleisdorf Wetter" />
---

version 1.0

Visit and follow
- www.wetter.gleisdorf.net
- @_Lunary


---


##Demo

See the demo here: http://wetter.gleisdorf.net/


##Usage

Just include the file hl.weather.php, then call the function to show it

``` objective-php
include "include/hl.weather.php
echo show_weather(API, STATE, CITY, ARRAY_MONTH, DAYS, TYPE_DEGREE);
```


###Parameters

######API
Get it free on http://api.wunderground.com/weather/api/

######STATE
For example "IT", "FR", "ES" or similar

######CITY
For example "Roma", "Paris", "Madrid"


######ARRAY_MONTH
Is an array with the names of each month, example
``` objective-php
$names_month = array("January", "February", "March", "April" ...
```

######DAYS
Days to show, default is 3

######TYPE_DEGREE
"f" for Fahrenheit, "c" for Celsius
