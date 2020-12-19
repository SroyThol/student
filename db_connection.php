<?php

//define is keyword for define a value to conn of database
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "db_newstudent");


// Create connection
$conn = mysqli_connect(HOSTNAME, USERNAME,PASSWORD, DBNAME );
// Check connection
if (!$conn) {
  die("Connection failed: ");
  //die is keyword for stop statemnet
}

?>