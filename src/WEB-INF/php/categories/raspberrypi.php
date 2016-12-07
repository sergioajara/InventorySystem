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

        <!-- Projects Row (items 1-3) -->
        <div class="row">

	    <!-- Item 1 - 4" Rpi LCD -->
            <div class="col-md-4 portfolio-item">
                <!-- Image -->
	        <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    4" Rpi LCD <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p>4" LCD Monitor for use with Raspberry Pi system</p>
            </div>

            <!-- Item 2 - Audio-technica Microphone -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;"  alt="">
                <h3>
		    <!-- Item name and request button-->
                    Audio-technica Microphone <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

            <!-- Item 3 - Canakit Power Supply -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;"  alt="">
                <h3>
		    <!-- Item name and request button-->
                    Canakit Micro USB Power Supply <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

        </div>
        <!-- /.row -->

        <!-- Projects Row (items 4-6) -->
        <div class="row">

	    <!-- Item 4 - Cirrus Audio Card -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Cirrus Logic Audio Card <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Item 5 - DFROBOT -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    DFROBOT Expansion Shield X300 <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Item 6 - Kootek Wifi -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Kootek Raspberry Pi Wifi <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

        </div>

        <!-- Projects Row (items 7-9) -->
        <div class="row">

	    <!-- Item 7 - MB Techworks Kit -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    MB Techworks Raspberry Pi Kit <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Item 8 - Pi Camera Board -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Pi Camera Board <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Item 9 - NoIR Camera Board -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Pi NoIR Camera Board <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

        </div>
        <!-- /.row -->
		
	<!-- Projects Row (items 10-12) -->
        <div class="row">
	    <!-- Item 10 - Raspberry Pi -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Raspberry Pi <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Item 11 - Raspberry Pi 2 -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Raspberry Pi 2 <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Item 12 Pi Display Adapter -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Raspberry Pi Display Adapter <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>

            </div>
        </div>
        <!-- /.row -->
		
	<!-- Projects Row (items 13-15) -->
        <div class="row">

	    <!-- Item 13 - Enclosure Clear -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Raspberry Pi Enclosure Clear <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Item 14 - Raspirobot Board -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Raspirobot Board <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Item 15 - Sennheiser Headphones -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Sennheiser Headphones <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

        </div>
        <!-- /.row -->
		
	<!-- Projects Row (items 16-18) -->
        <div class="row">

	    <!-- Item 16 - Sparkfun Joystick Shield Kit -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Sparkfun Joystick Shield Kit <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Item 17 - Sparkfun Midi Shield -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Sparkfun Midi Shield <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Item 18 - Sparkfun Voicebox Shield -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Sparkfun Voicebox Shield <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

        </div>
        <!-- /.row -->
		
	<!-- Projects Row (items 19-21) -->
        <div class="row">

	    <!-- Item 19 - Touchscreen Display -->
            <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Touchscreen LCD Display <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Item 20 - Vilros Raspberry Pi 2 -->
	    <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Vilros Raspberry Pi 2 (In Case) <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

	    <!-- Item 21 - Vilros Pi Starter Kit -->
	    <div class="col-md-4 portfolio-item">
	        <!-- Image -->
                <img class="img-responsive" src="/CSITIS/Resources/images/Missing.jpg" style="height:300px;" alt="">
                <h3>
		    <!-- Item name and request button-->
                    Vilros Raspberry Pi 2 Starter Kit <button type="button" class="btn btn-primary">Request</button>
                </h3>
		<!-- Description -->
                <p><!-- Description goes here, if needed --></p>
            </div>

        </div>
        <!-- /.row -->

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
