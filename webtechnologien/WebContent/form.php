<?php
$action = $_POST['action'];
$result = array();
switch($action) {
case('update'): include("auslesen.php");
case('send'):
$message = $_POST['message'];
if(($message) != "\n"){ 
fwrite(fopen('chat.txt', 'a'), $message); 
 }
break;
 }
echo json_encode($result);
?>

<?php
$id_count = @file_get_contents('count.txt'); 

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
(	'$_POST[wind_strength]',
	'$_POST[wind_direction]',
	'$_POST[air_pressure]',
	'$_POST[temperature]',
	'$_POST[clouds]',
	'$_POST[rain]',
	'$_POST[wave_height]',
	'$_POST[wave_direction]',
	'$_POST[date_input]',

	'$id_count'	)";
	
	if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
 }
//echo "records added";

mysql_close($con);

?>	