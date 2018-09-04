<?php

session_start();
if(isset($_SESSION['username'])){
echo "<script> alert('u have already register')</script>";
//header('location:login.php');
exit();
}

$con = mysqli_connect('localhost','root');
if($con){
	//echo" connection successful";
}else{
	//echo " no connection"; 
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['password'];
//$email = $_POST['email'];



$q = " select * from signin  where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data ";
}else{

	$qy= " insert  into signin(name , password ) values ('$name' , '$pass' ) ";
	mysqli_query($con, $qy);
echo "you have created your account successfully ";
echo "<a href='home.php'>login</a>";
}



?>
