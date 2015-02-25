<!doctype html>
<html>
<!--
CS 80 : 1697-8 Vicencio, John - Project (CSS)
Project: Search Engine Web App
Technologies: HTML5, CSS3, PHP, SQL (MySQL)
-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<title>John Vicencio's Search Engine for SMC CS 80</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container">
	<header>	
	<nav>
		<?php include("include/nav.php"); ?>
	</nav>
	</header>
	<section>
	<h1>Add URL</h1>
	<form method="POST" action="inserturl.php"> 
	<p><label>	
		<input type="url" name="url" value="<?php echo $_POST['url']; ?>" placeholder="Add a URL website"> 
	</label>
	<input type="submit" name="submit" value="Add"></p>
	</form>
	<?php
	// Don't display when there's a search 
	if (empty($_POST["submit"])) {
    	echo '<aside id="center"><img src="image/unsplash-oldtypewriter-FlorianKlauer-cropped2.jpg" alt="Old typewriter"></aside>';
	}
	?>
	<p><a href="index.php">go back</a></p>
	</section>
	<footer>
		<?php include("include/footer.php"); ?>
	</footer>
	</div>
</body>
</html>