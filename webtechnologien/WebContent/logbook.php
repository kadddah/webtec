<!-- WEBTEC Aufgabe Bootstrap -->
<!-- WEBTEC Aufgabe PHP -->
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

	<?php include("header.php"); ?>
	
	<div class="container">

		<form class="navbar-form pull-left">


			<table id="weather">
				<tr>
					<td>Wind Strength</td>
					<td><input type="text" class="span2"></td>
					<td></td>
				</tr>
				<tr>
					<td>Wind Direction</td>
					<td>
						<div class="btn-group">
							<select class="btn dropdown-toggle span2" name="wind_direction" size="1">
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
					<td><input type="text" class="span2"></td>
					<td></td>
				</tr>
				<tr>
					<td>Temperature</td>
					<td><input type="text" class="span2"></td>
					<td>C°</td>
				</tr>
				<tr>
					<td>Clouds</td>
					<td><input type="text" class="span2"></td>
					<td></td>
				</tr>
				<tr>
					<td>Rain</td>
					<td><input type="text" class="span2"></td>
					<td>mm</td>
				</tr>
				<tr>
					<td>Wave Height</td>
					<td><input type="text" class="span2"></td>
					<td>m</td>
				</tr>
				<tr>
					<td>Wind Strength</td>
					<td><input type="text" class="span2"></td>
					<td>km/h</td>
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
					<td><input class="span2" type="datetime-local"></td>
					<td></td>
				</tr>

			</table>
			<button type="submit" class="btn btn-info">Submit Data</button>
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