<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="file:///C|/Users/patel/Documents/favicon.ico">

    <title>
    <?php 
        if (!isset($_GET['page']))
        echo "Welcome to Vatsal's Homepage!";
    ?>
        </title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./assets/css/justified-nav.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Welcome To My Homepage</h3>
		  <?php include("navigation.php");?>
      </div>
	 <?php
		if (!isset($_GET['page']))
			include("default.php");
		else
		{
			switch($_GET['page'])
			{
				case "work":
					include("work.php");
					break;
				case "school":
					include("school.php");
					break;
				case "hobbies":
					include("hobbies.php");
					break;
				case "movies":
					include("movies.php");
					break;
				case "contact":
					include("contact.php");
					break;

				default:
					include("default.php");        
			}
		}
	?>
    </div>
  </body>
</html>
