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



  </div>


  <div class="main-panel">


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_contact">
            <h4>
            Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Address: J.P. Rizal Street, Barangay Camilmil, Calapan City, Oriental Mindoro
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Telefax: 8927-43-50
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email: mimaropa@mail.da.gov.ph
                </span>
              </a>
            </div>
          </div>
          <div class="footer_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
            
              All content is in the public domain unless otherwise stated.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto footer_col">
          <div class="footer_link_box">
            <h4>
              Links
            </h4>
            <div class="footer_links">
              <a class="active" href="#">
                Home
              </a>
              <a class="" href="#">
                About
              </a>
              <a class="" href="#">
              
              </a>
          
            </div>
          </div>
        </div>          <div class="img-box">
              <img src="@/assets/agrisync/images/seal.png" alt="" width="300" height="300">
            </div>
    
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="">3F1</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

          
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
     
  <!-- jQery -->
  <script src="public/agrisync/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script  src="public/agrisync/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script  src="public/agrisync/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map --> 

</body>

</html>

