<?php
  require_once("dbconn.php");
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="CSITIS is a project started in Dr. Hussain's Software Engineering CSC 345/355 class.
                                      It is used for requesting hardware from the Kutztown University CSIT department."/>
		<meta name="author" content="Cassandra Guerrero, Sergio Jara, Cody Seyfert, Christopher Stiles"/>

		<!-- CSS Includes -->
		<link rel="stylesheet" href="/CSITIS/Resources/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/CSITIS/Resources/css/CSITIS_Style.css" />
		<!-- /CSS Includes -->

		<title>CSIT Inventory System</title>
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
			</div>
		</nav>

    <!-- Page Content -->
    <div class="container">
		  <div class="modal" tabindex="-1">
			  <div class="modal-dialog">
		      <div class="loginContainer">
		        <h1>Login to Your Account</h1>
						<br/>
		        <form action="index.php" method="POST">
		          <input type="text" name="user" placeholder="Username" required>
		          <input type="password" name="pass" placeholder="Password" required>
		          <input type="submit" name="login" class="login loginmodal-submit" value="Login">
		        </form>
		      </div>
		    </div>
			</div>
		</div>
		<script type="text/javascript" src="/CSITIS/Resources/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="/CSITIS/Resources/js/bootstrap.js"></script>
	</body>
</html>
<?php

  date_default_timezone_set('America/New_York');

  // using ldap bind
  if(isset($_POST['user']) && isset($_POST['pass'])){
    $ldaprdn = $_REQUEST['user'];
    $ldappass = $_REQUEST['pass'];

    $ldapconn = ldap_connect("ldaps://ldap.kutztown.edu")
                or die("Could not connect to LDAP server.");

    ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);

    if ($ldapconn)
      $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

    $sr = ldap_search($ldapconn, "dc=students,dc=kutztown,dc=edu", "samaccountname=".$ldaprdn) or die("Could not find username.");
    $info = ldap_get_entries($ldadpconn, $sr);

    if ($info["count"]>=1){
       $data = ldap_get_dn($ldapconn, $info);
       ldap_bind($ldapconn, $ldaprdn, $ldappass);
    }

    ldap_close($ldapconn);
  }
  else {
    $user = NULL;
    $password = NULL;
  }
?>
