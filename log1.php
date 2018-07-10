<?php
session_start();
// if ($_POST) {
	# code...
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST["password"];
if ($_SESSION['username'] && $_SESSION['password']) {
	// $con=mysqli_connect("localhost","root","") or die("connection failed");
	// mysqli_select_db($con,"hms");
	include ("include/connection.php");
	$sql=mysqli_query($con,"select username,password from login_id where username ='".$_SESSION['username']."'");
	$row=mysqli_num_rows($sql);
	if($row!=0)
	{
		while ($rows=mysqli_fetch_assoc($sql)) {
			$dbname=$rows['username'];
			$dbpassword=$rows['password'];
		}
         if ($_SESSION['username']==$dbname)
          {
         	if ($_SESSION['password']==$dbpassword) {
         		// echo "you are in:";
         		header("location:dashboard.php");
        
         	}else{
         		// echo "your password incurrect";
         		echo '<script>alert("Your password is wrong")</script>';
         			echo '<script>window.location= "index.php"</script>'; 
         	}
        
         }else{
        // echo "your name is wrong";
         		echo '<script>alert("Your name is wrong")</script>';
         			echo '<script>window.location= "index.php"</script>'; 

     }
 }else{
		// echo "This name is not registered";
 	echo '<script>alert("This name is not registered")</script>'; 
 	echo '<script>window.location= "index.php"</script>';
	}
 
 }else{
	echo '<script>alert("Please enter username and password")</script>'; 
echo '<script>window.location= "index.php"</script>';

}

// else{
// 	echo "access denied";
// 	exit;
// }
?>