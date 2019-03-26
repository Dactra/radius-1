<?php 
function get_group_user($username){
	global $con;

	$result = mysqli_query($con,"SELECT * FROM radusergroup WHERE username = '".$username."' LIMIT 1");
	$data = mysqli_fetch_assoc($result);

	if($data['groupname'] != ""){
		return $data['groupname'];
	}else{
		return NULL;
	}

}

function data_groupname(){
	global $con;

	$result = mysqli_query($con,"SELECT DISTINCT groupname FROM radgroupcheck ");
	while ($data = mysqli_fetch_assoc($result)) {
		$d[] = $data['groupname'];
	}
	return $d;
		
}


function count_user(){
	global $con;

	$result = mysqli_query($con,"SELECT * FROM radcheck ");
	return mysqli_num_rows($result);
}

function count_groupname(){
	global $con;

	$result = mysqli_query($con,"SELECT DISTINCT groupname FROM radgroupcheck ");
	return mysqli_num_rows($result);
}
?>