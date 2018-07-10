<?php
include("include/session.php");
?>
<?php

    $name=ucfirst($_POST['name']);
    //  $name1=ucfirst($name);
    $fathername=ucfirst($_POST['fathername']);
    $mobilenumber=$_POST['mobilenumber'];
    //  $bloodgroup=$_POST['bloodgroup'];
    // $attachment=$_POST['attachment'];
    // $dateofbirth=$_POST['dateofbirth'];
    $date=$_POST['date'];
    $amount=$_POST['amount'];
    $address=ucfirst($_POST['address']);
    $doctor=$_POST['doctorname'];
    $gender=ucfirst($_POST['sex']);
    $age=$_POST['age'];
//  if($name && $fathername && $mobilenumber  && $amount && $address && $doctor && $gender)
//  {
    
    require("include/connection.php");
    $res=mysqli_query($conn,"select * from registration_tb where name='$name' ");
            $count=mysqli_num_rows($res);
//  $a=substr ($name,0,1);
// $b=substr ($fathername,0,1);
$m=date('m');
$d=date('d');
$y=date('y');
$C="C00";
$getid=mysqli_query($con," SELECT * FROM registration_tb ");
$getpaid=mysqli_num_rows($getid);
$invalid = str_pad ($getpaid,2,0, STR_PAD_LEFT);
// $patient_id=$d.$m.$y.$invalid;
$patient_id=$C.$invalid;
    
             if($count!=0){
          echo '<script>alert("number is already exits")</script>';
              }else{
$sql=mysqli_query($con," INSERT INTO registration_tb (name, fathername,mobilenumber,gender,doctorname,amount,patient_id,address,age,date)
VALUES ('$name','$fathername','$mobilenumber','$gender','$doctor','$amount','$patient_id','$address','$age','$date') ");
}

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
// echo '<script>alert("Message has been sent successfully")</script>';
require('Fpdf/fpdf.php');
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
// $this->Cell(276,10,"Sr.Consultant Orthopaedics Surgeon",0,1,"C");
// $this->Cell(276,10,"Epione-Center forPain Relief & Beyond",0,1,"C");
// $this->Cell(276,10,"Mobile:+91 9866393480",0,1,"C");
// $pdf->line(5,28,200,28);
$pdf->Ln();
$pdf->Cell(190,5,"Date:$date",0,0,"R");
$pdf->Ln();
// $pdf->Cell(160,5,"Dr.Harish $doctor",0,0,"R");
// $pdf->line(5,28,200,28);
$pdf->SetFont("Times","B",12);
$pdf->line(5,28,200,28);
//  $pdf->Cell(200,5,"Date:$date",0,0,"R");
// $pdf->SetTextColor(255,12,13);
// $pdf->SetFont("Arial","B",16);
// $pdf->Image("images/epionelogo-1.png",20,30,0,0,"PNG","www.google.com.pk");
$pdf->Cell(0,10,"Patient Registration Receipt",1,1,"C");
$pdf->SetTextColor(25,15,17);
$pdf->SetFont("Times","",12);
$pdf->Cell(50,10,"Regd Id :",1,0);
$pdf->Cell(50,10,"$patient_id",1,0);
$pdf->Cell(40,10,"Doctor Name :",1,0);
$pdf->Cell(50,10,"$doctor",1,1);
$pdf->Cell(50,10,"Patient Name :",1,0);
$pdf->Cell(50,10,"$name",1,0);
$pdf->Cell(40,10,"Mobile No :",1,0);
$pdf->Cell(50,10,"$mobilenumber",1,1);
$pdf->Cell(167,50,"Amount:",1,0,"R");
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
echo '<script>alert("Message sent has been success")</script>';
echo '<script>window.location= "dashboard.php"</script>';

// echo '<script type="text/javascript">';
// echo 'alert("success")';
// echo 'window.location= "dashboard.php"';
// echo '</script>';

//  document.getElementById("myBtn").onclick=function(){
//      alert("review your answer");
//      window.location= "index.php";
//   };
//                             }



//                                  else {
//                                  echo '<script>alert("Please enter all the field")</script>';
// }
?>