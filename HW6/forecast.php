<html>
	<head>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<style type="text/css">
			.formLayout{
				background-color: #02A61D;
				border-radius: 7px;
				width: 640px;
				height: 200px;
				margin: auto;
			}

			.contentHeading{
				font-family: Times New Roman;
				color: white;
				font-style: italic;
				text-align: center;
				font-size: 38px;
				
			}

			.formContainer{
				margin-left:30px;
				position: absolute;
				top: 70px;
			}

			.formHeading{
				font-family: Times New Roman;
				color: white;
				margin-bottom: -10px;
				margin-left: 10px;
				font-weight: bold;
				font-size: 17px;
			}

			.textBoxStyle{
				width: 100px;
				left: 60px;
				position: absolute;
			}

			.dropDownStyle{
				width: 175px;
				margin-left: 0px;
			}

			.buttonStyle{
				font-family: Times New Roman;
				background-color: white;
				border-radius: 3px;
				border: none;
				margin-left: 240px;
				margin-top: 80px;
				text-align: center;
			}

			.checkBoxStyle{
				margin-left: 470px;
				margin-top: -53px;
			}

			.chekBoxContent{
				font-family: Times New Roman;
				color: white;
				font-weight: bold;
				font-size: 17px;
				margin-left: 487px;
				margin-top: -54px;
			}

			.messageFormat{
				border: 2px solid #AAAAAA;
				font-family: Times New Roman;
				text-align: center;
				color: black;
				background-color: #F0F0F0;
				width: 340px;
				margin-top: 30px;
				margin-left: auto;
				margin-right: auto;
				height: 20px;
			}

			hr{
   				transform: rotate(90deg);
   				width: 100px;
   				border: 2px solid white;
   				margin-top: -85px;
   				margin-left: 305px;
   				border-radius: 2px;
			}

			.cardLayout{
				background-color: #22BFFA;
				height: 270px;
				width: 420px;
				margin: auto;
				border-radius: 10px;
				margin-top: 30px;
			}

			.cityInfo{
				font-family: Times New Roman;
				color: white;
				font-size: 25px;
				font-weight: bold;
				padding-top: 20px;
				padding-left: 20px;
				margin-bottom: 0px;
			}

			.timeZoneInfo{
				font-family: Times New Roman;
				color: white;
				font-size: 13px;
				margin-top: 0px;
				padding-left: 20px;
				margin-bottom: 0px;
			}

			.temperatureInfo{
				font-family: Times New Roman;
				color: white;
				font-size: 70px;
				font-weight: bold;
				padding-left: 20px;
				margin-top: 0px;
				margin-bottom: 0px;
				display: inline;
			}

			.summaryInfo{
				font-family: Times New Roman;
				color: white;
				font-size: 30px;
				padding-left: 20px;
				margin-top: 0px;
				font-weight: bold;
				margin-bottom: 10px;
			}

			.weatherParameter{
				font-family: Times New Roman;
				color: white;
				font-size: 20px;
				text-align: center;
				font-weight: bold;
			}

			.farenheit{
				font-family: Times New Roman;
				font-size: 40px;
				font-weight: bold;
				color: white;
				display: inline;
				padding-left: 5px;
			}

			.imgFormat{
				width: 70px;
				text-align: center;
			}

			.tableLayout{
				font-family: Times New Roman;
				color: white;
				background-color: #8BC3F0;
				border: 2px Solid #2291C0;
				text-align: center;
				width: 770px;
				border-collapse: collapse;
				font-weight: bold;
				white-space: nowrap;
			}

			.tableDiv{
				margin-left: -175px;
				margin-top: 60px;
				margin-bottom: 30px;
				width: 770px;
			}

			.dailyWeatherTitle{
				font-family: Times New Roman;
				font-weight: bold;
				font-size: 30px;
				text-align: center;
				margin-top: 20px;
			}

			.dailyCardInfo{
				height: 440px;
				width: 510px;
				margin-top: 0px;
				margin-left: auto;
				margin-right: auto;
				background-color: #94CBD8;
				border-radius: 10px;
			}

			.dailyCardSummary{
				font-size: 30px;
				font-family: Times New Roman;
				font-weight: bold;
				color: white;
				padding-top: 60px;
				padding-left: 30px;
				margin-bottom: 15px;
			}

			.dailyCardTempearture{
				font-size: 90px;
				font-family: Times New Roman;
				font-weight: bold;
				color: white;
				padding-left: 30px;
				display: inline;
				height: 50px;
			}

			.dailyCardFarenheit{
				font-size: 70px;
				font-family: Times New Roman;
				font-weight: bold;
				color: white;
				display: inline;
			}

			.dailyImageProp{
				margin-top: -115px;
				padding-right: 0px;
				height: 240px;
				width: 240px;
				float:right;
			}

			.dailyTableProp{
				border: none;
				margin-top: 0px;
				margin-left: 190px;
			}

			.dailyTableDataProp{
				font-family: Times New Roman;
				color: white;
				font-weight: bold;
				font-size: 18px;
				text-align: right;
				white-space: nowrap;
			}

			i{
				border: solid black;
				border-width: 3px 3px 0 0;
				display: inline-block;
				padding: 3px;
				width: 15px;
				height: 15px;
			}

			.toggleLayout{
				margin-left: -100px;
				margin-right: auto;
				visibility: hidden;
				text-align: center;
				height: 200px;
				width: 720px;
			}

			.graphIcon{
				width: 40px;
				margin-left: auto;
				margin-right: auto;
				margin-top: 5px;
				margin-bottom: auto;
			}
		</style>
	</head>
	<body>
		<script type="text/javascript">
			function sendFormData(data){
				streetName = data.street.value;
				cityName = data.city.value;
				stateName = data.state.value;
				checkBoxVal = document.getElementById('locationBox').checked;
				if (!checkBoxVal){
					if (streetName.length == 0 || cityName.length == 0 || stateName.length == 0){
						document.getElementById("content").innerHTML = "<p class='messageFormat'>Please check the input address.</p>";
						return false;
					}
					document.getElementById('cityField').value = cityName;
				}
				return true;
			}

			function clearData(){
				document.getElementById("address").reset();
				document.getElementById("content").innerHTML = "";
			}

			function disableFields(checkboxElement){
				if (checkboxElement.checked){
					document.getElementById('streetNameBox').disabled = true;
					document.getElementById('cityNameBox').disabled = true;
					document.getElementById('state').disabled = true;
					fetchCurrentLocation();
				}else {
					document.getElementById('streetNameBox').disabled = false;
					document.getElementById('cityNameBox').disabled = false;
					document.getElementById('state').disabled = false;
				}
			}

			function fetchCurrentLocation(){
				link = "http://ip-api.com/json";
				httpRequest = new XMLHttpRequest();
				httpRequest.open("GET", link, false);
				try{
					httpRequest.send();
				}
				catch(errorMesage){
					Console.log("Invalid location, file not found");
				}
				jsonText = JSON.parse(httpRequest.responseText);
				document.getElementById('latitudeField').value = jsonText.lat;
				document.getElementById('longitudeField').value = jsonText.lon;
				document.getElementById('cityField').value = jsonText.city;
			}

			function displayDailyWeatherDetail(dailyInfo){
				html = "<p class='dailyWeatherTitle'>Daily Weather Detail</p>";
				html += "<div class='dailyCardInfo'>";
				iconMap = {}
				farenheitImg = "<img src='https://cdn3.iconfinder.com/data/icons/virtual-notebook/16/button_shape_oval-512.png' height='10' width='10' align='top'>";
				iconMap['clear-day'] = "<img class='dailyImageProp' src='https://cdn3.iconfinder.com/data/icons/weather-344/142/sun-512.png'>";
				iconMap['clear-night'] = "<img class='dailyImageProp' src='https://cdn3.iconfinder.com/data/icons/weather-344/142/sun-512.png'>";
				iconMap['rain'] = "<img class='dailyImageProp' src='https://cdn3.iconfinder.com/data/icons/weather-344/142/rain-512.png'>";
				iconMap['snow'] = "<img class='dailyImageProp' src='https://cdn3.iconfinder.com/data/icons/weather-344/142/snow-512.png'>";
				iconMap['sleet'] = "<img class='dailyImageProp' src='https://cdn3.iconfinder.com/data/icons/weather-344/142/lightning-512.png'>";
				iconMap['wind'] = "<img class='dailyImageProp' src='https://cdn4.iconfinder.com/data/icons/the-weather-is-nice-today/64/weather_10-512.png'>";
				iconMap['fog'] = "<img class='dailyImageProp' src='https://cdn3.iconfinder.com/data/icons/weather-344/142/cloudy-512.png'>";
				iconMap['cloudy'] = "<img class='dailyImageProp' src='https://cdn3.iconfinder.com/data/icons/weather-344/142/cloud-512.png'>";
				iconMap['partly-cloudy-day'] = "<img class='dailyImageProp' src='https://cdn3.iconfinder.com/data/icons/weather-344/142/sunny-512.png'>";
				iconMap['partly-cloudy-night'] = "<img class='dailyImageProp' src='https://cdn3.iconfinder.com/data/icons/weather-344/142/sunny-512.png'>";
				summaryInfo = dailyInfo.currently.summary;
				temperatureInfo = Math.round(dailyInfo.currently.temperature);
				iconImg = dailyInfo.currently.icon;
				precipitation = dailyInfo.currently.precipIntensity;
				precipitationText = "";
				if (precipitation <= 0.001)
					precipitationText = "N/A";
				else if (precipitation <= 0.015)
					precipitationText = "Very Light";
				else if (precipitation <= 0.05)
					precipitationText = "Light";
				else if (precipitation <= 0.1)
					precipitationText = "Moderate";
				else if (precipitation > 1)
					precipitationText = "Heavy";
				rainChance = Math.round(dailyInfo.currently.precipProbability * 100);
				windFlow = dailyInfo.currently.windSpeed;
				humid = Math.round(dailyInfo.currently.humidity * 100);
				visible = dailyInfo.currently.visibility;
				sunrise = dailyInfo.daily.data[0].sunriseTime;
				sunset = dailyInfo.daily.data[0].sunsetTime;
				var rise = new Date(sunrise * 1000)
				sunrise = rise.getHours();
				if (sunrise > 12)
					sunrise -= 12;
				var set = new Date(sunset * 1000)
				sunset = set.getHours();
				if (sunset > 12)
					sunset -= 12;
				html += "<p class='dailyCardSummary'>" + summaryInfo + "</p>";
				html += "<p class='dailyCardTempearture'>" + temperatureInfo + "</p>";
				html += farenheitImg;
				html += "<p class='dailyCardFarenheit'>F</p>";
				html += iconMap[iconImg];
				html += "<table class='dailyTableProp'>";
				html += "<tr><td class='dailyTableDataProp'>Precipitation:</td><td style='text-align:left; font-size:25px;' class='dailyTableDataProp'>" + precipitationText + "</td></tr>";
				html += "<tr><td class='dailyTableDataProp'>Chance of Rain:</td><td style='text-align:left; font-size:25px;' class='dailyTableDataProp'>" + rainChance + "<span class='dailyTableDataProp'>&#37;</span></td></tr>";
				html += "<tr><td class='dailyTableDataProp'>Wind Speed:</td><td style='text-align:left; font-size:25px;' class='dailyTableDataProp'>" + windFlow + "<span class='dailyTableDataProp'>mph</span></td></tr>";
				html += "<tr><td class='dailyTableDataProp'>Humidity:</td><td style='text-align:left; font-size:25px;' class='dailyTableDataProp'>" + humid + "<span class='dailyTableDataProp'>&#37;</span></td></tr>";
				html += "<tr><td class='dailyTableDataProp'>Visibility:</td><td style='text-align:left; font-size:25px;' class='dailyTableDataProp'>" + visible + "<span class='dailyTableDataProp'>mi</span></td></tr>";
				html += "<tr><td class='dailyTableDataProp'>Sunrise / Sunset:</td><td style='text-align:left; font-size:25px;' class='dailyTableDataProp'>" + sunrise + " <span class='dailyTableDataProp'>AM/</span> " + sunset + " <span class='dailyTableDataProp'>PM</span></td></tr>";
				html += "</table>";
				html += "<p style='margin-top:35px;' class='dailyWeatherTitle'>Day's Hourly Weather</p>";
				displayHourlyWeatherGraph(dailyInfo);
			}

			function displayHourlyWeatherGraph(dailyInfo){
				html += "<div class='graphIcon'><a href='#' onclick='hideGraph()'><img src='https://cdn4.iconfinder.com/data/icons/geosm-e-commerce/18/point-down-512.png' id='toggleIcon' height='40' width='40'></img></a></div>";
				html += "<div id='graphLayout' class='toggleLayout'>";
				html += "</div>";
				document.getElementById('content').innerHTML = html;
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(function() {buildGraph (dailyInfo)});
			}

			function buildGraph(dailyInfo){
				temperatureDataArray = dailyInfo.hourly.data;
				var hourlyTemperature = [];
				for (i = 0; i < temperatureDataArray.length; i++)
					hourlyTemperature[i] = temperatureDataArray[i].temperature;				
				var tableData = new google.visualization.DataTable();
				tableData.addColumn('number', 'Time');
				tableData.addColumn('number', 'T');
				for (i = 0; i < 24; i++)
					tableData.addRow([i, hourlyTemperature[i]]);
				var options = {
          			curveType: 'function',
          			vAxis: { textPosition: 'none', title: "Temperature" },
          			hAxis: {title: "Time"},
          			legend: { position: 'right' }
        		};
        		var chart = new google.visualization.LineChart(document.getElementById('graphLayout'));
				chart.draw(tableData, options);
			}

			function hideGraph(){				
				element = document.getElementById('graphLayout');
				visibilityVal = getComputedStyle(element);
				if (visibilityVal.visibility == 'hidden'){
					element.style.visibility = "visible";
					document.getElementById('toggleIcon').src = "https://cdn0.iconfinder.com/data/icons/navigation-set-arrows-part-one/32/ExpandLess-512.png";
				}
				else{
					element.style.visibility = "hidden";
					document.getElementById('toggleIcon').src = "https://cdn4.iconfinder.com/data/icons/geosm-e-commerce/18/point-down-512.png";
				}
			}
		</script>
		<div class="formLayout">
			<form method="GET" id="address" action="<?= $_SERVER['PHP_SELF']; ?>" onsubmit="return sendFormData(this)">
				<div>
					<p class="contentHeading">Weather Search</p>
				</div>
				<div class="formContainer">
					<p class="formHeading">Street<input id="streetNameBox" class="textBoxStyle" type="text" name="street" value="<?php echo isset($_GET['street']) ? $_GET['street'] : '' ?>"></p>
					<p class="formHeading">City<input id="cityNameBox" class="textBoxStyle" type="text" name="city" value="<?php echo isset($_GET['city']) ? $_GET['city'] : '' ?>"></p>
					<p class="formHeading">State
						<select class="dropDownStyle" name="state" id="state">
							<option value="">State</option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Ioa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennesse</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
					</p>
				</div>
				<input class="buttonStyle" type="submit" name="search" value="search"/>
				<input class="buttonStyle" style="margin-left: 0px" type="button" name="clear" value="clear" onclick="clearData()"/>
				<hr>
				<input class="checkboxStyle" type="checkbox" id="locationBox" name="currentLocation" value="" onclick="disableFields(this)"/><p class="chekBoxContent">Current Location</p>
				<input type="hidden" name="lat" value="" id="latitudeField">
				<input type="hidden" name="lng" value="" id="longitudeField">
				<input type="hidden" name="cityValue" value="" id="cityField">
			</form>
		</div>
		<div id="content">
		</div>
		
		<script type="text/javascript">
			function displayWeatherCard(responseData){
				cityVal = "<?php echo $_GET['cityValue'] ?>";
				timeZone = responseData.timezone;
				temperature = responseData.currently.temperature;
				summary = responseData.currently.summary;
				humidity = responseData.currently.humidity;
				pressure = responseData.currently.pressure;
				windSpeed = responseData.currently.windSpeed;
				visibility = responseData.currently.visibility;
				cloudCover = responseData.currently.cloudCover;
				ozone = responseData.currently.ozone;
				farenheitImg = "<img src='https://cdn3.iconfinder.com/data/icons/virtual-notebook/16/button_shape_oval-512.png' height='10' width='10' align='top'>";
				humidityImg = "<img src='https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-16-512.png' height='25' width='25' align='top' title='Humidity'>"
				pressureImg = "<img src='https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-25-512.png' height='25' width='25' align='top' title='Pressure'>"
				windImg = "<img src='https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-27-512.png' height='25' width='25' align='top' title='Windspeed'>"
				visibilityImg = "<img src='https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-30-512.png' height='25' width='25' align='top' title='Visibility'>"
				cloudCoverImg = "<img src='https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-28-512.png' height='25' width='25' align='top' title='Cloud cover'>"
				ozoneImg = "<img src='https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-24-512.png' height='25' width='25' align='top' title='Ozone'>"
				html = "<div class='cardLayout'>";
				html += "<p class='cityInfo'>" + cityVal + "</p>";
				html += "<p class='timeZoneInfo'>" + timeZone + "</p>";
				html += "<p class='temperatureInfo'>" + temperature + "</p>";
				html += farenheitImg;
				html += "<p class='farenheit'>F</p>";
				html += "<p class='summaryInfo'>" + summary + "</p>";
				html += "<table style='margin: auto;'><tr>";
				if (humidity != 0)
					html += "<td class='imgFormat'>" + humidityImg + "</td>";
				if (pressure != 0)
					html += "<td class='imgFormat'>" + pressureImg + "</td>";
				if (windSpeed != 0) 
					html += "<td class='imgFormat'>" + windImg + "</td>";
				if (visibility != 0) 
					html += "<td class='imgFormat'>" + visibilityImg + "</td>";
				if (cloudCover != 0) 
					html += "<td class='imgFormat'>" + cloudCoverImg + "</td>";
				if (ozone != 0) 
					html += "<td class='imgFormat'>" + ozoneImg + "</td>";
				html += "</tr><tr>";
				if (humidity != 0)
					html += "<td class='weatherParameter'>" + humidity + "</td>";
				if (pressure != 0)
					html += "<td class='weatherParameter'>" + pressure + "</td>";
				if (windSpeed != 0) 
					html += "<td class='weatherParameter'>" + windSpeed + "</td>";
				if (visibility != 0) 
					html += "<td class='weatherParameter'>" + visibility + "</td>";
				if (cloudCover != 0) 
					html += "<td class='weatherParameter'>" + cloudCover + "</td>";
				if (ozone != 0) 
					html += "<td class='weatherParameter'>" + ozone + "</td>";
				html += "</tr></table>";
				displayDailyWeatherInfo(responseData);
			}

			function displayDailyWeatherInfo(responseData){
				var tableCols = ["Date", "Status", "Summary", "TemperatureHigh", "TemperatureLow", "Wind Speed"];
				html += "<div class='tableDiv'>";
				html += "<table class='tableLayout'><tr>";
				for (i = 0; i < tableCols.length; i++)
					html += "<th class='tableLayout'>" + tableCols[i] + "</th>";
				tableRows = responseData.daily.data;
				latitideVal = responseData.latitude;
				longitudeVal = responseData.longitude;
				var weatherIconMap = {};
				weatherIconMap['clear-day'] = "https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-12-512.png";
				weatherIconMap['clear-night'] = "https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-12-512.png";
				weatherIconMap['rain'] = "https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-04-512.png";
				weatherIconMap['snow'] = "https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-19-512.png";
				weatherIconMap['sleet'] = "https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-07-512.png";
				weatherIconMap['wind'] = "https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-27-512.png";
				weatherIconMap['fog'] = "https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-28-512.png";
				weatherIconMap['cloudy'] = "https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-01-512.png";
				weatherIconMap['partly-cloudy-day'] = "https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-02-512.png";
				weatherIconMap['partly-cloudy-night'] = "https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-02-512.png";
				for (i = 0; i < tableRows.length; i++){
					html += "<tr class='tableLayout'>";
					tableRow = tableRows[i];
					if (tableRow['time'] != ""){
						var date = new Date(tableRow['time'] * 1000)
						var year = date.getFullYear();
						var month = date.getMonth();
						var day = date.getDate();
						if (month < 10)
							month = "0" + month;
						if (day < 10)
							day = "0" + day;
						formattedDate = year + "-" + month + "-" + day;
						html += "<td class='tableLayout'>" + formattedDate + "</td>";
					}
					else
						html += "<td class='tableLayout'></td>";
					if (tableRow['icon'] != "")
						html += "<td class='tableLayout'><img src='" + weatherIconMap[tableRow['icon']] + "' width='30' height='30'></td>";
					else
						html += "<td class='tableLayout'></td>";
					if (tableRow['summary'] != "")
						html += "<td class='tableLayout'><a style='text-decoration: none; color:white;' href='?fetchDaily=true&timeVal=" + tableRow['time'] + "&latitudeData=" + latitideVal + "&longitudeData=" + longitudeVal +"'>" + tableRow['summary'] + "</a></td>";
					else
						html += "<td class='tableLayout'></td>";
					if (tableRow['temperatureHigh'] != "")
						html += "<td class='tableLayout'>" + tableRow['temperatureHigh'] + "</td>";
					else
						html += "<td class='tableLayout'></td>";
					if (tableRow['temperatureLow'] != "")
						html += "<td class='tableLayout'>" + tableRow['temperatureLow'] + "</td>";
					else
						html += "<td class='tableLayout'></td>";
					if (tableRow['windSpeed'] != "")
						html += "<td class='tableLayout'>" + tableRow['windSpeed'] + "</td>";
					else
						html += "<td class='tableLayout'></td>";
				}
				html += "</tr></table></div>";
				document.getElementById('content').innerHTML = html;
			}

		</script>

		<?php
			$addressVal = "";
			$addressField = "";
			if (isset($_GET['search']) && !isset($_GET['currentLocation'])){
				fetchLatAndLong();
			}
			if (isset($_GET['search']) && isset($_GET['currentLocation'])){
				$currentLocData = $_GET['lat'] . "," . $_GET['lng'];
				fetchWeatherInfo($currentLocData);
			}
			if (isset($_GET['fetchDaily'])){
				$latitude = $_GET['latitudeData'];
				$longitude = $_GET['longitudeData'];
				$latAndLng = $latitude . "," . $longitude;
				fetchDailyInfo($latAndLng);
			}

			function fetchLatAndLong(){
				$streetVal = $_GET['street'];
				$cityVal = $_GET['city'];
				$stateVal = $_GET['state'];
				if (!empty($streetVal) || !empty($cityVal) || !empty($stateVal)){
					$addressVal = $streetVal . "," . $cityVal . "," . $stateVal;
					$addressField = urlencode($addressVal);
					$geoApiKey = "AIzaSyBSFftOFjrLIC0PaXdHmrrhUj491GXFy4c";
					$geourl = "https://maps.googleapis.com/maps/api/geocode/json?address={$addressField}&key={$geoApiKey}";
					$jsonData = file_get_contents($geourl);
					$response = json_decode($jsonData, true);
					if ($response['status'] == 'OK'){
						$temp = $response['results'][0]['geometry']['location'];
						$latitude = isset($temp['lat']) ? $temp['lat'] : "";
						$longitude = isset($temp['lng']) ? $temp['lng'] : "";
						if (!empty($latitude) && !empty($longitude)){
							$latAndLong = $latitude . "," . $longitude;
							fetchWeatherInfo($latAndLong);
						}
					}
				}
			}

			function fetchWeatherInfo($locationData){
				$weatherApiKey = "933baf8f9ced5b349981e7225d8b7339";
				$weatherParameter = $weatherApiKey . "/" . $locationData;
				$weatherurl = "https://api.forecast.io/forecast/{$weatherParameter}?exclude=minutely,hourly,alerts,flags";
				$jsonInfo = file_get_contents($weatherurl);
				echo "<script type = 'text/javascript'> displayWeatherCard($jsonInfo); </script>";
			}

			function fetchDailyInfo($location){
				$weatherDailyKey = "933baf8f9ced5b349981e7225d8b7339";
				$time = $_GET['timeVal'];
				$weatherDailyParameter = $weatherDailyKey . "/" . $location . "," . $time;
				$weatherLink = "https://api.darksky.net/forecast/{$weatherDailyParameter}?exclude=minutely";
				$json = file_get_contents($weatherLink);
				echo "<script type = 'text/javascript'> displayDailyWeatherDetail($json); </script>";
			}
		?>

	</body>
</html>