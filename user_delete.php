<?php 
include("connect.php");


$result = mysqli_query($con,"DELETE FROM radcheck WHERE id = ".$_GET['id']);
if($result){
	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=user_main.php">';
	exit();
}else{
	echo("Error description: " . mysqli_error($con));
	exit();
}
?>