<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Agrisync</title>
  <!-- plugins:css -->
  <link  href="public/adminuser/vendors/feather/feather.css" rel="stylesheet">
  <link href="public/adminuser/vendors/ti-icons/css/themify-icons.css" rel="stylesheet">
  <link href="public/adminuser/vendors/css/vendor.bundle.base.css" rel="stylesheet"> 
  <!-- Plugin css for this page -->
  <link href="public/adminuser/vendors/datatables.net-bs4/dataTables.tstrap4.css" rel="stylesheet">
  <link href="public/adminuser/vendors/ti-icons/css/themify-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link href="public/adminuser/css/vertical-layout-light/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="public/agrisync/images/na.png" class="mr-2" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="public/agrisync/images/nal.png" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            <span class="input-group-text" id="search">
              <i class="icon-search"></i>
            </span>
          </div>
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="icon-bell mx-0"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Application Error</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Just now
              </p>
            </div>
          </a>
        </div>         
      </li>
      <li class="nav-item nav-profile dropdown">
               <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="ti-settings text-primary" ></i>
            Settings
          </a>
          <a class="dropdown-item" href="">
            <i class="ti-power-off text-primary" ></i>
            Logout
          </a>
        </div>
      </li>
      <li class="nav-item nav-settings d-none d-lg-flex">
        <a class="nav-link" href="/">
          <i class="icon-ellipsis"></i>
        </a>
      </li>
    </ul>
   </div>
     </nav>
    </div>
    
  <div class="container-fluid page-body-wrapper">
  <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-success border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>

        </ul>
     
          <!-- chat tab ends -->
        </div>
      
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
       <li class="nav-item">
       <a class="nav-link" href="/home">
         <i class="icon-contract menu-icon"></i>
         <span class="menu-title">Home</span>
       </a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="/Dashboard">
           <i class="icon-bar-graph menu-icon"></i>
           <span class="menu-title">Dashboard</span>
         </a>
       </li>

     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="#auth">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">OrientalMindoro</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="auth">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/OrminDash">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/OrminTab">Table</a></li>
             </ul>
       </div>
     </li>
     
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Occidental Mindoro</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="ui-basic">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/OcciDash">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/OcciTab">Table</a></li>
             </ul>
       </div>
     </li>
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Palawan</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="form-elements">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/PalDash">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/PalTab">Table</a></li>
             </ul>
       </div>
     </li>
     
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Romblon</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="charts">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/RomDash">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/RomTab">Table</a></li>
             </ul>
       </div>
     </li>
     
     <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
         <i class="icon-layout menu-icon"></i>
         <span class="menu-title">Marinduque</span>
         <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="icons">
         <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="/MarDash">Dashboard</a></li>
           <li class="nav-item"> <a class="nav-link" href="/MarTab">Table</a></li>
             </ul>
       </div>
     </li>

       <li class="nav-item">
         <a class="nav-link" href="/Report">
           <i class="icon-bar-graph menu-icon"></i>
           <span class="menu-title">Report</span>
         </a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/Table">
           <i class="icon-columns menu-icon"></i>
           <span class="menu-title">Table</span>
         </a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/ChangePass">
           <i class="icon-columns menu-icon"></i>
           <span class="menu-title">Change Password</span>
         </a>
       </li>
    
    
       <li class="nav-item">
         <a class="nav-link" href="/">
           <i class="icon-head menu-icon"></i>
           <span class="menu-title">Log Out</span>
         </a>
       </li>


     </ul>
  </nav>



  <div class="main-panel">

  <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Information</h4>
                  <p class="card-description">
                    
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="NameofFramer">Name of Framer</label>
                      <input type="text" class="form-control" id="NameofFarmer" placeholder="Name of Farmer">
                    </div>
                    <div class="form-group">
                      <label for="FarmerLocation">Farmer Location</label>
                      <input type="text" class="form-control" id="FarmerLocation" placeholder="Farmer Location">
                    </div>
                    <div class="form-group">
                      <label for="NoofCans">No. of Cans</label>
                      <input type="number" class="form-control" id="NoofCans" placeholder="No. of Cans">
                    </div>
                    <div class="form-group">
                      <label for="SeedlingDate">Seedling Date</label>
                      <input type="date" class="form-control" id="SeedlingDate"  placeholder="Seedling Date">
                    </div>
                                
                    <div class="form-group">
                      <label for="NoofArea">Expected No. of Area</label>
                      <input type="text" class="form-control" id="NoofArea" placeholder="Expected No of Area">
                    </div>
                  

                   
                    <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Expected Damaged</h4>
                  <p class="card-description">
                  
                  </p>
           
                    <div class="form-group">
                      <label for="DamegeTyphoon">Damaged By Typhoon (ha)</label>
                      <input type="text" class="form-control" id="DamagedTyphoon" placeholder=" Damaged By Typhoon">
                    </div>
                                     <div class="form-group">
                      <label for="Rain"> Damaged By Heavy Rains(HA)</label>
                      <input type="text" class="form-control" id="Rain" placeholder=" Damaged By Heavy Rains">
                    </div>
        
                      <div class="form-group">
                      <label for="Toatal">Total Damaged(HA)</label>
                      <input type="text" class="form-control" id="TotalDamagedd" placeholder=" TotalDamagedd">
                    </div> 
                </div>
              </div>
      
         
            
     
         
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Status </h4>
                  <p class="card-description">
                    Report
                  </p>
     
                  <div class="form-group">
                      <label for="StandingCrop">Standing Crop</label>
                      <input type="text" class="form-control" id="StandingCrop" placeholder="StandingbCrop">
                    </div>
                    <div class="form-group">
                      <label for="TransplateDate">Transplante Date</label>
                      <input type="date" class="form-control" id="TransplateDate" placeholder="Transplate Date">
                    </div>
       
           
                      
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Expected </h4>
                  <p class="card-description">
                                  </p>
             
              <div class="form-group">
                      <label for="ExpectedDate">Expected Date of Harvest</label>
                      <input type="date" class="form-control" id="ExpectedDate" placeholder="Expected Date of Harvest">
                    </div>
                    <div class="form-group">
                      <label for="ExpectedArea" >Expected Area of Harvest(HA)</label>
                      <input type="text" class="form-control" id="ExpectedArea" placeholder="Expected Area of Harvest">
                    </div>
                    <div class="form-group">
                      <label for="ExpectedVolume">Expected Volume of Harvest (MT)</label>
                      <input type="number" class="form-control" id="ExpectedVolume" placeholder="Expected Volume of Harvest">
                    </div>
                                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
    
                    </div>
                  </div>
                
                  </form>

                 
     
                  <br>
                    <br>  <br>
                    <br>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">   Information Table</h4>
                  <p class="card-description">
                   Report
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th> Name of Framer</th>
                          <th>Farm Location</th>
                          <th>No. of Cans</th>
                          <th> Seedling Date</th>
                          <th> Expected No. of Area</th>                        
                        </tr>
                      </thead>
                      <tbody>
                       
                                        
                      </tbody>
                             
                    </table>
                    <br>
                  </div>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Damagedd By Typhoon (ha)</th>
                          <th> Damaged By Heavy Rains(HA)</th>
                          <th>Total Damaged(HA)</th>                        
                          <th>No. of Cans Damaged</th>
                                                  </tr>
                        
                      </thead>
                      
                      <tbody>
                    
                                        
                      </tbody>
                             
                    </table>   
                    <br>
                  </div>
                    <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                         
                          <th>Standing Crop</th>
                          <th>Transplante Date</th>
                          <th>Expected Date of Harvest</th>
                          <th>Expected Area of Harvest(HA)</th>
                          <th>Expected Volume of Harvest (MT)</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                                        
                      </tbody>
                    </table>
</div>
                </div>
            
            </div>
               
        

                </div>

                </div>
              </div>
















<script src="public/adminuser/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src= "public/adminuser/vendors/chart.js/Chart.min.js"></script>
  <script src= "public/adminuser/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src= "public/adminuser/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src= "public/adminuser/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src= "public/adminuser/js/off-canvas.js"></script>
  <script src= "public/adminuser/js/hoverable-collapse.js"></script>
  <script src= "public/adminuser/js/template.js"></script>
  <script src= "public/adminuser/js/settings.js"></script>
  <script src= "public/adminuser/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src= "public/adminuser/js/dashboard.js"></script>
  <script src= "public/adminuser/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

