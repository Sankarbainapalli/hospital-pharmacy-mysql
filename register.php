<?php
include("include/session.php");
?>




<?php




$con=mysqli_connect("localhost","root","");
if(!$con){
	echo "mysql can not connect";
}
mysqli_select_db($con,"hms");

$query=" SELECT * 
FROM doctor_tb ";
$result=mysqli_query($con,$query);



?>




<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Registration Page</title>
  <!-- Bootstrap core CSS-->
  <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Custom fonts for this template-->
  <!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
  <!-- Custom styles for this template-->
  <!-- <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class=" card-header" style="text-align: center;">Register an Account</div>
      <div class="card-body"> -->
        <!-- <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName"> Name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
               <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
             </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Register</a>
        </form>  -->
        <!-- <form  action="reg.php" method="POST">
          <div class="row">
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name" required> -->
          <!--   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          <!-- </div>
          <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Father name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Father Name" name="fathername" required>
          </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Mobile No</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number" name="mobilenumber" required>
          </div>
       
        
        <div class="form-group col-md-6">
           <label for="exampleFormControlSelect1">Gender</label>
          <div class="form-check form-check-inline form-control">&nbsp;&nbsp;
          <input class="form-check-input" type="radio"  id="inlineRadio1"  name="sex" value="Male" required>
          <label class="form-check-label" for="inlineRadio1">Male</label>&nbsp;&nbsp;&nbsp;
        
          <input class="form-check-input" type="radio"  id="inlineRadio2" name="sex" value="Female" required>
          <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
        </div>
      </div> -->
          <!-- <div class="form-group">
            <label for="exampleFormControlSelect1">Blood Group</label>
            <select type="text" class="form-control" id="exampleFormControlSelect1" name="bloodgroup">
                             <option>A+</option>
                              <option>A-</option>
                               <option>B+</option>
                              <option>B-</option>
                               <option>O+</option>
                              <option>O-</option>
                               <option>AB+</option>
                              <option>AB-</option>
            </select>
          </div>
         -->
         <!-- <div class="row">
           <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Doctor</label>
            <select  type="text" class="form-control" id="exampleFormControlSelect1" name="doctorname">
//<?php
           // while($res=mysqli_fetch_assoc($result)) { -->

// echo "<tr>";
// echo "<option>".$res['doctorname']."</option>";
// echo "<td>".$res['name']."</td>";

// echo "<td>".$res['mobilenumber']."</td>";
// echo "<td>".$res['gender']."</td>";
//  echo "<td>".$res['fathername']."</td>";
//  echo "<td>".$res['amount']."</td>";
//  echo "<td>".$res['doctorname']."</td>";
//   echo "</tr>";


# code...
// }
// ?>
                              <!-- <option >Mr Gupta</option>
                              <option >Mr Rajesh</option>
                             -->
            <!-- </select>
          </div> -->
           <!-- <div class="row">
            <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Doctor name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Doctorname" name="doctorname" required>
          </div> -->
      
        
          <!-- <div class="form-group">
            <label for="exampleFormControlFile1">Attachment</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="attachment">
          </div>
         -->
            <!-- <div class="form-group">
            <label for="exampleInputPassword1">Date</label>
            <input type="Date" class="form-control" id="exampleInputPassword1" placeholder="6/06/2018" name="dateofbirth">
          </div> -->
        
          <!-- <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Amount</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amout" name="amount" required>
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div> -->
        //</div>
        
          
        <!-- <div class="row">
           <div class="form-group col-md-6">
            <label for="exampleFormControlTextarea1">Address</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="address" required>
          </div>

           
            <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Age</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="age" name="age" required>
          </div>
          </div>

            <div class="form-group">
            <label for="exampleInputPassword1">Date</label>
            <input type="Date" class="form-control" id="exampleInputPassword1" name="date">
          </div> 
        
            -->

             <!-- <div class="form-group">
            <label for="exampleFormControlSelect1">Address</label>
            <select type="text" class="form-control" id="exampleFormControlSelect1" name="address" required>
                             <option>Hyderabad</option>
                              <option>Vishapatnam</option>
                               <option>Vijayanagaram</option>
                              <option>Srikaklam</option>
                               <option>medchel</option>
                              <option>Suchitra</option>
                               <option>SR Nagar</option>
                              <option>Kukatpally</option>
            </select>
          </div> -->
         
          <!-- <button type="submit" class="btn btn-primary col-md-12" name="submit">Submit</button>
        </form> -->
        <!-- <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div> -->
      <!-- </div>
    </div>
  </div> -->
  <!-- Bootstrap core JavaScript-->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <!-- Core plugin JavaScript-->
  <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html> -->
 -->





// <?php 
// require("include/connection.php");
// $query=" SELECT * 
// FROM registration_tb
// ORDER BY id ASC ";
// $result=mysqli_query($con,$query);
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register patient</title>
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
      <!-- Breadcrumbs-->

      <div class="card card-register mx-auto mt-5">
      <div class=" card-header" style="text-align: center;">Register an Account</div>
      <div class="card-body">
        <!-- <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName"> Name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
               <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
             </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Register</a>
        </form>  -->
        <form  action="reg.php" method="POST">
          <div class="row">
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name" required>
          <!--   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Father name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Father Name" name="fathername" required>
          </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Mobile No</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number" name="mobilenumber" required>
          </div>
       
        
        <div class="form-group col-md-6">
           <label for="exampleFormControlSelect1">Gender</label>
          <div class="form-check form-check-inline form-control">&nbsp;&nbsp;
          <input class="form-check-input" type="radio"  id="inlineRadio1"  name="sex" value="Male" required>
          <label class="form-check-label" for="inlineRadio1">Male</label>&nbsp;&nbsp;&nbsp;
        
          <input class="form-check-input" type="radio"  id="inlineRadio2" name="sex" value="Female" required>
          <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
        </div>
      </div>
          <!-- <div class="form-group">
            <label for="exampleFormControlSelect1">Blood Group</label>
            <select type="text" class="form-control" id="exampleFormControlSelect1" name="bloodgroup">
                             <option>A+</option>
                              <option>A-</option>
                               <option>B+</option>
                              <option>B-</option>
                               <option>O+</option>
                              <option>O-</option>
                               <option>AB+</option>
                              <option>AB-</option>
            </select>
          </div>
         -->
         <div class="row">
           <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Doctor</label>
            <select  type="text" class="form-control" id="exampleFormControlSelect1" name="doctorname">
<?php
            while($res=mysqli_fetch_assoc($result)) {

// echo "<tr>";
echo "<option>".$res['doctorname']."</option>";
// echo "<td>".$res['name']."</td>";

// echo "<td>".$res['mobilenumber']."</td>";
// echo "<td>".$res['gender']."</td>";
//  echo "<td>".$res['fathername']."</td>";
//  echo "<td>".$res['amount']."</td>";
//  echo "<td>".$res['doctorname']."</td>";
//   echo "</tr>";


# code...
}
?>
                              <!-- <option >Mr Gupta</option>
                              <option >Mr Rajesh</option>
                             -->
            </select>
          </div>
           <!-- <div class="row">
            <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Doctor name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Doctorname" name="doctorname" required>
          </div> -->
      
        
          <!-- <div class="form-group">
            <label for="exampleFormControlFile1">Attachment</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="attachment">
          </div>
         -->
            <!-- <div class="form-group">
            <label for="exampleInputPassword1">Date</label>
            <input type="Date" class="form-control" id="exampleInputPassword1" placeholder="6/06/2018" name="dateofbirth">
          </div> -->
        
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Amount</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amout" name="amount" required>
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>
        
          
        <div class="row">
           <div class="form-group col-md-6">
            <label for="exampleFormControlTextarea1">Address</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="address" required>
          </div>

           
            <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Age</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="age" name="age" required>
          </div>
          </div>

            <div class="form-group">
            <label for="exampleInputPassword1">Date</label>
            <input type="Date" class="form-control" id="exampleInputPassword1" name="date">
          </div> 
        
           

             <!-- <div class="form-group">
            <label for="exampleFormControlSelect1">Address</label>
            <select type="text" class="form-control" id="exampleFormControlSelect1" name="address" required>
                             <option>Hyderabad</option>
                              <option>Vishapatnam</option>
                               <option>Vijayanagaram</option>
                              <option>Srikaklam</option>
                               <option>medchel</option>
                              <option>Suchitra</option>
                               <option>SR Nagar</option>
                              <option>Kukatpally</option>
            </select>
          </div> -->
         
          <button type="submit" class="btn btn-primary col-md-12" name="submit">Submit</button>
        </form>
  
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
            <a class="btn btn-primary" href="logout.php">Logout</a>
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
