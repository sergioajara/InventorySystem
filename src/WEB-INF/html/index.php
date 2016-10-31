<?php
 $username = "csitisadmin";
 $password = "nuwREBu2";
 $host = "localhost";
 $connector = mysql_connect($host, $username, $password)
    or die("Unable to connect");
 $selected = mysql_select_db("CSITIS", $connector)
    or die("Unable to connect");

		/*function get_groups($user) {
			// Active Directory server
			$ldap_host = "live.kutztown.edu";

			// Active Directory DN, base path for our querying user
			$ldap_dn = "CN=Users,OU=Students,OU=Accounts,DC=students,DC=kutztown,DC=edu,";

			// Active Directory user for querying
			$query_user = "jane@".$ldap_host;
			$password = "password1234!";

			// Connect to AD
			$ldap = ldap_connect($ldap_host) or die("Could not connect to LDAP");
			ldap_bind($ldap,$query_user,$password) or die("Could not bind to LDAP");

			// Search AD
			$results = ldap_search($ldap,$ldap_dn,"(samaccountname=$user)",array("memberof","primarygroupid"));
			$entries = ldap_get_entries($ldap, $results);

			// No information found, bad user
			if($entries['count'] == 0) return false;

			// Get groups and primary group token
			$output = $entries[0]['memberof'];
			$token = $entries[0]['primarygroupid'][0];

			// Remove extraneous first entry
			array_shift($output);

			// We need to look up the primary group, get list of all groups
			$results2 = ldap_search($ldap,$ldap_dn,"(objectcategory=group)",array("distinguishedname","primarygrouptoken"));
			$entries2 = ldap_get_entries($ldap, $results2);

			// Remove extraneous first entry
			array_shift($entries2);

			// Loop through and find group with a matching primary group token
			foreach($entries2 as $e) {
				if($e['primarygrouptoken'][0] == $token) {
					// Primary group found, add it to output array
					$output[] = $e['distinguishedname'][0];
					// Break loop
					break;
				}
			}

			return $output;
			}

			// Example Usage
			print_r(get_groups("jane"));
			print_r(get_groups("sam"));
      */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="CSITIS is a project started in Dr. Huissain's Software Engineering CSC 345/355 class.
                                      Used for requesting hardware from the Kutztown University CS department."/>
		<meta name="author" content="Sergio Jara, Cody Seyfert, Cassandra Guerrero, Christopher Stiles"/>

		<!-- CSS Includes -->
		<link rel="stylesheet" href="Resources/css/bootstrap.min.css" />
		<link rel="stylesheet" href="Resources/css/CSITIS_Style.css" />
		<!-- /CSS Includes -->
		<title>CS/IT Inventory System</title>
	</head>
	<body>
				<div class="innerHeader">
					<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
						<div class="container">
                				<div class="navbar-header">
                    					<a class="navbar-brand" href="/CSITIS">Computer Science Inventory</a>
                				</div>
            				</div>
            				<!-- /.container -->
        			</nav>
						</div>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Login</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
					<form>
						<div class="form-group">
							<label for="email">Email Address:</label>
             	<input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
             	<label for="pass">Password:</label>
             	<input type="password" class="form-control" id="pass">
            </div>
            <button type="submit" class="btn btn-default">Login</button>
					</form>
        </div>
        <!-- /.row -->

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Kutztown University 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
		<div class="outerBody"></div>
		<script type="text/javascript" src="Resources/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="Resources/js/bootstrap.js"></script>
	</body>
</html>
<?php mysql_close($connector); ?>
