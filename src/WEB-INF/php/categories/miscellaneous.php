<!DOCTYPE html>

<?php
session_start();
 
if((!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] == false || $_SESSION["isLoggedIn"] == null)) {
  header('location: /CSITIS');
}
 ?>

<html lang="en">
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
								  <a href="../catalog.html">All Categories</a>
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

        <!-- Projects Row - Items 1-3 -->
        <div class="row">

            <div class="col-md-4 portfolio-item">
	        <!-- Image -->    
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button -->
                    Leap Motion <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p>A motion sensing, hand-tracking controller for use with certain PC and MAC applications.</p>
            </div>

            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;"  alt="">
                <h3>
		    <!-- Item name and request button -->
                    Ravpower Power Bank <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p>A portable charger for mobile devices.</p>
            </div>

            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;"  alt="">
                <h3>
		    <!-- Item name and request button -->
                    Olympus PEN <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p>Olympus PEN E-PL1 Digital Camera</p>
            </div>

        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">

            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button -->
                    Ipevo Ziggi-HD System Camera <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p>Ziggi-HD Document Camera</p>
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
