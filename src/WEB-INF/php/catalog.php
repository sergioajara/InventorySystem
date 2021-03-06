<!DOCTYPE html>
<html lang="en">

<?php
   session_start();
 
if((!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] == false || $_SESSION["isLoggedIn"] == null)) {
  header('location: /CSITIS');
}

 ?>

	<head>
		<meta charset="utf-8"/>
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="CSITIS is a project started in Dr. Hussain's Software Engineering CSC 345/355 class.
                                      Used for requesting hardware from the Kutztown University CS department.">
		<meta name="author" content="Sergio Jara, Cody Seyfert, Cassandra Guerrero, Christopher Stiles">

		<!-- CSS Includes -->
		<link rel="stylesheet" href="/CSITIS/Resources/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/CSITIS/Resources/css/CSITIS_Style.css" />
		<!-- /CSS Includes -->
		<title>CSIT Inventory System</title>
	</head>
	<body>
		<div class="outerHeader">
			<div class="innerHeader">
        			<!-- Navigation -->
        			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
								  <a href="../php/catalog.php">All Categories</a>
                        					</li>
								
                    					</ul>
                				</div>
                				<!-- /.navbar-collapse -->
            				</div>
            				<!-- /.container -->
        			</nav>
      			</div>
		</div>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Inventory
                    <small>Category Name</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row - Categories 1-3 -->
        <div class="row">

	    <!-- Category 1 - Apple Products -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image link - Links to category page -->
	        <a href="/CSITIS/WEB-INF/php/categories/apple.php">
		<!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Apple.jpg" style="height:300px;" alt="">
                </a>
                <h3>
		    <!-- Link to full category page -->
                    <a href="/CSITIS/WEB-INF/php/categories/apple.php">Apple Devices</a>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Category 2 - Arduino -->
	    <div class="col-md-4 portfolio-item">
	        <!-- Image link - Links to category page -->
                <a href="/CSITIS/WEB-INF/php/categories/arduino.php">
		    <!-- Image  -->
                    <img class="img-responsive" src="/CSITIS/Resources/images/Arduino.jpg" style="height:300px;" alt="">
                </a>
                <h3>
		    <!-- Link to full category page -->
                    <a href="/CSITIS/WEB-INF/php/categories/arduino.php">Arduino</a>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Category 3 - Raspberry Pi -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image link - Links to category page -->
                <a href="/CSITIS/WEB-INF/php/categories/raspberrypi.php">
		    <!-- Image  -->
                    <img class="img-responsive" src="/CSITIS/Resources/images/RaspberryPi.jpg" style="height:300px;" alt="">
                </a>
                <h3>
		    <!-- Link to full category page -->
                    <a href="/CSITIS/WEB-INF/php/categories/raspberrypi.php">Raspberry Pi</a>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

        </div>
        <!-- /.row -->

        <!-- Projects Row - Categories 4-6-->
        <div class="row">

	    <!-- Category 4 - Nexus Devices - Currently only one Nexus Device exists in the catalog, so full category page exists but is not necessary
	      If the Department acquires more Nexus devices, request button should be deleted and Category link should be changed to "Nexus Devices"-->
            <div class="col-md-4 portfolio-item">
	        <!-- Image - Does not currently link to category page, but should if more Nexus Devices are obtained by the Department -->
                    <img class="img-responsive" src="/CSITIS/Resources/images/Nexus.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Link to full category page & request button - If Department obtains more Nexus Devices, "Asus Nexus 7" should be changed to 
		      "Nexus Devices", and should be turned into a link to the full category page (/WEB-INF/html/categories/nexus.html) -->
                    Asus Nexus 7 <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Category 5 - Laptops -->
	    <div class="col-md-4 portfolio-item">
	        <!-- Image link - Links to category page -->
                <a href="/CSITIS/WEB-INF/php/categories/laptop.php">
		    <!-- Image  -->
                    <img class="img-responsive" src="/CSITIS/Resources/images/Laptop.jpg" style="height:300px;" alt="">
                </a>
                <h3>
		    <!-- Link to full category page -->
                    <a href="/CSITIS/WEB-INF/php/categories/laptop.php">Laptops</a>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Category 6 - Miscellaneous -->
	    <div class="col-md-4 portfolio-item">
	        <!-- Image link - Links to category page -->
                <a href="/CSITIS/WEB-INF/php/categories/miscellaneous.php">
		    <!-- Image  -->
                    <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                </a>
                <h3>
		    <!-- Link to full category page -->
                    <a href="/CSITIS/WEB-INF/php/categories/miscellaneous.php">Miscellaneous</a>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Kutztown University 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
		<div class="outerBody"></div>

		<script type="text/javascript" src="Resources/js/bootstrap.js"></script>
	</body>
</html>
