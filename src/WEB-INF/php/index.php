<?php
  //Author: Cassandra Guerrero, edited from Chris Walck
  //Start user session, get a username and password from the text fields
  session_start();

  //Doing this so we have variables set to something.
  //Else we may run into issues later with garbage.
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

  //Check if the user is already logged in. This conserves resources by not
  //having to execute all the php.
  // if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true && isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true){
  //  $_SESSION['sessionUsername'] = $username;
  //  //header('Location: adminLanding.php');
  //  echo 'Already logged in as admin. adminLanding.php';
  // }
  // else if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true && isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == false){
  //  $_SESSION['sessionUsername'] = $username;
  //  //header('Location: catalog.php');
  //  echo 'Already logged in. catalog.php';
  // }

  //If there is a username and password
  if(/*Check that POST['submit'] is set, SESSION loggedIn is either not set or
      it's false and username and pass are not null. If you do that then you
      don't have to check if user and pass are set.*/
    isset($_POST['login']) && (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] == false) && !is_null($username) && !is_null($password)){
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
      $_SESSION["sessionUsername"] = $username; //Might change depending on what we get from $info
      //I have a feeling an admin isn't going to work for this.
      //Would Dr. Frye's login work for this if we have dc=students?
      $sr = ldap_search($ldapconn, "dc=students,dc=kutztown,dc=edu", "samaccountname=".$username) or die("Could not find username.");
      $info = ldap_get_entries($ldapconn, $sr);

      //Should display all the data. Lets see what it is.
      echo '<script type=\"text/javascript\">console.log($info);</script>';
      print_r($info);

      //Iterate throught the array and check it. Not sure how. For loop?
      if(in_array($username, $adminNames)){//if the user is an admin
        $_SESSION["isAdmin"] = true;
        ldap_close($ldap);
        echo 'adminLanding.php';
        header("Location: adminLanding.php");
      }
      else{
        //Exit the directory and redirect the user to the catalog
        ldap_close($ldap);
        header("Location: catalog.php");
      }
    }
    else{
      //the username was not found and the user will be returned to the login page
      $_SESSION["failedLogin"] = true;
      echo("$(document).ready(function(){
        console.log('Failed to login. Invalid credentials. Refresh page.');
      }");
      header("Location: index.php");
    }
}
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
    <script type="text/javascript">
      //if failedLogin is true
      //then unhide the alert banner ontop of user input.
      //End If failedLogin is true

      //My attempt (Sergio)
      if(<?php echo $failedLogin; ?> == "true")
        $('div#failedLoginAlert').unhide();
        alert("Login failed. Try again.");
    </script>
	</body>
</html>
