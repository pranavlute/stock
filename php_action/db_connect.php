<?php 	
$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "stock";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
/*
$con=mysql_connect($localhost,$username,$password);
$dbcon=mysql_select_db($dbname,$con);

if($dbcon){
	echo "success";
}else{
		echo "error";
}		
*/	
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  echo "Successfully connected";
}

?>