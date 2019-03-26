<?php 
include("connect.php");

if($_POST['username'] == "" || $_POST['password'] == ""){
	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=admin_main.php">';
	exit();
}

$sql_admin = "INSERT INTO admin (username,password,name) VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['name']."')";

$result_admin = mysqli_query($con,$sql_admin);

if(!$result_admin){
	echo("Error  result_radcheck: " . mysqli_error($con));
	exit();
}




	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=admin_main.php">';
	exit();

?>
