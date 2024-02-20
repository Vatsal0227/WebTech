<?php session_start();?>
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
		echo '<form id="contact" method="post" action="./index.php">';
			// First Name
			if (!isset($_GET['fName'])) {
				if (isset($_SESSION['fName'])) {
					echo '<div class="form-group">';
					echo '<label for="firstName">First Name</label>';
					echo '<input name="firstName" type="text" class="form-control" id="firstName" value="'.$_SESSION['fName'].'">';
					echo '<p id="firstNameStatus"></p>';
					echo '</div>';					
				}
				else {
					echo '<div class="form-group">';
					echo '<label for="firstName">First Name</label>';
					echo '<input name="firstName" type="text" class="form-control" id="firstName" placeholder="First Name">';
					echo '<p id="firstNameStatus"></p>';
					echo '</div>';					
				}
			}
			elseif (isset($_GET['fName'])) {
				if ($_GET['fName']=="fNameInvalid") {
					echo '<div class="form-group has-error">';
					echo '<label for="firstName">First Name</label>';
					echo '<input name="firstName" type="text" class="form-control" id="firstName" value="'.$_SESSION['fName'].'">';
					echo '<p class="alert-danger" id="firstNameStatus">Invalid characters for First Name!</p>';
					echo '</div>';
				}
				elseif ($_GET['fName']=="fNameNull") {
					echo '<div class="form-group has-error">';
					echo '<label for="firstName">First Name</label>';
					echo '<input name="firstName" type="text" class="form-control" id="firstName" placeholder="First Name">';
					echo '<p class="alert-danger" id="firstNameStatus">First Name cannot be Blank!</p>';
					echo '</div>';					
				}
			}
			
			// Last name
			if (!isset($_GET['lName'])) {
				if (isset($_SESSION['lName'])) {
					echo '<div class="form-group">';
					echo '<label for="lastName">Last Name</label>';
					echo '<input name="lastName" type="text" class="form-control" id="lastName" value="'.$_SESSION['lName'].'">';
					echo '<p id="lastNameStatus"></p>';
					echo '</div>';					
				}
				else {
					echo '<div class="form-group">';
					echo '<label for="lastName">Last Name</label>';
					echo '<input name="lastName" type="text" class="form-control" id="lastName" placeholder="Last Name">';
					echo '<p id="lastNameStatus"></p>';
					echo '</div>';
				}
			}
			elseif (isset($_GET['lName'])) {
				if ($_GET['lName']=="lNameInvalid") {
					echo '<div class="form-group has-error">';
					echo '<label for="lastName">Last Name</label>';
					echo '<input name="lastName" type="text" class="form-control" id="lastName" value="'.$_SESSION['lName'].'">';
					echo '<p class="alert-danger" id="lastNameStatus">Invalid characters for Last Name!</p>';
					echo '</div>';					
				}
				elseif ($_GET['lName']=="lNameNull") {
					echo '<div class="form-group has-error">';
					echo '<label for="lastName">Last Name</label>';
					echo '<input name="lastName" type="text" class="form-control" id="lastName" placeholder="Last Name">';
					echo '<p class="alert-danger" id="lastNameStatus">Last Name cannot be Blank!</p>';
					echo '</div>';	
				}
			}
			
			// Phone Numer
			if (!isset($_GET['pNum'])) 
				if (isset($_SESSION['pNum'])) {
					echo '<div class="form-group">';
					echo '<label for="phoneNo">Phone Number</label>';
					echo '<input name="phoneNo" type="phoneNo" class="form-control" id="phoneNo" value="'.$_SESSION['pNum'].'">';
					echo '<p id="phoneNoStatus"></p>';
					echo '</div>';					
				}
				else {
					echo '<div class="form-group">';
					echo '<label for="phoneNo">Phone Number</label>';
					echo '<input name="phoneNo" type="phoneNo" class="form-control" id="phoneNo" placeholder="Phone Number">';
					echo '<p id="phoneNoStatus"></p>';
					echo '</div>';
				}
			elseif (isset($_GET['pNum'])) {
				if ($_GET['pNum']=="pNumInvalid") {
					echo '<div class="form-group has-error">';
					echo '<label for="phoneNo">Phone Number</label>';
					echo '<input name="phoneNo" type="phoneNo" class="form-control" id="phoneNo" value="'.$_SESSION['pNum'].'">';
					echo '<p class="alert-danger" id="phoneNoStatus">Invalid Phone Number!</p>';
					echo '</div>';
				}
				elseif ($_GET['pNum']=="pNumNull"){
					echo '<div class="form-group has-error">';
					echo '<label for="phoneNo">Phone Number</label>';
					echo '<input name="phoneNo" type="phoneNo" class="form-control" id="phoneNo" placeholder="Phone Number">';
					echo '<p class="alert-danger" id="phoneNoStatus">Phone Number cannot be Blank!</p>';
					echo '</div>';					
				}
			}
			
			// Email
			if (!isset($_GET['email'])) {
				if (isset($_SESSION['email'])) {
					echo '<div class="form-group">';
					echo '<label for="email">Email Address</label>';
					echo '<input name="email" type="email" class="form-control" id="email" value="'.$_SESSION['email'].'">';
					echo '<p id="emailStatus"></p>';
					echo '</div>';
				}
				else {
					echo '<div class="form-group">';
					echo '<label for="email">Email Address</label>';
					echo '<input name="email" type="email" class="form-control" id="email" placeholder="Email">';
					echo '<p id="emailStatus"></p>';
					echo '</div>';
				}
			}
			elseif (isset($_GET['email'])) {
				if ($_GET['email']=="emailInvalid") {
					echo '<div class="form-group has-error">';
					echo '<label for="email">Email Address</label>';
					echo '<input name="email" type="email" class="form-control" id="email" value="'.$_SESSION['email'].'">';
					echo '<p class="alert-danger" id="emailStatus">Invalid Email!</p>';
					echo '</div>';
				}
				elseif ($_GET['email']=="emailNull") {
					echo '<div class="form-group has-error">';
					echo '<label for="email">Email Address</label>';
					echo '<input name="email" type="email" class="form-control" id="email" placeholder="Email">';
					echo '<p class="alert-danger" id="emailStatus">Email cannot be Blank!</p>';
					echo '</div>';					
				}
			}
			
			// Comments
			if (!isset($_GET['comments'])) {
				if (isset($_SESSION['comments'])) {
					echo '<div class="form-group">';
					echo '<label for="comments">Comments</label>';
					echo '<input name="comments" type="comments" class="form-control" id="comments" value="'.$_SESSION['comments'].'">';
					echo '<p id="commentsStatus"></p>';
					echo '</div>';					
				}
				else {
					echo '<div class="form-group">';
					echo '<label for="comments">Comments</label>';
					echo '<input name="comments" type="comments" class="form-control" id="comments" placeholder="Comments">';
					echo '<p id="commentsStatus"></p>';
					echo '</div>';
				}
			}
			elseif (isset($_GET['comments']) && $_GET['comments']=="commentsNull") {
				echo '<div class="form-group has-error">';
				echo '<label for="comments">Comments</label>';
				echo '<input name="comments" type="comments" class="form-control" id="comments" placeholder="Comments">';
				echo '<p class="alert-danger" id="commentsStatus">Comments cannot be Blank!</p>';
				echo '</div>';				
			}
			
			echo '<div class="form-group">';
			echo '<button name="submit" id="submit" value="submit">Submit</button>';
			echo '</div>';
		echo '</form>';
		}
		if (isset($_POST['submit'])) {
			if($_POST['submit']=="submit") {
				
				$nameRegex="/^[a-zA-Z-'']+$/";
				$emailRegex="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
				$phoneNoRegex="/^\d{10}$/";
				$errStatus=array();
				$firstName=$_POST['firstName'];
				$lastName=$_POST['lastName'];
				$phoneNo=$_POST['phoneNo'];
				$email=$_POST['email'];
				$comments=$_POST['comments'];
				//First Name
				if ($firstName==NULL)
					$errStatus[]="fName=fNameNull";
				elseif (!preg_match($nameRegex, $firstName)) {
					$errStatus[]="fName=fNameInvalid";
					$_SESSION['fName']=$firstName;
				}
				else
					$_SESSION['fName']=$firstName;
				//Last Name
				if ($lastName==NULL)
					$errStatus[]="lName=lNameNull";
				elseif (!preg_match($nameRegex, $lastName)) {
					$errStatus[]="lName=lNameInvalid";
					$_SESSION['lName']=$lastName;
				}
				else
					$_SESSION['lName']=$lastName;
				//Phone Number
				if ($phoneNo==NULL)
					$errStatus[]="pNum=pNumNull";
				elseif (!preg_match($phoneNoRegex, $phoneNo)) {
					$errStatus[]="pNum=pNumInvalid";
					$_SESSION['pNum']=$phoneNo;
				}
				else
					$_SESSION['pNum']=$phoneNo;
				//Email
				if ($email==NULL)
					$errStatus[]="email=emailNull";
				elseif (!preg_match($emailRegex, $email)) {
					$errStatus[]="email=emailInvlaid";
					$_SESSION['email']=$email;
				}
				else
					$_SESSION['email']=$email;
				//Comments
				if ($comments==NULL)
					$errStatus[]="comments=commentsNull";
				else
					$_SESSION['comments']=$comments;
				if(count($errStatus)>0) {
					$errString=implode("&", $errStatus);
					header("Location: https://ec2-3-144-162-172.us-east-2.compute.amazonaws.com/hw14/index.php?$errString");					
				}

				echo "<div>First Name is: $firstName</div>";
				echo "<div>Last Name is: $lastName</div>";
				echo "<div>Phone Number is: $phoneNo</div>";
				echo "<div>Email is: $email</div>";
				echo "<div>Comments are: $comments</div>";
				echo "<div>Submit is: $_POST[submit]</div>";
			}
		}
	?>
	</div>
	</div>
	</div>
</body>
</html>