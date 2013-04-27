<?php

$con=mysql_connect("localhost","root","mastrear");
if(!$con)
	{
	die('Could not connect: '.mysql_error());
	}
mysql_select_db("WEBTEC", $con);

$result = mysql_query("SELECT * FROM weather");

if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}


 while($row = mysql_fetch_array($result))
	{
	$windStrength = $row['windStrength'];
	$windDirection = $row['windDirection'];
	$airPressure = $row['airPressure']; 
	$temperature = $row['temperature']; 
	$clouds = $row['clouds'];
	$rain = $row['rain'];
	$waveHeight = $row['waveHeight'];
	$waveDirection = $row['waveDirection'];
	$dateInput = $row['dateInput'];

	$idCount = $row['id'];
	}

	
	
mysql_close($con);

?>