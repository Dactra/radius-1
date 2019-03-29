<?php 
include("connect.php");

//var_dump($_POST['data']);

foreach ($_POST['data'] as $key => $value) {
	//$colunm[] = "`".$key."`";
	//$data[]	= "'".$value."'";
	if($key == 'id'){
		continue;
	}

	$update[] =  "`".$key."` = "."'".$value."'";
}

$sql = "UPDATE radgroupreply SET ".implode(",", $update)." WHERE  id = '".$_POST['id']."'";
//echo $sql;
//exit();

$result = mysqli_query($con,$sql);

if($result){
	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=group_main.php">';
	exit();
}else{
	echo("Error description: " . mysqli_error($con));
	exit();
}
?>