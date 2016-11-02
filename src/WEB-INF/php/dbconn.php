<?php

$connection;

function db_connect()
{
   $DB_NAME = "CSITIS";
   $DB_HOST = "localhost";
   $DB_USER = "csitisadmin";
   $DB_PASS = "nuwREBu2";

   global $connection;

   $connection = mysql_connect($DB_HOST, $DB_USER, $DB_PASS)
      or die("Cannot connect to $DB_HOST as $DB_USER:" . mysql_error());

   mysql_select_db($DB_NAME) or die ("Cannot open $DB_NAME:" . mysql_error());
}  // end function db_connect


// close connection to bookstore DB
function db_close()
{
   global $connection;
   mysql_close($connection);
}  // end function db_close

?>
