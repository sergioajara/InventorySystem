<?php

$connection;

function db_connect() {
   $DB_NAME = "CSITIS";
   $DB_HOST = "localhost";
   $DB_USER = "csitisadmin";
   $DB_PASS = "nuwREBu2";

   global $connection;

   $connection = mysql_connect($DB_HOST, $DB_USER, $DB_PASS)
      or die("Cannot connect to $DB_HOST as $DB_USER:" . mysql_error());

   mysql_select_db($DB_NAME) or die ("Cannot open $DB_NAME:" . mysql_error());
}

function db_close() {
   global $connection;
   mysql_close($connection);
}

function getForm() {
  global $connection;

  //check if the deviceID exists and decide type of form to output.
  $sqlResult = $connection->query("SELECT `Device ID` FROM `Apple`
    UNION SELECT `Device ID` FROM `Arduino`
    UNION SELECT `Device ID` FROM `Laptops`
    UNION SELECT `Device ID` FROM `Misc`
    UNION SELECT `Device ID` FROM `Nexus`
    UNION SELECT `Device ID` FROM `Raspberry Pi`
    UNION SELECT `Device ID` FROM `Stationary Equipment`");
  if($sqlResult->num_rows > 0){
    echo "Tables Device ID acquired.";
    if($sqlResults){
      echo "Device Found. Searched for $_POST['deviceID']"
    }
  }
}

?>
