<?php 
$con=mysqli_connect("localhost","root","");
if(!$con){
	echo "mysql can not connect";
}
mysqli_select_db($con,"hms");
?>

<!-- <?php 
$con=mysqli_connect("localhost","darapain_hms","askmeguru@123");
if(!$con){
	echo "mysql can not connect";
}
mysqli_select_db($con,"darapain_hms");
?> -->