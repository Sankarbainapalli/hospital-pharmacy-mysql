<?php 
$con=mysqli_connect("localhost","root","");
if(!$con){
	echo "mysql can not connect";
}
mysqli_select_db($con,"hms");
?>
