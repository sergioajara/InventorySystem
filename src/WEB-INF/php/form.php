<?php
	session_start();

	if((!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] == false || $_SESSION["isLoggedIn"] == null) && (!isset($_SESSION["isAdmin"]) || $_SESSION["isAdmin"] == false || $_SESSION["isAdmin"] == null)){
		//header('location: /CSITIS');
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
		<title>Admin: CSITIS Form</title>
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
          <form action="form.php" method="post">
            <div class="form-group">
             <label for="deviceID">Device ID:</label>
             <input type="text" class="form-control" id="deviceID" name="deviceID">
            </div>
            <button type="submit" class="btn btn-default" name="deviceID_Submit">Get Device</button>
          </form>
        </div>
		</div>
		<script type="text/javascript" src="/CSITIS/Resources/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="/CSITIS/Resources/js/bootstrap.js"></script>
	</body>
</html>
<?php
	$connection = mysqli_connect( "localhost", "csitisadmin", "nuwREBu2", "CSITIS") or die("Could not connect to the CSITIS database.");

	if(isset($_POST['deviceID_Submit'])){
		$query = "SELECT * FROM Apple WHERE `Device ID`='".$_POST['deviceID']."'";
		$query2 = "SELECT * FROM Arduino WHERE `Device ID`='".$_POST['deviceID']."'";
		$query3 = "SELECT * FROM Laptops WHERE `Device ID`='".$_POST['deviceID']."'";
		$query4 = "SELECT * FROM Misc WHERE `Device ID`='".$_POST['deviceID']."'";
		$query5 = "SELECT * FROM Nexus WHERE `Device ID`='".$_POST['deviceID']."'";
		$query6 = "SELECT * FROM `Raspberry Pi` WHERE `Device ID`='".$_POST['deviceID']."'";
		$query7 = "SELECT * FROM `Stationary Equipment` WHERE `Device ID`='".$_POST['deviceID']."'";

		$result = mysqli_query($connection, $query);
		if()

		print_r($result);
	}

	function getForm($userName, $firstName, $lastName, $KUID, $deviceID) {
	  //check if the deviceID exists and decide type of form to output.


	  // if($sqlResult->num_rows > 0){
	  //   echo "Tables Device ID acquired. ".$sqlResult;
	  //   if($sqlResults){
	  //     echo "Device Found. Searched for ".$_POST['deviceID'];
	  //   }
	  // }
	}

	//mysqli_close($connection);
?>
