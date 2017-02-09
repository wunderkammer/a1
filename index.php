<?php require('logic.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/a1.css">
<link href='//fonts.googleapis.com/css?family=Amatica SC' rel='stylesheet'>
</head>

<body>
<div class="about">
	<h1>Kristen Nyce</h1>
	<img src="/images/me.jpg" height="200px">
	<h1>About Me</h1>
	<div class="about_text">
	    <h3><?=$about?></h3>
	</div>
</div>

<div class="quote">
	<h1>Random Quote</h1>
	<h3><?=$quotes[$quote_index]?></h3>
</div>

</body>
</html>
