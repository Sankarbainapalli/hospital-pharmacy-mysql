<?php 

$con=mysqli_connect("localhost","root","");
if(!$con){
	echo "mysql can not connect";
}
mysqli_select_db($con,"hms");

$query=" SELECT * 
FROM registration_tb
ORDER BY id ASC ";
$result=mysqli_query($con,$query);


 ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Patient list</title>
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
    <a class="navbar-brand" href="index.html">Hospital Management</a>
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
            <!-- </li>
            <li>
              <a href="tables.php">Patient List</a>
            </li> -->
          </ul>
        </li>



        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-wrench"></i> -->
           
            <i class="fa fa-user" aria-hidden="true"></i>
            <span class="nav-link-text">Patient</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="register.php">Add patient</a>
            </li>
            <!-- <li>
              <a href="adddoctor.php">Add Doctor</a>
            </li> -->
            <li>
              <a href="tables.php">Patient List</a>
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
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- <SCRIPT LANGUAGE="JavaScript"> 
if (window.print) {
document.write('<form><input type=button name=print value="Print table"onClick="window.print()"></form>');
}
</script> -->
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
 
        <div class="card-body">
        <!-- <p><button class="btn">Print table</button></p> -->
        
          <div class="table-responsive">
          
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" cellpadding="0">
            <p><button class="btn">Print table</button></p>
           
              <thead>
                <tr style>
                  <th>id</th>
                  <th>Name</th>
                  <th>Mobilenumber</th>
                  <th>gender</th>
                  <th>fathername</th>
                  <th>Amount</th>
                  <th>Doctorname</th>
                </tr>
              </thead>
              <!-- <tfoot>
                <tr>
                <th>id</th>
                <th>Name</th>
                  <th>Mobilenumber</th>
                  <th>gender</th>
                  <th>fathername</th>
                  <th>DOB</th>
                  <th>Doctorname</th>
                  
                </tr>
              </tfoot> -->
              <tbody>
              <?php 

while($res=mysqli_fetch_assoc($result)) {

	echo "<tr>";
	echo "<td>".$res['id']."</td>";
	echo "<td>".$res['name']."</td>";

	echo "<td>".$res['mobilenumber']."</td>";
  echo "<td>".$res['gender']."</td>";
   echo "<td>".$res['fathername']."</td>";
   echo "<td>".$res['amount']."</td>";
   echo "<td>".$res['doctorname']."</td>";
    echo "</tr>";


	# code...
}


 	?>





      
        <script src="jquery.min.js"></script>
     <script>
     $('.btn').click(function(){
       var printme = document.getElementById('dataTable');
       var wme = window.open("","","");
       wme.document.write(printme.outerHTML);
       wme.document.close();
       wme.focus();
       wme.print();
       wme.close();
     })
     </script>
   <!-- <button onclick="javascript:window.print();">print</button> -->
                
              </tbody>
            </table>
          </div>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
    </div>







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
