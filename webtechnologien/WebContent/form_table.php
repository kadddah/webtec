<?php
	$windStrength = '';
	$windDirection = '';
	$airPressure = ''; 
	$temperature = ''; 
	$clouds = '';
	$rain = '';
	$waveHeight = '';
	$waveDirection = '';
	$dateInput = '';

	
/*

if(isset($_POST['submit']))
	{
		include("db_save_form.php");
		include("db_auslesen.php");
		
	}
	
*/
?>   

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Logbook: Bootstrap, from Twitter</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="logbook webtec">
<meta name="author" content="Sven Weiser, Agnes Klein, Katharina Imhof">

<!-- Le styles -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="favicon.ico">
</head>

<body>
<?php $var = ""; ?>

<div id="formDiv">

<form action="" id="send-form" method="post" class="navbar-form pull-left">
<!-- <form id="send-form" action="<?php //echo $_SERVER['PHP_SELF']; ?>" method="post" class="navbar-form pull-left"> -->


			<table id="weather">
				<tr>
					<td>Wind Strength</td>
					<td><input type="text" class="span2" name="wind_strength" value="<?php echo $windStrength; ?>"></td>
					<td>km/h  <?php echo $var; ?></td>
				</tr>
				<tr>
					<td>Wind Direction</td>
					<td>
				
						<div class="btn-group">
							<select class="btn dropdown-toggle span2" name="wind_direction" size="1" >
								
								
								<?php
								
								switch($windDirection) {
									case 'North':
										echo '<option value="North" selected>North</option>
												<option value="East">East</option>
												<option value="South">South</option>
												<option value="West">West</option>
												<option value="North-West">North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case '':
										echo '<option value="North" selected>North</option>
												<option value="East">East</option>
												<option value="South">South</option>
												<option value="West">West</option>
												<option value="North-West">North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case 'East':
										echo '<option value="North" >North</option>
												<option value="East" selected>East</option>
												<option value="South">South</option>
												<option value="West">West</option>
												<option value="North-West">North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case 'South':
										echo '<option value="North" >North</option>
												<option value="East">East</option>
												<option value="South" selected>South</option>
												<option value="West">West</option>
												<option value="North-West">North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case 'West':
										echo '<option value="North" >North</option>
												<option value="East">East</option>
												<option value="South">South</option>
												<option value="West" selected>West</option>
												<option value="North-West">North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case 'North-West':
										echo '<option value="North" >North</option>
												<option value="East">East</option>
												<option value="South">South</option>
												<option value="West">West</option>
												<option value="North-West" selected>North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case 'North-East':
										echo '<option value="North" >North</option>
												<option value="East">East</option>
												<option value="South">South</option>
												<option value="West">West</option>
												<option value="North-West">North-West</option>
												<option value="North-East" selected>North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case 'South-West':
										echo '<option value="North" >North</option>
												<option value="East">East</option>
												<option value="South">South</option>
												<option value="West">West</option>
												<option value="North-West">North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West" selected>South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case 'South-East':
										echo '<option value="North" >North</option>
												<option value="East">East</option>
												<option value="South">South</option>
												<option value="West">West</option>
												<option value="North-West">North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East" selected>South-East</option>';
										break;
									
								}
								
								?>
							</select>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Air Pressure</td>
					<td><input type="text" class="span2" name="air_pressure" value="<?php echo $airPressure; ?>"></td>
					<td></td>
				</tr>
				<tr>
					<td>Temperature</td>
					<td><input type="text" class="span2" name="temperature" value="<?php echo $temperature; ?>"></td>
					<td>C&ordm;</td>
				</tr>
				<tr>
					<td>Clouds</td>
					<td><input type="text" class="span2" name="clouds" value="<?php echo $clouds; ?>"></td>
					<td></td>
				</tr>
				<tr>
					<td>Rain</td>
					<td><input type="text" class="span2" name="rain" value="<?php echo $rain; ?>"></td>
					<td>mm</td>
				</tr>
				<tr>
					<td>Wave Height</td>
					<td><input type="text" class="span2" name="wave_height" value="<?php echo $waveHeight; ?>"></td>
					<td>m</td>
				</tr>
				<tr>
					<td>Wave Direction</td>
					<td>
						<div class="btn-group">
							<select class="btn dropdown-toggle span2" name="wave_direction" size="1">
								<?php
								
								switch($waveDirection) {
									case 'North':
										echo '<option value="North" selected>North</option>
												<option value="East">East</option>
												<option value="South">South</option>
												<option value="West">West</option>
												<option value="North-West">North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case '':
										echo '<option value="North" selected>North</option>
												<option value="East">East</option>
												<option value="South">South</option>
												<option value="West">West</option>
												<option value="North-West">North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case 'East':
										echo '<option value="North" >North</option>
												<option value="East" selected>East</option>
												<option value="South">South</option>
												<option value="West">West</option>
												<option value="North-West">North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case 'South':
										echo '<option value="North" >North</option>
												<option value="East">East</option>
												<option value="South" selected>South</option>
												<option value="West">West</option>
												<option value="North-West">North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case 'West':
										echo '<option value="North" >North</option>
												<option value="East">East</option>
												<option value="South">South</option>
												<option value="West" selected>West</option>
												<option value="North-West">North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case 'North-West':
										echo '<option value="North" >North</option>
												<option value="East">East</option>
												<option value="South">South</option>
												<option value="West">West</option>
												<option value="North-West" selected>North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case 'North-East':
										echo '<option value="North" >North</option>
												<option value="East">East</option>
												<option value="South">South</option>
												<option value="West">West</option>
												<option value="North-West">North-West</option>
												<option value="North-East" selected>North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case 'South-West':
										echo '<option value="North" >North</option>
												<option value="East">East</option>
												<option value="South">South</option>
												<option value="West">West</option>
												<option value="North-West">North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West" selected>South-West</option>
												<option value="South-East">South-East</option>';
										break;
									case 'South-East':
										echo '<option value="North" >North</option>
												<option value="East">East</option>
												<option value="South">South</option>
												<option value="West">West</option>
												<option value="North-West">North-West</option>
												<option value="North-East">North-East</option>
												<option value="South-West">South-West</option>
												<option value="South-East" selected>South-East</option>';
										break;
									
								}
								
								?>
							</select>
						</div>
					</td>
					
					<td></td>
				</tr>
				<tr>
					<td>Date</td>
					<td><input class="span2" type="datetime-local" name="date_input" value="<?php echo $dateInput; ?>"></td>
					<td></td>
				</tr>
			</table>
			<!-- AJAX: remove send button
			<button type="submit" name="submit" class="btn btn-info">Submit Data</button>
			-->
		</form>
	
</div>	
			<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>

	<script>

			/* ausf�hren, wenn html-seite geladen wurde */
		$(document).ready(function()
		{
		
		
			// watch textarea for release of key press
			$('#send-form').keyup(function(e) {
				if (e.keyCode == 13) { //Enter is pressed
			
					/*var dataContent = 'wind_strength=' + $('#wind_strength').val() + 'wind_direction=' + $('#wind_direction').val() + 
						'air_pressure=' + $('#air_pressure2').val() + 'temperature=' + $('#temperature').val() + 
						'clouds=' + $('#clouds').val() + 'rain=' + $('#rain').val() + 'wave_height=' + $('#wave_height').val() +
						'wave_direction=' + $('#wave_direction').val() + 'date_input=' + $('#date_input').val(),
						*/
					var dataContent = 'wind_strength=' + wind_strength + 'wind_direction=' + wind_direction + 'air_pressure=' + air_pressure2 + 'temperature=' + temperature + 'clouds=' + clouds + 'rain=' + rain + 'wave_height=' + wave_height + 'wave_direction=' + wave_direction + 'date_input=' + date_input;
						
			
					/* ajax objekt zum aufruf & versand an das skript */
					$.ajax({
						type: "POST",
						url: "db_save_form.php",
						data: dataContent,
						success: function(msg)
						{
							/* form-div verstecken, seite nachladen & wieder einblenden (2000 ms) */
							$("#formDiv").hide().fadeIn(2000);
						}
					});
					
					/* wichtig!
					sonst schickt der browser das formular ab und
					und ruft die seite auf die bei action="" hinterlegt wurde.
					dann verl�sst er n�mlich die bisherige seite... */
					return false;
				
				}

			});

		});
	</script>
</body>
</html>