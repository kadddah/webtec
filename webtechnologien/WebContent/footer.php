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
<link href="bootstrap/css/footer.css" rel="stylesheet">
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

	 <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted counter">
		<?php
			$hit_count = @file_get_contents('count.txt'); 
			echo $hit_count; 
			$hit_count++; 
			@file_put_contents('count.txt', $hit_count); 
			
		?>
		</p>
      </div>
    </div>
	
</body>
</html>