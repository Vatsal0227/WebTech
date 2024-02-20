<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Form</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="./assets/css/styles.css" rel="stylesheet">
</head>
<body>
	<div id="wrapper">
	<div id="page-wrapper">
	<div id="page-inner">
	<?php
		if(!isset($_POST['submit'])) {
			echo '
		<form id="contact" method="post" action="./index.php">
			<div class="form-group">
				<label for="firstName">First Name</label>
				<input name="firstName" type="text" class="form-control" id="firstName" placeholder="First Name">
				<p id="firstNameStatus"></p>
				
				<label for="lastName">Last Name</label>
				<input name="lastName" type="text" class="form-control" id="lastName" placeholder="Last Name">
				<p id="lastNameStatus"></p>
				
				<label for="phoneNo">Phone Number</label>
				<input name="phoneNo" type="phoneNo" class="form-control" id="phoneNo" placeholder="Phone Number">
				<p id="phoneNoStatus"></p>
				
				<label for="email">Email Address</label>
				<input name="email" type="email" class="form-control" id="email" placeholder="Email">
				<p id="emailStatus"></p>
				
				<label for="comments">Comments</label>
				<input name="comments" type="comments" class="form-control" id="comments" placeholder="Comments">
				<p id="commentsStatus"></p>
			</div>
			<button name="submit" id="submit" value="submit">Submit</button>
		</form>';
		}
		if (isset($_POST['submit'])) {
			if($_POST['submit']=="submit") {
				echo "<div>First Name is: $_POST[firstName]</div>";
				echo "<div>Last Name is: $_POST[lastName]</div>";
				echo "<div>Phone Number is: $_POST[phoneNo]</div>";
				echo "<div>Email is: $_POST[email]</div>";
				echo "<div>Comments are: $_POST[comments]</div>";
				echo "<div>Submit is: $_POST[submit]</div>";
			}
		}
	?>
	</div>
	</div>
	</div>
</body>
</html>
<script src="./assets/js/validation.js"></script>
