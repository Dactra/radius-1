<?php 
include("connect.php");

if($_POST['username'] == "" || $_POST['password'] == ""){
	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=admin_main.php">';
	exit();
}

$sql_admin = "UPDATE admin SET password = '".$_POST['password']."',name='".$_POST['name']."' WHERE admin_id = '".$_POST['id']."'";

$result_admin = mysqli_query($con,$sql_admin);

if(!$result_admin){
	echo("Error  result_radcheck: " . mysqli_error($con));
	exit();
}




	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=admin_main.php">';
	exit();

?>
