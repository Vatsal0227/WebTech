<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Results Data</title>
</head>

<body>
	<?php
		if (isset($_GET['submit']) && $_GET['submit']=="submit") {
			echo "<div>First Name is: $_GET[firstName]</div>";
			echo "<div>Last Name is: $_GET[lastName]</div>";
			echo "<div>Phone Number is: $_GET[phoneNo]</div>";
			echo "<div>Email is: $_GET[email]</div>";
			echo "<div>Comments are: $_GET[comments]</div>";
			echo "<div>Submit is: $_GET[submit]</div>";
		}
		else
			echo "<h3>Please go back and fill out the form</h3>";
	?>
</body>
</html>