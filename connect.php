<?php

include_once("setting.php");

$con = mysqli_connect($localhost,$username,$password,$db_name);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_set_charset($con,"utf8");


?>