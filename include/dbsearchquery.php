<?php
	// Proceed with a search query if keyword is not empty
	if ($_GET["keyword"]) {
		$keyword = htmlspecialchars($_GET["keyword"]);

		// Query that selects rows with keyword search
		$querysearch = "SELECT * FROM $tablename WHERE pagecontent 
					 LIKE '%$keyword%'";
		$queryresult = $dbconnect->query($querysearch);	

		if ($queryresult->num_rows > 0) {
			// Display result
			while($row = $queryresult->fetch_assoc()) {
				// Count how many keywords found 
				$queryresultcount = substr_count($row[pagecontent], $keyword);
				// Total of counts
				$querytotalcount += $queryresultcount;
				// Collect all results
				if ($queryresultcount > 0) {
					$displayresult .= "<p><strong>Found $queryresultcount: <a href='$row[pageurl]'>$row[pageurl]</a></strong></p>";
				}
			}
			// Display details of result
			echo "<p>You have searched for <strong>$keyword</strong> and found " 
				 . "a <strong>total of $querytotalcount</strong>.</p>";
			echo $displayresult;
		} 
		else {
			echo "<p><strong>We didn't find '$keyword' at this time</strong></p>";
		}
		echo '<aside id="center" class="smaller"><img src="image/unsplash-lookingatmap-SylwiaBartyzel.jpg" alt="Looking at a map"></aside>';

	} 
	$dbconnect->close();
?>
