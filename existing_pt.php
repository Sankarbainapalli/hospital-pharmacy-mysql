<?php
    $patient_id=$_POST['patient_id'];
   $name=ucfirst($_POST['name']);
   $mobilenumber=$_POST['mobilenumber'];
   
   $doctorname=$_POST['doctorname'];
   $course=$_POST['course'];
  	$amount=$_POST['amount'];
 
   $date=$_POST['date'];



require("include/connection.php");
    $result=mysqli_query($con," INSERT INTO patient_data (patient_id,name,mobilenumber,doctorname,course,amount,date) 
 VALUES ('$patient_id','$name','$mobilenumber','$doctorname','$course','$amount','$date') ");

$username="Demo888";
$password="d12345";

$from = "EPIONE";
$to = "$mobilenumber"; // A single number or a comma-seperated list of numbers
$message = "Dear $name\nWe have recieved your payment of Rs.$amount \nRegards\nTeam \nDarapain solutions";

$message = urlencode($message);
$vars="username=".$username."&password=".$password."&message=".$message."&selectdnums=".$to."&from=".$from."&to=".$to."&info=1&test=0";

// $ch = curl_init('http://api.textlocal.in/send/?');
$ch=curl_init('http://www.onlinebulksmslogin.com/spanelv2/api.php?');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // This is the result from the API
curl_close($ch);



require('fpdf.php');

class myPDF extends FPDF{
    function header(){
        $this->Image("images/picture2.png",0,0);
        $this->SetFont("Arial","B",16);
        $this->Cell(160,5,"",0,0,"R");
        $this->Ln();
        $this->SetFont("Times","",12);
        $this->Cell(160,10,"",0,0,"R");
        $this->Ln();
        // $this->Cell(160,10,"7661910404",0,0,"R");
        // $this->Ln();
        // $this->Cell(276,10,"Sr.Consultant Orthopaedics Surgeon",0,1,"C");
        // $this->Cell(276,10,"Epione-Center forPain Relief & Beyond",0,1,"C");
        // $this->Cell(276,10,"Mobile:+91 9866393480",0,1,"C");
        // $this->Ln();
        // $this->Cell(276,5,"Regd No:",0,0);
        
        // $this->line(5,28,200,28);
        // $this->Ln();
        // $this->Ln();
        // $this->SetLeftMargin(5);

       


    }
    function footer(){
        $this->line(5,28,19,28);
        // $this->SetY(-15);
        // $this->Cell(0,10,'page'.$this->PageNo().'/{nb}',0,0,"C");

    }

}





$pdf=new myPDF('P','mm','A4');
$pdf->AddPage();

$pdf->SetTitle("Regitration form",false);







// $pdf->Image("images/picture2.png",0,0);
// $this->SetFont("Arial","B",16);
// $this->Cell(160,5,"Dr.Harish",0,0,"R");
// $this->Ln();
// $this->SetFont("Times","",12);
// $this->Cell(160,10,"MBBS,MS-Orthopaedics",0,0,"R");
// $this->Ln();
// $this->Cell(160,10,"7661910404",0,0,"R");
// $pdf->Ln();
// $pdf->Ln();
// $pdf->Ln();
// $pdf->Ln();
// $pdf->Ln();
// $pdf->Ln();
// $this->Cell(276,10,"Sr.Consultant Orthopaedics Surgeon",0,1,"C");
// $this->Cell(276,10,"Epione-Center forPain Relief & Beyond",0,1,"C");
// $this->Cell(276,10,"Mobile:+91 9866393480",0,1,"C");
$pdf->Ln();
// $this->Cell(276,5,"Regd No:",0,0);

$pdf->line(5,28,200,28);
$pdf->Cell(190,5,"Date:$date",0,0,"R");
$pdf->Ln();
// $pdf->Cell(160,5,"Dr.Harish $doctor",0,0,"R");
// $pdf->line(5,28,200,28);
$pdf->SetFont("Times","B",12);
// $pdf->SetTextColor(255,12,13);
// $pdf->SetFont("Arial","B",16);
// $pdf->Image("images/epionelogo-1.png",20,30,0,0,"PNG","www.google.com.pk");
$pdf->Cell(0,10,"Patient Registration Receipt",1,1,"C");
$pdf->SetTextColor(25,15,17);
$pdf->SetFont("Times","",12);

$pdf->Cell(50,10,"Regd Id :",1,0);
$pdf->Cell(50,10,"$patient_id",1,0);
$pdf->Cell(40,10,"Doctor Name :",1,0);
$pdf->Cell(50,10,"$doctorname",1,1);

$pdf->Cell(50,10,"Patient Name :",1,0);
$pdf->Cell(50,10,"$name",1,0);

$pdf->Cell(40,10,"Mobile No :",1,0);
$pdf->Cell(50,10,"$mobilenumber",1,1);

$pdf->Cell(167,50,"$course:",1,0,"R");
$pdf->Cell(23,50,"$amount",1,1,"C");
$pdf->Cell(167,10,"Total:",1,0,"R");
$pdf->Cell(23,10,"$amount",1,1,"C");



// $pdf->Cell(50,10,"age:",1,0);
// $pdf->Cell(50,10,"$age",1,1);
// $pdf->Cell(50,10,"gender:",1,0);
// $pdf->Cell(50,10,"$gender",1,1);
$pdf->Ln();
// $pdf->Ln();
$pdf->Cell(180,10,"Authorized Signature",0,0,"R");

// $pdf->Cell(50,5,"Regd No:",0,0);
// $pdf->Cell(50,5,"$row",0,0);

$pdf->output();


// echo '<script>alert("Message sent has been success")</script>'; 
// echo '<script>window.location= "dashboard.php"</script>';

  

		// echo '<script type="text/javascript">'; 
        // echo 'alert("success")'; 
        // echo 'window.location= "dashboard.php"';
		// echo '</script>';  
		
	// 	document.getElementById("myBtn").onclick=function(){
	// 		alert("review your answer");
	// 		window.location= "index.php";
	//   };

//  	                       }
 	                       
 	                               
 	                          
//  	                            else {
//  	                           	echo '<script>alert("Please enter all the field")</script>';
// }




?>

