<?php
include("include/session.php");
?>
<?php
require("include/connection.php");
$query=" SELECT *
FROM registration_tb
ORDER BY id ASC ";
$result=mysqli_query($con,$query);
?>
<?php
include("include/header.php");
?>
<?php
include("include/navbar.php");
?>
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
      <i class="fa fa-table"></i> Data Table </div>
      
      <div class="card-body">
        <!-- <p><button class="btn">Print table</button></p> -->
        
        <div class="table-responsive">
          
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" cellpadding="0">
            <p><button class="btn">Print table</button></p>
            
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Fathername</th>
                <th>Gender</th>
                <th>Amount</th>
                <th>Age</th>
                <th>Mobilenumber</th>
                <th>Patient_id</th>
                <th>Date</th>
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
                echo "<td>".$res['fathername']."</td>";
                echo "<td>".$res['gender']."</td>";
                echo "<td>".$res['amount']."</td>";
                echo "<td>".$res['age']."</td>";
                echo "<td>".$res['mobilenumber']."</td>";
                echo "<td>".$res['patient_id']."</td>";
                echo "<td>".$res['date']."</td>";
                
                //  echo "<td>".$res['doctorname']."</td>";
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
  
  <?php
  include("include/footer.php");
  ?>