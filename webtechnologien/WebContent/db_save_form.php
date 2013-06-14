<?php



$wind_strength = $_POST["wind_strength"];
$wind_direction =	$_POST["wind_direction"];
$air_pressure =	$_POST["air_pressure"];
$temperature =	$_POST["temperature"];
$clouds =	$_POST["clouds"];
$rain =	$_POST["rain"];
$wave_height =	$_POST["wave_height"];
$wave_direction =	$_POST["wave_direction"];
$date_input =	$_POST["date_input"];

$id_count = @file_get_contents('count.txt'); 
echo("aaaaaaaaaaaaaaa" . $temperature);
$con=mysql_connect("localhost","root","mastrear");
if(!$con)
	{
	die('Could not connect: '.mysql_error());
	}
mysql_select_db("WEBTEC", $con);

$sql="INSERT INTO Weather(	windStrength, 
							windDirection, 
							airPressure, 
							temperature, 
							clouds,
							rain,
							waveHeight,
							waveDirection,
							dateInput,

							id)
VALUES
(	'$wind_strength',
	'$wind_direction',
	'$air_pressure',
	'$temperature',
	'$clouds',
	'$rain',
	'$wave_height',
	'$wave_direction',
	'$date_input',

	'$id_count'	)";
	
	if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
 }
//echo "records added";

mysql_close($con);

?>	