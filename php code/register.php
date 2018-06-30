<?php
 
	 $name=$_POST['name'];
	 $fathername=$_POST['fathername'];
	 $mobilenumber=$_POST['mobilenumber'];
	 $bloodgroup=$_POST['bloodgroup'];
	$attachment=$_POST['attachment'];
	$dateofbirth=$_POST['dateofbirth'];
	$amount=$_POST['amount'];
	$address=$_POST['address'];
	$doctor=$_POST['doctor'];
	$gender=$_POST['sex'];

 if($name && $fathername && $mobilenumber && $bloodgroup && $attachment && $dateofbirth && $amount && $address && $doctor && $gender)
 {
 	
 	            $conn=mysqli_connect("localhost","root","") or die("we couldn't connect");
 	             mysqli_select_db($conn,"hms");
 	            $res=mysqli_query($conn,"select * from registration_tb where mobilenumber='$mobilenumber' ");
 	            $count=mysqli_num_rows($res);
 	          
 	                     if($count!=0){
 		                     echo '<script>alert("number is already exits")</script>';
 	                          }else{
                           $sql=mysqli_query($conn," INSERT INTO registration_tb (name,fathername,mobilenumber,bloodgroup,gender,doctorname,attachment,dateofbirth,amount,address) 
VALUES ('$name','$fathername','$mobilenumber','$bloodgroup','$gender','$doctor','$attachment','$dateofbirth','$amount',
'$address') ");

 	// $registerd = mysqli_affected_array($sql);
 	// $row = mysql_fetch_array($result);
       

//     $username="Demo888";
//     $password="d12345";
	
// 	$from = "SCHOOL";
// 	$to = "$mobilenumber"; // A single number or a comma-seperated list of numbers
// 	$message = "hi friend";
	
// 	$message = urlencode($message);
//    echo $vars="username=".$username."&password=".$password."&message=".$message."&selectdnums=".$to."&from=".$from."&to=".$to."&info=1&test=0";

//     // $ch = curl_init('http://api.textlocal.in/send/?');
// 	$ch=curl_init('http://www.onlinebulksmslogin.com/spanelv2/api.php?');
// 	curl_setopt($ch, CURLOPT_POST, true);
// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// 	$result = curl_exec($ch); // This is the result from the API
// 	curl_close($ch);

	echo '<script>alert("Message has been sent successfully")</script>';



 	                           // echo "  Registration successfully";
 	                             header("location:login.html");
 	                       }
 	                       }
 	                               
 	                          
 	                            else {
 	                           	echo '<script>alert("Please enter all the field")</script>';
}



// function get_list(){
// 	global $conn;

// 	$query="select * from registration_td";
// $result=mysqli_query($con,$query);
// while(mysqli_fetch_array($result)){


// 	 $name=$row['$name'];
// 	 $fathername=$row['fathername'];
// 	 $mobilenumber=$row['mobilenumber'];
// 	//  $bloodgroup=$_POST['bloodgroup'];
// 	// $attachment=$_POST['attachment'];
// 	// $dateofbirth=$_POST['dateofbirth'];
// 	// $amount=$_POST['amount'];
// 	// $address=$_POST['address'];
// 	// $doctor=$_POST['doctor'];
// 	// $gender=$_POST['sex'];

// 	echo '<tr>
//      <td>$name</td>
//       <td>$fathername</td>
//        <td>$mobilenumber</td>


// 	</tr>';
// }
// }
?>