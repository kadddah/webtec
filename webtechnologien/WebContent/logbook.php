<!-- WEBTEC Aufgabe Bootstrap -->
<!-- WEBTEC Aufgabe PHP -->

<!-- DATABASE -->
<?php //include("mysql.php"); ?>
<!-- /DATABASE -->

<?php
	$windStrength = '';
	$windDirection = 'North';
	$airPressure = ''; 
	$temperature = ''; 
	$clouds = '';
	$rain = '';
	$waveHeight = '';
	$waveDirection = '';
	$dateInput = '';

	


if(isset($_POST['submit']))
	{
		include("form.php");
		include("auslesen.php");
	}
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

	<?php include("header.php"); ?>
	
	<div class="container">

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="navbar-form pull-left">


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
								<option>North</option>
								<option>East</option>
								<option>South</option>
								<option>West</option>
								<option>North-West</option>
								<option>North-East</option>
								<option>South-West</option>
								<option>South-East</option>
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
					<td>C°</td>
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
								<option>North</option>
								<option>East</option>
								<option>South</option>
								<option>West</option>
								<option>North-West</option>
								<option>North-East</option>
								<option>South-West</option>
								<option>South-East</option>
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
			<button type="submit" name="submit" class="btn btn-info">Submit Data</button>
			
		</form>

	</div>
	<!-- /container -->
	
	<?php include("footer.php"); ?>

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>


</body>
</html>


<!-- WEBTEC Aufgabe HTML -->
<!-- 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Logbook</title>
</head>
<body>
	<form action=" ">
		<table id="weather">
			<tr>
				<td>Wind Strength</td>
				<td><input name="" type="text"></td>
			</tr>
			<tr>
				<td>Wind Direction</td>
				<td><input name="" type="text"></td>
			</tr>
			<tr>
				<td>Air Pressure</td>
				<td><input name="" type="text"></td>
			</tr>
			<tr>
				<td>Temperature</td>
				<td><input name="" type="text"></td>
			</tr>
			<tr>
				<td>Clouds</td>
				<td><input name="" type="text"></td>
			</tr>
			<tr>
				<td>Rain</td>
				<td><input name="" type="text"></td>
			</tr>
			<tr>
				<td>Wave Height</td>
				<td><input name="" type="text"></td>
			</tr>
			<tr>
				<td>Wave Direction</td>
				<td><input name="" type="text"></td>
			</tr>
			<tr>
				<td>Date</td>
				<td><input name="" type="datetime-local"></td>
			</tr>

		</table>
		
		<button id="save_weather">Save</button>
	</form>
</body>
</html>

 -->