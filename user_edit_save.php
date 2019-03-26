<?php 
include("connect.php");

if($_POST['username'] == "" || $_POST['password'] == ""){
	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=user_main.php">';
	exit();
}

$sql_radcheck = "UPDATE radcheck SET value = '".$_POST['password']."' WHERE id = '".$_POST['id']."'";

$result_radcheck = mysqli_query($con,$sql_radcheck);

if(!$result_radcheck){
	echo("Error  result_radcheck: " . mysqli_error($con));
	exit();
}


$sql_radusergroup = "INSERT INTO radusergroup (username,groupname,priority) VALUES ('".$_POST['username']."','".$_POST['groupname']."','1') ON DUPLICATE KEY UPDATE groupname = '".$_POST['groupname']."'";


$result_radusergroup = mysqli_query($con,$sql_radusergroup);
if(!$result_radcheck){
	echo("Error  sql_radusergroup: " . mysqli_error($con));
	exit();
}


	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=user_main.php">';
	exit();

?>
