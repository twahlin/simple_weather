<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>Weather</title>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" charset="utf-8"></script>
	<script src="jquery.simpleWeather.js" charset="utf-8"></script>

    <script type="text/javascript">
    $(function() {
        $.simpleWeather({
            zipcode: '55401',
            unit: 'f',
            success: function(weather) {
                var cur_weather = (weather.code);
                console.log(cur_weather);
                if(cur_weather == '0') { html = '<h2>Weather Code 0: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '1') { html = '<h2>Weather Code 1: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '2') { html = '<h2>Weather Code 2: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '3') { html = '<h2>Weather Code 3: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '4') { html = '<h2>Weather Code 4: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '5') { html = '<h2>Weather Code 5: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '6') { html = '<h2>Weather Code 6: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '7') { html = '<h2>Weather Code 7: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '8') { html = '<h2>Weather Code 8: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '9') { html = '<h2>Weather Code 9: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '10') { html = '<h2>Weather Code 10: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '11') { html = '<h2>Weather Code 11: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '12') { html = '<h2>Weather Code 12: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '13') { html = '<h2>Weather Code 13: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '14') { html = '<h2>Weather Code 14: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '15') { html = '<h2>Weather Code 15: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '16') { html = '<h2>Weather Code 16: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '17') { html = '<h2>Weather Code 17: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '18') { html = '<h2>Weather Code 18: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '19') { html = '<h2>Weather Code 19: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '20') { html = '<h2>Weather Code 20: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '21') { html = '<h2>Weather Code 21: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '22') { html = '<h2>Weather Code 22: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '23') { html = '<h2>Weather Code 23: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '24') { html = '<h2>Weather Code 24: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }                 
                else if(cur_weather == '25') { html = '<h2>Weather Code 25: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '26') { html = '<h2>Weather Code 26: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '27') { html = '<h2>Weather Code 27: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '28') { html = '<h2>Weather Code 28: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '29') { html = '<h2>Weather Code 29: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '30') { html = '<h2>Weather Code 30: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '31') { html = '<h2>Weather Code 31: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '32') { html = '<h2>Weather Code 32: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '33') { html = '<h2>Weather Code 33: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '34') { html = '<h2>Weather Code 34: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '35') { html = '<h2>Weather Code 35: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '36') { html = '<h2>Weather Code 36: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }               
                else if(cur_weather == '37') { html = '<h2>Weather Code 37: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '38') { html = '<h2>Weather Code 38: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '39') { html = '<h2>Weather Code 39: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '40') { html = '<h2>Weather Code 40: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '41') { html = '<h2>Weather Code 41: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '42') { html = '<h2>Weather Code 42: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '43') { html = '<h2>Weather Code 43: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '44') { html = '<h2>Weather Code 44: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '45') { html = '<h2>Weather Code 45: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '46') { html = '<h2>Weather Code 46: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }
                else if(cur_weather == '47') { html = '<h2>Weather Code 47: which is &lsquo;'+weather.currently+'&rsquo;</h2>'; }              
                else { html = '<h2>We seem to have ran into an error</h2>'; }
                $("#weather2").html(html);
            },
            error: function(error) {
                $("#weather2").html('<p>'+error+'</p>');
            }
        });
    });
    </script>
</head>
<body>
	<div id="weather2"></div>
</body>
</html>