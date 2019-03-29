<?php 
include("connect.php");


//check table admin 
$checktableadmin = mysqli_query($con,"SHOW TABLES LIKE 'admin'");
$row = mysqli_num_rows($checktableadmin);
//echo $row;

if($row == 0 ){
	$create = mysqli_query($con,"CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `add_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='admin'");


if(!$create){
	echo("Error create : " . mysqli_error($con));
	exit();
}



$insert = mysqli_query($con,"INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`, `tel`, `email`, `position`, `add_datetime`) VALUES
(1, 'admin', 'admin', 'kimhun55', '0815575706', 'kimhun55@gmail.com', 'admin', '2019-03-27 00:00:00')");
 if(!$insert){
	echo("Error insert : " . mysqli_error($con));
	exit();
}


 $alter = mysqli_query($con,"ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`)");
  if(!$alter){
	echo("Error alter : " . mysqli_error($con));
	exit();
}


$alter2 = mysqli_query($con,"ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2");

 if(!$alter){
	echo("Error alter2 : " . mysqli_error($con));
	exit();
}

mysqli_query($con,"ALTER TABLE `radusergroup` ADD UNIQUE(`username`);");



}