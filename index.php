<!doctype html>
<html>
<!--
CS 80 : 1697-8 Vicencio, John - Project (CSS)
Project: Search Engine Web App
Technologies: HTML5, CSS3, PHP, SQL (MySQL)
Introduction: The SMCoogle Search Engine Web application is a new search engine 
where consumers can add any websites to be indexed. The URL will be inserted to 
a database using PHP. The display of the web page uses HTML5 and CSS3. The web app
responses to the size of a device so that consumers can use it on a smartphone. 
Documentation see About page.
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
	<form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> 
	<p><label>
		<input type="text" name="keyword" value="<?php echo $_GET['keyword']; ?>" placeholder="Type your search keyword here"> 
	</label>
	<input type="submit" name="submit" value="Search"></p>
	</form>
	<?php
	// Connect to database
	if (isset($_GET["submit"])) {
		// Connect to database
		include("include/dbconnect.php");
		
		// No need to create a database since this hosting service assigns one
		
		// Create table 
		include("include/dbcreatetable.php");
		
		// Search query
		include("include/dbsearchquery.php");
		
		// Display a message if there is keyword is empty
		if (($_GET["keyword"]) == "") {
			echo "<p><strong>You didn't enter a search keyword</strong>.</p>";
			echo "<p><aside id='center'><img src='./image/unsplash-dontjuststandthere-JeffSheldon.jpg' alt='Do not just stand there'></aside></p>";	
		}
	}
	else {
		// Display a place holder image no search was made
		echo '<aside id="center"><img src="image/unsplash-computermackeyboard-JeffSheldon.jpg" alt="Computer and keyboard"></aside>';	
	}

	?>
	</section>
	<footer>
		<?php include("include/footer.php"); ?>
	</footer>
	</div>
</body>
</html>