<?php
$host = 'sql';  //the name of the mysql service inside the docker file.
$user = 'devuser';
$password = 'devpass';
$db = 'test_db';
$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
  echo 'connection failed'. $conn->connect_error;
}
echo 'successfully connected to MYSQL';
?>
