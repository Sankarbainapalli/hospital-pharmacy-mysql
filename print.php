<?php
session_start();


require_once("includes/connectin.php");

$indiatimezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($indiatimezone);
$dtindnew=$date->format( 'd-m-Y' );
$crdate=$date->format( 'Y-m-d' );
$crtime =  $date->format( 'H:i:s' );

?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>View Members</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		
		<!-- Jasny-bootstrap CSS -->
		<link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
		<link href="vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
		
		!-- Bootstrap Colorpicker CSS -->
		<link href="vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- Bootstrap Datetimepicker CSS -->
		<link href="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- Bootstrap Daterangepicker CSS -->
		<link href="vendors/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>
		
		
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
function vehicledisplay($id) {
var prasadamid=$("#prasadam").val();	 
 
//alert(prasadamid);

$.ajax({
            type: "POST",
            url: "includes/ajaxlogics.php",
            data: {prasadamsubmit: prasadamid}
        })
                .done(function (msg) {
                    //alert( msg );
                    $("#price").val(msg);
      });



}
	
$(document).ready(function() {
    

	//numbers val start
	
	     	$("#price").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg1").html("Only Numbers").show().fadeOut("slow");
               return false;
    }
   });
   
   
   $("#quantity").keyup(function(){
   total = $("#price").val()* $("#quantity").val();
   $("#totalprice").val(total);
   });
   
   
   
   });	
   

</script>
		
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		<div class="wrapper theme-1-active pimary-color-green">
			<!-- Top Menu Items -->
			
			
			<?php require_once("includes/topnav.php"); ?>
			
			<!-- /Top Menu Items -->
			
			<!-- Left Sidebar Menu -->
			<div class="fixed-sidebar-left">
			
				
			<?php require_once("includes/leftnav.php"); ?>	
				
				
				
			</div>
			<!-- /Left Sidebar Menu -->
			
			<!-- Right Sidebar Backdrop -->
			<div class="right-sidebar-backdrop"></div>
			<!-- /Right Sidebar Backdrop -->
				
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						 
						</div>
						
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						
						
						
						
					<div class="col-sm-12">

					
						<div class="panel panel-default card-view">
						<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">View Members</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="example" class="table table-hover display  pb-30" >
												<thead>
													<tr>
													<th>S.no</th>
													<th>Register Date</th>
													<th>PIN</th>
														<th>Register Id</th>
														<th>Password</th>
														<th>Sponsor</th>
														<th>Name</th>
														<th>Contact</th>
														<th>City</th>
														<th>Edit</th>
											
													</tr>
												</thead>
												
											
											
												<tbody>
													                                  
<?php
include("includes/connect.php") ;
$x='1';
$get_brands="select * from registers WHERE `payment_status`='1'" ;
$run_brands=mysqli_query($cnect,$get_brands) ;
while($re=mysqli_fetch_array($run_brands)){
?>                                    
                                    
<tr>
<td><?php echo $x; ?></td>
<td><?php echo date("d-m-Y", strtotime($re['crdate'])); ?></td>
<td><?php echo $re['pin']; ?></td>
<td><?php echo $re['reg_id']; ?></td>
<td><?php echo $re['password']; ?></td>
<td><?php echo $re['sponsor']; ?></td>
<td><?php echo $re['name']; ?></td>

<td><?php echo $re['contact']; ?></td>
<td><?php echo $re['city']; ?></td>
<td><a href="updateregisterprofile.php?id=<?php echo $re['id']; ?>" class="btn btn-xs btn-info">Edit</a></td>
</tr>


<?php $x++; } ?>  

													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					
						
					</div>
				
				<!-- /Row -->
						
					
					</div>
					<!-- /Row -->
					

					
				</div>
				
				<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
							<p>2017 &copy; All Rights Reserved</p>
						</div>
					</div>
				</footer>
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		x`<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		<script type="text/javascript" src="vendors/bower_components/moment/min/moment-with-locales.min.js"></script>
		
		<script type="text/javascript" src="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
		
		
		<!-- Form Picker Init JavaScript -->
		<script src="dist/js/form-picker-data.js"></script>
		
		<!-- Bootstrap Colorpicker JavaScript -->
		<script src="vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
				
		
		<!-- Data table JavaScript -->
	<script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="vendors/bower_components/jszip/dist/jszip.min.js"></script>
	<script src="vendors/bower_components/pdfmake/build/pdfmake.min.js"></script>
	<script src="vendors/bower_components/pdfmake/build/vfs_fonts.js"></script>
	
	<script src="vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="dist/js/export-table-data.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>


</html>