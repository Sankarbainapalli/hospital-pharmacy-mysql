



<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Add doctor</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
  
    <div class="card card-register mx-auto mt-5">
   
      <div class=" card-header">Add doctor    
       &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp 
       &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp
       &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp
       &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp
       &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp
       &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp
       &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp<a href="dashboard.php"><i class="fa fa-window-close fa-2x" aria-hidden="true"></i></a> </div>

      
      <div class="card-body">
       
        <form  action="doctor.php" method="POST">
         

           <div class="form-group col-md-12">
            <label for="exampleInputPassword1">Doctoname</label>
            <input type="text" class="form-control" id="exampleInputPassword1"  name="doctor">
          </div>
           
          <button type="submit" class="btn btn-primary col-md-12" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
