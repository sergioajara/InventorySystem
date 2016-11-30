<?php

class DB{
  var $DB_HOST = "localhost";
  var $DB_NAME = "CSITIS";
  var $DB_USER = "csitisadmin";
  var $DB_PASS = "nuwREBu2";
  var $LINK_RESULT = 0;
  var $QUERY_RESULT = 0;
  var $CURRENT_RECORD = array();
  var $CURRENT_ROW;
  var $ERROR = "";
  var $ERROR_STATE = 0;

  function db_connect() {

    if($this->$LINK_RESULT == 0){
      $LINK_RESULT = mysqli_connect( $DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    }

    if(!$LINK_RESULT){
     echo('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    echo $connection->host_info . "\n";
  }
}

global $connection;



function db_close() {
  global $connection;
  mysqli_close($connection);
}

function getForm() {
  global $connection;
  //check if the deviceID exists and decide type of form to output.
  $query = "SELECT `Device ID` FROM `Apple` WHERE `Device ID`='APE'";
  $result = mysqli_query($connection, $query);
  //$sqlResult = $connection->$query();
  echo $result;
  // if($sqlResult->num_rows > 0){
  //   echo "Tables Device ID acquired. ".$sqlResult;
  //   if($sqlResults){
  //     echo "Device Found. Searched for ".$_POST['deviceID'];
  //   }
  // }
}

if(isset($_POST['deviceID_Submit'])){
  echo "Found deviceID_Submit.";
  getForm();
}

?>
