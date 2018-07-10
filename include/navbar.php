 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="dashboard.php">Hospital management </a>
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
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
           <!-- <i class="fa fa-fw fa-file"></i> -->
     
           <i class="fa fa-hospital-o" aria-hidden="true"></i>
            <span class="nav-link-text">Doctor</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">

             <li>
              <a href="adddoctor.php">Add Doctor</a>

            </li> 

             <li>
              <a href="additionalform.php">Form</a>
               
            </li> 
        
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
           
            <li>
              <a href="tables.php">Patient List</a>
            </li>
              <li>
              <a href="search.php">Existing patient</a>
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
            <i class="fa fa-fw fa-sign-out" href="logout.php"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>