<?php
	require 'dbconn.php';
	db_connect();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="CSITIS is a project started in Dr. Huissain's Software Engineering CSC 345/355 class.
                                      Used for requesting hardware from the Kutztown University CS department.">
		<meta name="author" content="Sergio Jara, Cody Seyfert, Cassandra Guerrero, Christopher Stiles">

		<!-- CSS Includes -->
		<link rel="stylesheet" href="/CSITIS/Resources/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/CSITIS/Resources/css/CSITIS_Style.css" />
		<!-- /CSS Includes -->
		<title>CS/IT Inventory System</title>
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
		                      <a href="../html/catalog.html">All Categories</a>
          					</li>
                    <li>
                          <a href="#">Request Form</a>
                    </li>
      					</ul>
  				</div>
			</div>
		</nav>
    <!-- Page Content -->
    <div class="container bump">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Forms
                    <small class="formType">Request Form</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row theForm">
          <form action="getForm()" method="post">
            <div class="form-group">
             <label for="deviceID">Device ID:</label>
             <input type="text" class="form-control" id="deviceID" name="deviceID">
            </div>
            <button type="submit" class="btn btn-default">Get Device</button>
          </form>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="../html/catalog.html">&laquo;</a>
                    </li>
                    <li>
                        <a href="../html/catalog.html">1</a>
                    </li>
                    <li class="active">
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
		</div>
		<script type="text/javascript" src="/CSITIS/Resources/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="/CSITIS/Resources/js/bootstrap.js"></script>
	</body>
</html>
<?php
	db_close();
?>
