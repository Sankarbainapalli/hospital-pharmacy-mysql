 <?php 
require("include/connection.php");

?>

<?php 
require("include/connection.php");
$output = NULL;
if(isset($_POST['submit'])){
 
  // $name=$_POST['name'];
	  // $name=ucfirst($name);
	//  $fathername=ucfirst($_POST['fathername']);
	//  $mobilenumber=$_POST['mobilenumber'];
	// //  $bloodgroup=$_POST['bloodgroup'];
	// // $attachment=$_POST['attachment'];
	// // $dateofbirth=$_POST['dateofbirth'];
	//  $date=$_POST['date'];
	// $amount=$_POST['amount'];
	// $address=ucfirst($_POST['address']);
	// $doctor=$_POST['doctorname'];
	// $gender=ucfirst($_POST['sex']);
	// $age=$_POST['age'];



// $mysqli=NEW MySQLi('localhost','root','',"hms");


// $search=$mysqli->real_escape_string($_POST['search']);
// $resultset=$mysqli->query(" SELECT * FROM registration_tb WHERE patient_id='$search'");

// if($resultset->num_rows >0){
//     while(  $rows = $resultset->fetch_assoc())
//     {
//         $name=$rows['name'];
//         $mobilenumber=$rows['mobilenumber'];
//         $fathername=$rows['fathername'];
//         $patient_id=$rows['patient_id'];
//         $doctorname=$rows['doctorname'];
//          }



// }else{
//     $output= "No result";
// }
// }




// $mysqli=NEW MySQLi('localhost','root','',"hms");


$search=$con->real_escape_string($_POST['search']);
$resultset=$con->query(" SELECT * FROM registration_tb WHERE patient_id='$search'");

if($resultset->num_rows >0){
    while(  $rows = $resultset->fetch_assoc())
    {
        $name=$rows['name'];
        $mobilenumber=$rows['mobilenumber'];
        $fathername=$rows['fathername'];
        $patient_id=$rows['patient_id'];
        $doctorname=$rows['doctorname'];
         }



}else{
    $output= "No result";
}
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Exsting patient</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">




</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" >
<!-- onload="window.print()" -->
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="dashboard.php">Hospital Management</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts1.html">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Charts</span>
          </a>
        </li> -->


     
       

        

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-wrench"></i> -->
            <i class="fa fa-hospital-o" aria-hidden="true"></i>
            <span class="nav-link-text">doctor</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="adddoctor.php">Add Doctor</a>
             </li>
            <!-- <li>
              <a href="tables.php">Patient List</a>
            </li> -->
          </ul>
        </li>



        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponent" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-wrench"></i> -->
           
            <i class="fa fa-user" aria-hidden="true"></i>
            <span class="nav-link-text">Patient</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponent">
            <li>
              <a href="register.php">Add patient</a>
            </li>
           
            <li>
              <a href="tables.php">Patient List</a>
            </li>
              <li>
              <a href="search.php">Existing Patient</a>
            </li> 
          </ul>
        </li>

       






       
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
       
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">

     <div class="col-md-2"></div>
     <div class="col-md-4"></div>
     <form  action="search.php" method="POST">
     <div class="form-group col-md-12">
            <!-- <label for="exampleInputEmail1">Reg Id</label> -->
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter register Id" name="search" required>
          <!--   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group col-md-12">
      <button type="submit" class="btn btn-primary col-md-12" name="submit">Search</button>
</div>
</form>
 

<div class="col-md-12">
<form action="existing_pt.php" method="POST">

<div class="form-group" style="width=600px;height=300px;background-color:white;margin-top:40px;">

 <div class="form-group col-md-12">
            <label for="exampleInputPassword1">Registerd Id</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="registerd Id" name="patient_id" value="<?php if(isset($patient_id)) echo $patient_id ?>" />
          </div>





          <div class="form-group col-md-12">

<label for="exampleInputPassword1">Name</label>
 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name" value="<?php if(isset($name)) echo $name ;?>" required />

</div>
          <div class="form-group col-md-12">
            <label for="exampleInputPassword1">Mobile No</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number" name="mobilenumber" value="<?php if(isset($mobilenumber)) echo $mobilenumber ?>" required>
          </div>

          <div class="form-group col-md-12">
            <label for="exampleInputPassword1">Doctorname</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="doctorname" name="doctorname" value="<?php if(isset($doctorname)) echo $doctorname ?>" required>
          </div>

             <div class="form-group col-md-12">
             <label for="exampleFormControlSelect1">Course</label>
            <select type="text" class="form-control" id="exampleFormControlSelect1" name="course" required>
               <option>INTERLAMINAR EPIDURAL INJECTION</option>
                <option>TRANSFORAMINAL EPIDURAL INJECTION</option>
               <option>TRIGGER POINT INJECTION</option>
               <option>SI JOINT INJECTION AND RF ABLATION</option>
                <option>FACET JOINT INJECTION AND RF ABLATION</option>
                <option>RIGEMINAL NERVE TF ABLATIOON</option>
                <option>INERLOSTAL NERVE BLOCK AND RF ABLATION</option>
                <option>COELIAC PLEXUS BLOCK   AND NEUROLYSIS</option>
                <option>PLATLET RICH PLASMATHERAPY</option>
                <option>BOTOX INJECTION</option>
                <option>PLANTAR FASCIA INJECTION</option>
                <option>LUMBAR SYMPHATHERIC BLOCK</option>
                <option>COSTOCHONDRAL INJECTION</option>

                  <option>kNEE JOINT INJECTION</option>
                  <option>SHOULDER JOINT INJECTION</option>
                  <option>STEM CELL THERAPY</option>
                  <option>STELLATE GANGLION BLOCK</option>
                  <option>PERIPHERAL NERVE BLOCKS</option>
                  <option>ULTRA SUND EXAMINATION</option>
                  <option>FLUROSCOPIC EXAMINATION</option>
                  <option>RADIO FRAQUENCY ABLATION</option>
                  <option>PHYSLTHERAPY</option>
              
                

            </select>
          </div> 
        
 <div class="form-group col-md-12">
            <label for="exampleInputPassword1">Amount</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Amount" name="amount" required>
          </div> 

           <div class="form-group col-md-12">
            <label for="exampleInputPassword1">Date</label>
            <input type="Date" class="form-control" id="exampleInputPassword1" name="date" required>
          </div>
          <div class="form-group col-md-12">
<button type="text" class="btn btn-success col-md-12" >Submit</button>

</form>
</div>
 <?php  echo $output; ?> 



</div>
</div>





      <!-- Breadcrumbs-->
     







    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
