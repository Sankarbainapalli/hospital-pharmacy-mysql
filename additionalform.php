<?php
include("include/session.php");
?>
<?php
require("include/connection.php");
$query=" SELECT *
FROM registration_tb ";
$result=mysqli_query($con,$query);
?>
<?php
include('include/header.php');
?>
<?php
include('include/navbar.php');
?>
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
        <form  action="additional_new.php" method="POST">
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
      <?php
      include('include/footer.php');
      ?>