<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>elfort</title>
<?php
// Functions that hooks in scripts that are sent through functions.php file
 wp_head(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">

<!-- GoogleFonts don't need to be enqueued -->
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">

</head>
<body>


<!----------------------------------- HEADER  ----------------------------------->

<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>

		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone">
				<?php wp_nav_menu(
	array(
		'theme_location' => 'top-menu',
		'menu-class' => 'a'
	)
);
?>
		</li>
			</ul>
		</div>
	</div>
	</nav>

</div>
</header>