<?php 
include("connect.php");

//var_dump($_POST['data']);
$_POST['data']['op'] = ":=";
foreach ($_POST['data'] as $key => $value) {
	$colunm[] = "`".$key."`";
	$data[]	= "'".$value."'";
}

$sql = "INSERT INTO radgroupcheck (".implode(",", $colunm).") VALUES (".implode(",", $data).")";

$result = mysqli_query($con,$sql);

if($result){
	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=group_main.php">';
	exit();
}else{
	echo("Error description: " . mysqli_error($con));
	exit();
}
?>
