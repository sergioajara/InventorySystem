<?php
	session_start();

	if((!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] == false || $_SESSION["isLoggedIn"] == null) && (!isset($_SESSION["isAdmin"]) || $_SESSION["isAdmin"] == false || $_SESSION["isAdmin"] == null)){
    error_log("[adminLanding.php] ERROR - User is not logged in and/or is not an admin. Unauthorized to access page.", 3, './logs/adminLanding.log');
    header('location: /CSITIS');
	}

	if(isset($_SESSION['username']))
		$username = $_SESSION['username'];
	else
		$username = NULL;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="CSITIS is a project started in Dr. Huissain's Software Engineering CSC 345/355 class.
                                      Used for requesting hardware from the Kutztown University CS department.">
		<meta name="author" content="Cassandra Guerrero, Sergio Jara, Cody Seyfert, Christopher Stiles">

		<!-- CSS Includes -->
		<link rel="stylesheet" href="/CSITIS/Resources/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/CSITIS/Resources/css/CSITIS_Style.css" />
		<!-- /CSS Includes -->
		<title>Admin: CSITIS</title>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
  				<!-- Brand and toggle get grouped for better mobile display -->
  				<div class="navbar-header">
      					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          					<span class="sr-only">Toggle navigation</span>
          					<span class="icon-bar"></span>
          					<span class="icon-bar"></span>
          					<span class="icon-bar"></span>
      					</button>
      					<a class="navbar-brand" href="/CSITIS">Computer Science Inventory</a>
  				</div>
  				<!-- Collect the nav links, forms, and other content for toggling -->
  				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      					<ul class="nav navbar-nav">
          					<li>
		                      <a href="catalog.php">All Categories</a>
          					</li>
                    <li>
                          <a href="form.php">Request Form</a>
                    </li>
      					</ul>
  				</div>
			</div>
		</nav>
    <!-- Page Content -->
    <div class="container bump">
      <div class = "one">
  				<table>
  					<tr>
  						<th>CSITIS Admin Portal &nbsp;</th>
  					</tr>
  					<tr height = "10px"></tr>
  					<tr>
  						<th colspan = "2" align = "center">
  							<input type = "button" class = "button1"
  								onclick = "location.href='http://csitis:nuwREBu2@acad.kutztown.edu/phpmyadmin/index.php/?db=CSITIS'"
  								value = "phpMyAdmin"/>
  						</th>
  					</tr>

  					<tr height = "10px"></tr>
  					<tr>
  						<th colspan = "2" align = "center">
  							<input type = "button" class = "button1"
  								onclick = "location.href='form.php'"
  								value = "Forms"/>
  						</th>
  					</tr>
  				</table>
  		</div>
		</div>
		<script type="text/javascript" src="/CSITIS/Resources/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="/CSITIS/Resources/js/bootstrap.js"></script>
	</body>
</html>
