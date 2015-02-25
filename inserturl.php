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
	<h2>Thank you!</h2>
	<?php
		// Display a prompt if input box is empty
		if ($_POST["url"] == "") {
			echo "<p><strong>BUT you didn't enter anything</strong>. Please type a URL address.</p>";
			echo '<p><a href="addurl.php">ADD here</a> | ';
			echo '<a href="index.php">go home</a></p>';
		}
		else {
			// Connect to the database
			include("include/dbconnect.php");
			
			// Clean entered data first before inserting to database
			include("include/cleandata.php");
			$url = cleandata($_POST["url"]);
			$pagedata = cleandata(file_get_contents($url));
			$pagedata = str_replace("'","",$pagedata);	

			// Insert query
			$queryinsert = "INSERT INTO searchengine (pageurl, pagecontent) 
					   VALUES ('$url','$pagedata')"; 
			$queryresult = $dbconnect->query($queryinsert);		
			echo "<p>$url added.</p>";

			$dbconnect->close();
			echo '<p><a href="addurl.php">add more...</a>  | ';
			echo '<a href="index.php">go home</a></p>';
		}
	?>
	<?php
	// Don't display when there's a search 
	if (empty($_GET["submit"])) {
    	echo '<aside id="center"><img src="image/unsplash-oldtypewriter-FlorianKlauer-cropped2.jpg" alt="Old typewriter"></aside>';
	}
	?>
	</section>
	<footer>
		<?php include("include/footer.php"); ?>
	</footer>
	</div>
</body>
</html>
