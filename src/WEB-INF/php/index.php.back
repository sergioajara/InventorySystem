<?php

	date_default_timezone_set('America/New_York');

	// using ldap bind
	$ldaprdn  = 'wbtest@live.kutztown.edu';     // ldap rdn or dn
	$ldappass = '4.nobletruths';  // associated password

	// connect to ldap server
	$ldapconn = ldap_connect("ldaps://ldap.kutztown.edu")
			or die("Could not connect to LDAP server.");

	ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
	ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);

	if ($ldapconn) {

			// binding to ldap server
			$ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

			// verify binding
			if ($ldapbind) {
					//echo "LDAP bind successful...</br>";
			} else {
					//echo "LDAP bind failed...";
			}

	}

	//echo "Searching for (samaccountname=sjara163) ... <br />";
	// Search surname entry
	$sr=ldap_search($ldapconn, "dc=students,dc=kutztown, dc=edu", "samaccountname=sjara163") or die("Could not search");
	//echo "Search result is " . $sr . "<br />";

	//echo "Number of entries returned is " . ldap_count_entries($ldapconn, $sr) . "<br />";

	//echo "Getting entries ...<p>";
	$info = ldap_get_entries($ldapconn, $sr);
	//echo "Data for " . $info["count"] . " items returned:<p>";

	for ($i=0; $i<$info["count"]; $i++) {
			//echo "dn is: " . $info[$i]["dn"] . "<br />";
			//echo "first cn entry is: " . $info[$i]["cn"][0] . "<br />";
			//echo "first email entry is: " . $info[$i]["mail"][0] . "<br /><hr />";
	}

	//echo "Closing connection";
	ldap_close($ldapconn);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="CSITIS is a project started in Dr. Hussain's Software Engineering CSC 345/355 class.
                                      It is used for requesting hardware from the Kutztown University CS department."/>
		<meta name="author" content="Sergio Jara, Cody Seyfert, Cassandra Guerrero, Christopher Stiles"/>

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
                          <a href="../php/form.php">Request Form</a>
                    </li>
      					</ul>
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
		        <form>
		          <input type="text" name="user" placeholder="Username">
		          <input type="password" name="pass" placeholder="Password">
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
