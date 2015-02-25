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
	<title>Contact Us on SMCoogle Search Engine</title>
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
	<h1>Contact</h1>
	<?php 
		if (isset($_POST["submit"])) {
			include("include/cleandata.php");
			$firstname = cleandata($_POST["firstname"]);
			$lastname = cleandata($_POST["lastname"]);
			$phone = cleandata($_POST["phone"]);
			$emailto = "johnvicencio@gmail.com";
			$emailfrom = cleandata($_POST["email"]);
			$message = htmlspecialchars($_POST["message"]);
			$subject = "Email Message from $emailto";
			$body = "$firstname $lastname with contact info $email $phone has sent you this message: $message";
			$headers = "From: $emailfrom" . "\r\n";
			
			// Send email
			mail($emailto,$subject,$body,$headers);
			
			// Display successful contact form submit
			echo "<p>Thank you $firstname $lastname for submitting your message.</p>";
			echo '<aside id="center"><img src="image/unsplash-oldtypewriter-FlorianKlauer-cropped2.jpg"></aside>';
			
		}
		else {
	?>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	<label>
		<input type="text" name="firstname" value="<?php echo $_POST['firstname']; ?>" placeholder="First name" pattern="[a-zA-Z0-9]+" title="Required. Only enter alpha numeric" required>
	</label>
	<label>
		<input type="text" name="lastname" value="<?php echo $_POST['lastname']; ?>" placeholder="Last name" pattern="[a-zA-Z0-9]+" title="Required. Only enter alpha numeric" required> 
	</label>
	<label>
		<input type="tel" name="phone" value="<?php echo $_POST['phone']; ?>" placeholder="XXX-XXX-XXXX" pattern="\d{3}[\-]\d{3}[\-]\d{4}" title="Follow a format: xxx-xxx-xxxx"> 
	</label>
	<label>
		<input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="Email address" required> 
	</label>
	<label>
		<textarea name="message" placeholder="Type your message" required><?php echo $_POST['message']; ?></textarea>
	</label>
	<p><input type="submit" name="submit" value="Submit"></p>
	</form>
	<?php } ?>
	</section>
	<footer>
		<?php include("include/footer.php"); ?>
	</footer>
	</div>
</body>
</html>