#PHP Weather Script 1.0

hackLover's weather script is a smart, simple and customizable script that show wunderground.com weather in your website of your city

<img src="http://s12.postimg.org/6vlko16h9/demoweather.png" alt="Demo Weather" />
---

version 1.0 - 9 april 2013

Visit and follow
- www.hacklover.net
- @_hacklover

---


##Demo

See the demo here: http://www.hacklover.net/lab/weather/


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
