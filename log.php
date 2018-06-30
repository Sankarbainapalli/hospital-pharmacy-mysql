<?php
// session_start();
// require("include/connection.php");

// if(isset($_POST['submit'])){
// $username=$_POST['username'];
// $password=$_POST['password'];
// $res=mysqli_query($con,"select * from login_id where username='".$username."' AND password='".$password."' LIMIT 1");
// if(mysqli_num_rows($res)==1){

// 	$_SESSION['username']=$username;
// 	header("Location:dashboard.php");
// 	exit();
// header("Location:index.html");
// echo "success";
// }else{
// echo "invalid username and password";
// 	header('Location:error.html');
// exit();
// echo '<script>alert("Username and Password incorrect \n Please try again")</script>';
//  echo '<script>window.location= "index.php"</script>';
// }
// }

?>


<?php
session_start();
require("include/connection.php");

if(isset($_POST['submit'])){
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
$res=mysqli_query($con,"select * from login_id where username='".$_SESSION['username']."' AND password='".$_SESSION['password']."' LIMIT 1");
if(mysqli_num_rows($res)==1){

	$_SESSION['username']=$rows['username'];
	header("Location:dashboard.php");
	exit();
// header("Location:index.html");
// echo "success";
}else{
// echo "invalid username and password";
// 	header('Location:error.html');
exit();
echo '<script>alert("Username and Password incorrect \n Please try again")</script>';
 echo '<script>window.location= "index.php"</script>';
}
}

?>