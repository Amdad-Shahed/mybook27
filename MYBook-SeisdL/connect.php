<?php
$host = "localhost:127.0.0.1";
$dbname = "mybook_db";
$dbUsername = "root";
$dbpassword = "";


$con = mysqli_connect($host, $dbUsername, $dbpassword, $dbname);


if(mysqli_connect_errno()) 
 {
  echo "Connection failed: " . mysqli_connect_error();
  exit();
}

else
{

echo "Connected successfully";
}
?>