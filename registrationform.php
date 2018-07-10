<?php
require("include/connection.php");
$result=" SELECT * FROM registration_tb WHERE patient_id='created_at' ";
$query=mysqli_query($con,$result);

$name=$_POST['name'];
$fathername=$_POST['fathername'];
$mobilenumber=$_POST['mobilenumber'];
//  $bloodgroup=$_POST['bloodgroup'];
// $attachment=$_POST['attachment'];
// $dateofbirth=$_POST['dateofbirth'];
$amount=$_POST['amount'];
$address=$_POST['address'];
$doctor=$_POST['doctorname'];
$gender=$_POST['sex'];
$age=$_POST['age'];
require('Fpdf/fpdf.php');
class myPDF extends FPDF{
function header(){
$this->Image("images/epionelogo-1.png",10,6);
$this->SetFont("Arial","B",16);
$this->Cell(160,5,"Dr.Harish C.R",0,0,"R");
$this->Ln();
$this->SetFont("Times","",12);
$this->Cell(160,10,"MBBS,MS-Orthopaedics",0,0,"R");
// $this->Ln();
// $this->Cell(160,10,"7661910404",0,0,"R");
$this->Ln();
// $this->Cell(276,10,"Sr.Consultant Orthopaedics Surgeon",0,1,"C");
// $this->Cell(276,10,"Epione-Center forPain Relief & Beyond",0,1,"C");
// $this->Cell(276,10,"Mobile:+91 9866393480",0,1,"C");
$this->Ln();
$this->Cell(276,5,"Regd No:",0,0);


$this->line(5,28,200,28);
$this->Ln();
$this->Ln();
// $this->SetLeftMargin(5);

}
function footer(){
$this->line(5,28,19,28);
$this->SetY(-15);
$this->Cell(0,10,'page'.$this->PageNo().'/(nb)',0,0,"C");
}
}
$pdf=new myPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetTitle("Regitration form",false);
// $pdf->line(5,28,200,28);
$pdf->SetFont("Times","B",12);
// $pdf->SetTextColor(255,12,13);
// $pdf->SetFont("Arial","B",16);
// $pdf->Image("images/epionelogo-1.png",20,30,0,0,"PNG","www.google.com.pk");
$pdf->Cell(0,10,"Patient Registration Receipt",1,1,"C");
$pdf->SetTextColor(25,15,17);
$pdf->SetFont("Times","",12);
$pdf->Cell(50,10,"Name :",1,0);
$pdf->Cell(140,10,"$name",1,1);
$pdf->Cell(167,50,"Amount:",1,0,"C");
$pdf->Cell(23,50,"$amount",1,1,"C");
$pdf->Cell(167,10,"Total:",1,0,"C");
$pdf->Cell(23,10,"$amount",1,1,"C");
// $pdf->Cell(50,10,"age:",1,0);
// $pdf->Cell(50,10,"$age",1,1);
// $pdf->Cell(50,10,"gender:",1,0);
// $pdf->Cell(50,10,"$gender",1,1);
$pdf->Ln();
// $pdf->Ln();
$pdf->Cell(180,10,"Authorized Sign",0,0,"R");
// $pdf->Cell(50,10,"Date:.date('d-m-y').",0);
$pdf->output();
// require('fpdf.php');
// $pdf=new FPDF();
// $pdf->AddPage();
// $pdf->SetTitle("patient form",false);
// $pdf->SetTextColor(255,12,13);
// $pdf->SetFont("Arial","B",16);
// $pdf->Image("images/epionelogo-1.png",20,1,2,3,"PNG","www.google.com.pk");
// $pdf->Cell(0,10,"Patient RegistrationForm",1,1,"C");
// $pdf->SetTextColor(25,15,17);
// $pdf->SetFont("Arial","",12);
// $pdf->Cell(50,10,"Name :",1,0);
// $pdf->Cell(50,10,"$name",1,1);
// $pdf->Cell(50,10,"Amount",1,0);
// $pdf->Cell(50,10,"$amount",1,1);
// $pdf->Cell(50,10,"mobilenumber",1,0);
// $pdf->Cell(50,10,"$mobilenumber",1,1);
// $pdf->Cell(50,10,"age",1,0);
// $pdf->Cell(50,10,"$age",1,1);
// $pdf->Cell(50,10,"gender",1,0);
// $pdf->Cell(50,10,"$gender",1,1);
// $pdf->output();
?>