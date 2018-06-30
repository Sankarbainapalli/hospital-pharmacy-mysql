<?php
// session_start();
$host="localhost";
$user="root";
$pass="";
$db="hms";
$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);
if(isset($_POST['username'])){
	$username=$_POST['username'];
$password=$_POST['password'];
$res=mysqli_query($conn,"select * from login_id where username='".$username."' AND password='".$password."' LIMIT 1");
// if(mysqli_num_rows($res)==1){
// 	// echo "succesully login";
// 	$_SESSION['username']=$username;
// 	header("Location:index.html");
// 	exit();
header("Location:index.html");
}else{
echo "invalid username and password";
	header('Location:login.html');
exit();
}

?>