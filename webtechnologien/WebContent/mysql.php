<!-- DATABASE exists -->
<?php 

$con=mysql_connect("localhost","root","mastrear");
if(!$con)
	{
	die('Could not connect: '.mysql_error());
	}

if	(mysql_query("CREATE	DATABASE	WEBTEC",$con))	
		{		echo	"Database	created";	}	
else
		{		echo	"Error	creating database:	"	.	mysql_error();}	
	//	Create	table
	mysql_select_db("WEBTEC",	$con);	
	$sql	=	"CREATE	TABLE	Weather
				(windStrength int,	
				windDirection varchar(50),	
				airPressure int,	
				temperature int,	
				clouds varchar(50),	
				rain int,	
				waveHeight int,	
				waveDirection varchar(50),	
				dateInput varchar(50))";	
	//	Execute	query
if (mysql_query($sql, $con))
  {
  echo "Table Weather created successfully";
  }
else
  {
  echo "Error creating table: " . mysql_error();
  }	
	
?>	



<!-- //am Ende connection schließen -->
<?php
mysql_close($con);
?>