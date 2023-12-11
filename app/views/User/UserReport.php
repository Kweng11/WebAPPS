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
  <link href="public/adminuser/vendors/datatables.net-bs4/dataTables.boottstrap4.css" rel="stylesheet">
  <link href="public/adminuser/vendors/ti-icons/css/themify-icons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="public/adminuser/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link href="public/adminuser/css/vertical-layout-light/style.css" rel="stylesheet">
    <!-- bootstrap core css -->
    <link rel="stylesheet"  href="public/agrisync/css/bootstrap.css" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!--owl slider stylesheet -->
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<link href="public/agrisync/css/font-awesome.min.css" rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="public/agrisync/css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="public/agrisync/css/responsive.css" rel="stylesheet" />
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
       <a class="nav-link" href="/Main">
         <i class="icon-contract menu-icon"></i>
         <span class="menu-title">Home</span>
       </a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="/UserDashboard">
           <i class="icon-bar-graph menu-icon"></i>
           <span class="menu-title">Dashboard</span>
         </a>
       </li>

       <li class="nav-item">
         <a class="nav-link" href="/UserReport">
           <i class="icon-bar-graph menu-icon"></i>
           <span class="menu-title">Report</span>
         </a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/UserTable">
           <i class="icon-columns menu-icon"></i>
           <span class="menu-title">Table</span>
         </a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/ResetPass">
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
            
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Report</h4>
                  <canvas id="lineChart"></canvas>
                </div>
              </div>
            </div>

            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  <canvas id="barChart"></canvas>
                </div>
              </div>
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

