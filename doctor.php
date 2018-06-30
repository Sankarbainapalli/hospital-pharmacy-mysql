<?php


require("include/connection.php");

 if(isset($_POST['submit'])){

	 $name=$_POST['doctor'];
	

//  if($name && $fathername && $mobilenumber  && $amount && $address && $doctor && $gender)
//  {
 	
 	         
 	            // $res=mysqli_query($conn,"select * from registration_tb where mobilenumber='$mobilenumber' ");
 	            // $count=mysqli_num_rows($res);
 	          
 	            //          if($count!=0){
 		           //           echo '<script>alert("number is already exits")</script>';
 	            //               }else{
                           $sql=mysqli_query($con," INSERT INTO doctor_tb (doctorname) VALUES ('$name') ");

        
        echo '<script>alert("Successfully add the doctor")</script>'; 
         echo '<script>window.location= "dashboard.php"</script>';
	
                 }
?>



