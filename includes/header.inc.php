<?php include 'includes/functions.inc.php'; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jino Conklin</title>
	<link rel="stylesheet" href="css/style.css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Kameron:400,700|Nothing+You+Could+Do|Nunito:300' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
</head>
<body>
<section id="filler"></section>
<div id="main">
	<header>
		<div class="menu-icon"><i class="fa fa-bars"></i></div>
		<nav>
			<ul>
				
				<?php 
					foreach ($links as $link) {
				?>
				<li><a href="<?php echo $link . ".php"; ?>" <?php echo (check_page($link)) ? 'class="active"' : "" ; ?> title="<?php echo $link ?> page"><?php echo $link; ?></a></li>
				<?php
					}
	 			?>
			</ul>
		</nav>

		<div id="head">
			<div id="img">
				<img src="images/avatar.png" alt="">
			</div>  <!-- end img div -->
			<div id="logo">
				<h1><a href="index.php"><span class="logo1">conklin</span><span class="logo2">media</span></a></h1>
			</div>  <!-- end logo div -->
		</div>  <!-- end head div -->
	</header>
	
	<section id="wrapper">
