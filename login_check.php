<?php session_start();
include_once('connect.php');


if(is_null($_POST['username']) || is_null($_POST['password']) ){

	echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?error=yes">';
    exit();
}

$result = mysqli_query($con,"SELECT * FROM admin WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."'");

$rows =  mysqli_num_rows($result);

if($rows != 1){
    
   echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=index.php?error=yes">';
    exit();
}

$data = mysqli_fetch_assoc($result);

$_SESSION['admin_id'] = $data['admin_id'];
$_SESSION['name'] = $data['name'];
$_SEESION['position'] = $data['position'];

$_SESSION["status_login"] = 1;

echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=home.php">';
exit();
