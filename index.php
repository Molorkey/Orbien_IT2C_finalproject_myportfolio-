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
			<img src="images/1.png">
			<div class="text-wrapper">
				<h2 id="first">This is Choco</h2>
			<div class="content">

				<?php // xml file
					$file = simplexml_load_file('files/portfolio.xml');
				?>

				<p> Shown here is a picture of my cat Choco, who is very talkative and enjoys playing with me all of the time, resulting in me getting scratched. She also enjoys cuddling with her sister all of the time. She is a genuine black puspin of the purest kind.We adopted them since the cats mother was unable to care for them, and I had always wanted a cat to play with; fortunately, we happened to be in the area when they were available for adoption. Choco is a very social cat who enjoys going outside even though she is not permitted to do so since she frequents filthy areas and returns home with dirt on her coat and fur. But this cat holds a special place in my heart since she has helped me get through some difficult times throughout this pandemic.</p>
				
			</div>
		</div>		
	</div>
</body>
		









		