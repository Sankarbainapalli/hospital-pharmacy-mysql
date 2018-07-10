<?php
include("include/session.php");
?>
<?php
require_once("include/connection.php");
?>
<?php
include("include/header.php");
?>
<?php
include("include/navbar.php");
?>
<!-- Navigation-->

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">My Dashboard</li>
    </ol>
    <!-- Icon Cards-->
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
        <?php
        $totaldata=mysqli_query($con, "SELECT COUNT(id) FROM registration_tb ");
        $row=mysqli_fetch_array($totaldata);
        ?>
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <!--   <i class="fa fa-fw fa-comments"></i> -->
            </div>
            <div class="mr-5" data-speed="1" style="text-align: center;">Total<span class="counter-anim"><?php $total = $row[0];
            echo " Patients:<br>"  . $total; ?></span></div>
          </div>
          <!-- <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a> -->
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <?php
        // $totaldata=mysqli_query($con, "SELECT COUNT(id) FROM registration_tb ");
        // $row=mysqli_fetch_array($totaldata);
        $totaldata=mysqli_query($con, "SELECT COUNT(id) FROM `registration_tb` WHERE DATE(`created_at`) = CURDATE()");
        // $total_rows = mysqli_num_rows($totaldata);
        $row=mysqli_fetch_array($totaldata);
        ?>
        <div class="card text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <!--     <i class="fa fa-fw fa-list"></i> -->
            </div>
            <div class="mr-5" style="text-align: center;">Today's<span class="counter-anim"><?php $total = $row[0];
            echo " patients:<br>"  . $total; ?></span></div>
          </div>
          <!-- <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a> -->
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <?php
        $totaldata=mysqli_query($con, "SELECT COUNT(doctorname) FROM doctor_tb ");
        $row=mysqli_fetch_array($totaldata);
        ?>
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <!--   <i class="fa fa-fw fa-shopping-cart"></i> -->
            </div>
            <div class="mr-5" style="text-align: center;">No of<span class="counter-anim"><?php $total = $row[0];
            echo " Doctors :<br>"  . $total; ?></span></div>
          </div>
          <!--  <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a> -->
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
          <?php
          $totaldata=mysqli_query($con, "SELECT SUM(amount) FROM `registration_tb` WHERE DATE(`created_at`) = CURDATE()");
          // $row = mysqli_num_rows($totaldata);
          $row=mysqli_fetch_array($totaldata);
          ?>
          <div class="card-body">
            <div class="card-body-icon">
              <!--     <i class="fa fa-fw fa-support"></i> -->
            </div>
            <div class="mr-5" style="text-align: center;"> Today's Total <span class="counter-anim"><?php
              $total = $row[0];
            echo " Payments :<br>"  . $total ?></span></div>
          </div>
          <!--  <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a> -->
        </div>
      </div>
    </div>
    
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include('include/footer.php'); ?>