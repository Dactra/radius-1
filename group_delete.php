<?php 
include("connect.php");


$result = mysqli_query($con,"DELETE FROM radgroupcheck WHERE id = ".$_GET['id']);
if($result){
	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=group_main.php">';
	exit();
}else{
	echo("Error description: " . mysqli_error($con));
	exit();
}
?>