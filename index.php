<!doctype html>
<html lang="en">
  <head>
  		<meta charset="utf-8">
  		<title>Beats!</title>
  		<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  		<link rel="stylesheet" href="css/style.css">
  		<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans&display=swap" rel="stylesheet">
  </head>
	<header>
			
				
		<?php
		echo '<h1>My<span>Portfolio</span></h1>';
		?>
		
		<nav>
			<ul>
				
				<li><a href="index.php">Home</a><</li>
				<li><a href="nextpage.php">Nextpage</a><</li>
				<li><a href="profile.php">About Me</a><</li>
				
			</ul>
		</nav>
	</header>
	<body>
		<div class="content-wrapper">
			<?php echo '<img src="images/choco1.png"/>'; ?>
			<div class="text-wrapper">

				<?php
				echo '<h2 id="first">This is my Portfolio!</h2>';
				?>
			<div class="content">

				<?php // xml file

					$file = file_get_contents('files/portfolio.xml');
					echo '<h1 >Im a gamer and a</h1>';


				?>

				
			</div>
		</div>		
	</div>
</body>
		









		