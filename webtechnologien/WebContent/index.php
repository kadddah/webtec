
<!-- DATABASE -->
<?php //include("mysql.php"); ?>
<!-- /DATABASE -->

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

	


if(isset($_POST['submit']))
	{
		include("form.php");
		include("auslesen.php");
		
	}
	

?>  



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta name="viewport" content="width=device-width, initial-scale = 1.0; maximum-scale=1.0, user-scalable=no" />
<META NAME="Description" CONTENT="The best Website of Seamaps an Weatherdata in the World!">
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>WEBTEC</title>
<link rel="stylesheet" type="text/css" href="content/style.css" />
<link rel="stylesheet" type="text/css" href="content/css/bootstrap.min.css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="content/css/style703a.css?230984" />

<link href="content/css/bootstrap.css" rel="stylesheet">

<link rel="shortcut icon" type="image/x-icon" href="content/rabbit.ico?1234">

<script src="content/js/jquery-1.8.2.min.js"></script>
<script src="content/js/jquery.easing.1.3.js"></script>
<script src="content/js/waypoints.min.js"></script>
<script src="content/js/jquery.parallax-1.1.3.js"></script>
<script src="content/js/webtec.js"></script>

</head>
<body name="top">
<div class="lock-header hidden-phone">
	<div class="container">
		<div class="row">
			<div class="span4 offset2">
				<h4>Where will you go to?</h4>
			</div>
			<div class="linkNav">
				&#9830;
				<a href="#top">Go up!</a>
				&#9830;
				<a href="#dataForm" >Save Data</a> 
				&#9830;
				<a href="#team" class="team-link">Show Team</a>
				&#9830;
			</div>
			
		</div>
	</div>
</div>
<div class="page-wrapper">
	<div class="agency-wrap">
		<div class="container page-container home-container">
			<div class="row">
				<div class="span12">
					<div class="top-nav">
						<a href="index.php" class="logo-link">
							<img src="content/images/logo.png" alt="webtec">
						</a>
						<ul class="nav nav-home">
							<li>
								<a href="#dataForm" class="dataForm-link">Dataform</a>
							</li>
							<li>
								<a href="#team" class="team-link">Team</a>
							</li>
														
						</ul>
					</div>
					<div class="header-main hidden-phone">
						<h1>WEBTEC</h1>
						<h2>Data & Seamap</h2>
						<p>
							Welcome! 
						</p>
						
					</div>
					
					<div class="header-main-phone visible-phone">
						<h1>WEBTEC</h1>
						<h2>Data & Seamap</h2>
						<p>
							Welcome!  
						</p>
						
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<a href="#feature-set" class="down-tab hidden-phone" name="feature-set">
		Map 
		<i class="arrow arrow-down">&nbsp;</i>
	</a>
	<div class="full-width-features feature-1">
		<div class="container">
			<div class="row">
				<div class="span12">
					<h1>Le Beautiful Map</h1>
					asdfasdf
				</div>
			</div>
			<div class="row">
				<div class="span12">
					
				</div>
				<div class="span3">
					
				</div>
				
				
				
			</div>
		</div>
	</div>
	<div class="full-width-features feature-2">
		<div class="container" name="dataForm">
			<?php $var = ""; ?>
			<div class="row">
				<div class="span12">
				<h1>Le Beautiful Form</h1>
				Write down your data and save with 'ENTER'!
				</div>
			</div>
			
			
						
			<!-- Le form -->
			<div id="formDiv" >

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
		
		</div>
	</div>
	
	<div class="container call-to-action">
		<h1>SAILING <br class="visible-phone"> IS <br class="visible-phone"> FUN</h1>
		<h2>To the Top</h2>
		<a href="#top" class="scroll-top">
			YES, PLEASE! <i class="arrow arrow-up">&nbsp;</i>
		</a>
	</div>
	
		
<div class="footer" name="team">
	
	<div class="container">
		<div class="copyright">
			
			<p>
				WEBTEC 2013: Sven Weiser, Agnes Klein, Katharina Imhof
			</p>
			
			<p>
			<?php
			$hit_count = @file_get_contents('count.txt'); 
			echo $hit_count; 
			$hit_count++; 
			@file_put_contents('count.txt', $hit_count); 
			?>
			</p>
		</div>

	</div>
</div>
</div>

</body>

</html>