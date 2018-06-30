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


require('fpdf.php');

class myPDF extends FPDF{
    function header(){



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
        // $this->Image("images/picture2.png",0,1);
        // $this->Cell(0,0,"Regd Id :",0,0);
        // $this->SetFont("Arial","",12);
        // $this->Cell(160,5,"",0,0,"R");
        //    $this->Ln('26');
        //    $this->Cell(20,10,"Name :",0,0);
        //      $this->Cell(30,10,"$name",0,0,"L");
        //        $this->Cell(20,10,"age :",0,0);
        //      $this->Cell(30,10,"$age ",0,0,"L");
        //        $this->Cell(20,10,"Gender :",0,0);
        //      $this->Cell(30,10,"$gender ",0,1);

        //      $this->Cell(20,10,"Regd No :",0,0);
        //      $this->Cell(30,10,"$name",0,0);

        //      $this->Cell(20,10,"Date :",0,0);
        //      $this->Cell(30,10,"$date",0,0);
        //        $this->Cell(20,10,"Ref By :",0,0);
        //      $this->Cell(30,10,"$doctor ",0,0);
        //        $this->Cell(20,10,"city :",0,0);
        //      $this->Cell(10,10,"$address ",0,1);
        //          $this->line(5,28,200,28);
        
        
        // $this->Ln();
        // $this->SetFont("Times","",12);
        // $this->Cell(160,10,"",0,0,"R");
        // $this->Ln();
        // $this->Cell(160,10,"7661910404",0,0,"R");
        // $this->Ln();
        // $this->Cell(276,10,"Sr.Consultant Orthopaedics Surgeon",0,1,"C");
        // $this->Cell(276,10,"Epione-Center forPain Relief & Beyond",0,1,"C");
        // $this->Cell(276,10,"Mobile:+91 9866393480",0,1,"C");
        // $this->Ln();
        // $this->Cell(276,5,"Regd No:",0,0);
        
        // $this->line(5,28,200,28);
        // $this->Ln('20');
        // $this->Ln();
        // $this->line(5,28,200,28);

        //   $this->Ln();
        // $this->Ln();
        // $this->SetLeftMargin(5);

       


    }
    function footer(){
        // $this->line(5,28,19,28);
        // $this->SetY(-15);
        // $this->Cell(0,10,'page'.$this->PageNo().'/{nb}',0,0,"C");

    }

}





$pdf=new myPDF('P','mm','A4');

$pdf->AddPage();


// $pdf->SetTitle("Regitration form",false);

 $pdf->Image("images/picture2.png",0,1);
// $pdf->Line(20,30,40,50);
        // $pdf->Cell(0,0,"Regd Id :",0,0);
        $pdf->SetFont("Arial","",12);
        $pdf->Cell(160,5,"",0,0,"R");
           $pdf->Ln('20');
           $pdf->Cell(20,10,"Name :",0,0);
             $pdf->Cell(30,10,"$name",0,0,"L");
               $pdf->Cell(20,10,"age :",0,0);
             $pdf->Cell(30,10,"$age ",0,0,"L");
               $pdf->Cell(20,10,"Gender :",0,0);
             $pdf->Cell(30,10,"$gender ",0,1);

             $pdf->Cell(20,10,"Regd No :",0,0);
             $pdf->Cell(30,10,"$name",0,0);

             $pdf->Cell(20,10,"Date :",0,0);
             $pdf->Cell(30,10,"$date",0,0);
               $pdf->Cell(20,10,"Ref By :",0,0);
             $pdf->Cell(30,10,"$doctor ",0,0);
               $pdf->Cell(20,10,"city :",0,0);
             $pdf->Cell(10,10,"$address ",0,1);
          
// $pdf->Ln("40");     
        
 $pdf->Line(5,28,200,28);





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

$pdf->Ln("60");
// $pdf->Cell(190,5,"Date:$date",0,0,"R");





// $pdf->Cell(160,5,"Dr.Harish $doctor",0,0,"R");
// $pdf->line(5,28,200,28);
$pdf->SetFont("Times","B",12);



//  $pdf->Cell(200,5,"Date:$date",0,0,"R");
// $pdf->SetTextColor(255,12,13);
// $pdf->SetFont("Arial","B",16);
// $pdf->Image("images/epionelogo-1.png",20,30,0,0,"PNG","www.google.com.pk");
$pdf->Cell(0,10,"Patient Registration Receipt",1,1,"C");
$pdf->SetTextColor(25,15,17);
$pdf->SetFont("Times","",12);

// $pdf->Cell(50,10,"Regd Id :",1,0);
// $pdf->Cell(50,10,"$name",1,0);
// $pdf->Cell(40,10,"Doctor Name :",1,0);
// $pdf->Cell(50,10,"$doctor",1,1);

// $pdf->Cell(50,10,"Patient Name :",1,0);
// $pdf->Cell(50,10,"$name",1,0);

// $pdf->Cell(40,10,"Mobile No :",1,0);
// $pdf->Cell(50,10,"$mobilenumber",1,1);

$pdf->Cell(167,50,"Amount:",1,0,"R");
$pdf->Cell(23,50,"$amount",1,1,"C");
$pdf->Cell(167,10,"Total:",1,0,"R");
$pdf->Cell(23,10,"$amount",1,1,"C");

 // $pdf->line(5,28,200,28);

// $pdf->Cell(50,10,"age:",1,0);
// $pdf->Cell(50,10,"$age",1,1);
// $pdf->Cell(50,10,"gender:",1,0);
// $pdf->Cell(50,10,"$gender",1,1);
$pdf->Ln();
// $pdf->Ln();
$pdf->Cell(180,10,"Authorized Signature",0,0,"R");
$pdf->Ln('50');
$pdf->Cell(200,10,"For Appointments call:7661910404",0,1,"C");
$pdf->Cell(200,10,"Valid for 1 more visit within the next 14days",0,0,"C");
 // $pdf->line(5,28,100,28);

// $pdf->Cell(50,5,"Regd No:",0,0);
// $pdf->Cell(50,5,"$row",0,0);
 // $pdf->line(5,28,200,28);
$pdf->output();


echo '<script>alert("Message sent has been success")</script>'; 
echo '<script>window.location= "dashboard.php"</script>';

  





?>

