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
<?php
include("include/header.php");
?>
<?php
include("include/navbar.php");
?>
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
              <option>CERVICAL EPIDURAL INJECTIONS</option>
              <option>CERVICAL MEDIAL BRANCH RF ABLATIONS</option>
              <option>TRIGEMINAL GANGLION RF ABLATIONS</option>
              <option> TRIGGER POINT INJCETIONS</option>
              <option> LUMBAR EPIDURAL INJECTIONS</option>
              <option> SI JOINT INJCETIONS</option>
              <option> SI JOINT RF ABLATIONS</option>
              <option> PLANTAR FASCITIS INJCETION</option>
              <option> PERIPHERAL NERVE BLOCKS</option>
              <option> PERIPHERAL NERVE RF ABLATIONS</option>
              <option> COELIAC PLEXUS BLOCK</option>
              <option> LUMBAR SYMPATHETIC BLOCK</option>
              <option> INTERCOSTAL NERVE BLOCK</option>
              <option> INTERCOSTAL NERVE NEUROLYSIS</option>
              <option> JOINT INJCETIONS</option>
              <option> PLATELET RICH PLASMA THERAPY</option>
              <option> BOTOX INJECTIONS</option>
              <option> STEM CELL THERAPY</option>
              <option>FACET JOINT INJECTIONS</option>
              <option> TRANSFORAMINAL EPIDURAL INJECTIONS</option>
              <option> T.E.N.S THERAPY</option>
              <option>LUMBAR MEDIAL BRANCH RF ABLATIONS</option>
              
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
    <?php
    include("include/footer.php");
    ?>