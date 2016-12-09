<?php
  //Author: Cassandra Guerrero, edited from Chris Walck
  //Start user session, get a username and password from the text fields
  session_start();
?>
<!DOCTYPE html>
<!--Author:Sergio Jara-->
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

    <!--script src="/CSITIS/Resources/js/jquery-3.1.1.min.js"></script-->

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
              <div class="alert alert-danger" id="failedLoginAlert" hidden>
                <strong>Login Failed!</strong> Please check your email and password, then try again.
              </div>
		          <input type="text" name="user" placeholder="KU Email Address" required>
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
  if(isset($_POST['user'])){
    $username=$_POST['user'];
  }
  else{
    $username = NULL;
  }
  if(isset($_POST['pass'])){
    $password=$_POST['pass'];
  }
  else{
   $password = NULL;
  }
  if(isset($_SESSION['isLoggedIn'])){
   $isLoggedIn = $_SESSION['isLoggedIn'];
  }
  else{
   $isLoggedIn = false;
  }
  if(isset($_SESSION['isAdmin'])){
   $isAdmin = $_SESSION['isAdmin'];
  }
  else{
   $isAdmin = false;
  }
  if(isset($_SESSION['failedLogin'])){
   $failedLogin = $_SESSION['failedLogin'];
  }
  else{
   $failedLogin = false;
  }
  $adminNames = array("frye@kutztown.edu", "sutjak@kutztown.edu", "sjara163@live.kutztown.edu");

  if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true && isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true){
   $_SESSION['sessionUsername'] = $username;
   //header('Location: adminLanding.php');
   echo 'Already logged in as admin. adminLanding.php';
  }
  else if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true && isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == false){
   $_SESSION['sessionUsername'] = $username;
   //header('Location: catalog.php');
   echo 'Already logged in. catalog.php';
  }

  //error_log("[index.php] INFO - Username: ".$username."\nPassword: ".$password, 3, "./logs/debug.log");

  //If there is a username and password
  if(isset($_POST['login']) && (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] == false) && !is_null($username) && !is_null($password)){
    //Connect to login directory
    $ldapconn = ldap_connect("ldaps://ldap.kutztown.edu");
    $ldapbind;

    ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);

    if($ldapconn)
      $ldapbind = ldap_bind($ldapconn, $username,  $password);
    //search for username in login directory
    if($ldapbind){
      $_SESSION["isLoggedIn"] = true;
      $_SESSION["failedLogin"] = false;
      $_SESSION["sessionUsername"] = $username;

      $sr = ldap_search($ldapconn, "dc=students,dc=kutztown,dc=edu", "samaccountname=".$username) or die("Could not find username.");
      $info = ldap_get_entries($ldapconn, $sr);

      //Should display all the data. Lets see what it is.
      //error_log("[index.php] INFO - ".$info, 3, "./logs/debug.log");

      //This looks for username in adminNames array
      if(in_array($username, $adminNames)){//if the user is an admin
        $_SESSION["isAdmin"] = true;
        ldap_close($ldap);
        //error_log("[index.php] INFO - User is an admin and successfully logged in. Redirect to adminLanding.php", 3, "./logs/debug.log");
        header("Location: adminLanding.php");
      }
      else{
        //Exit the directory and redirect the user to the catalog
        ldap_close($ldap);
        //error_log("[index.php] INFO - User is not an admin and has successfully logged in. Redirect to catalog.php", 3, "./logs/debug.log");
        header("Location: catalog.php");
      }
    }
    else{
      //the username was not found and the user will be returned to the login page
      $_SESSION["failedLogin"] = true;
      //error_log("[index.php] ERROR - Login failed redirect to index.php", 3, "logs/debug.log");
      header("Location: index.php");
    }
}
?>
