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
             <div class="col-md-12 grid-margin">
               <div class="row">
                 <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                   <h3 class="font-weight-bold">Welcome To Agrisync</h3>
                   <h6 class="font-weight-normal mb-0"><span class="text-primary"></span></h6>
                 </div>
                 <div class="col-12 col-xl-4">
                  <div class="justify-content-end d-flex">
                   <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                     <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="mdi mdi-calendar"></i> Today (4 Nov 2023)
                     </button>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                       <a class="dropdown-item" href="#">January - March</a>
                       <a class="dropdown-item" href="#">March - June</a>
                       <a class="dropdown-item" href="#">June - August</a>
                       <a class="dropdown-item" href="#">August - November</a>
                     </div>
                   </div>
                  </div>
                 </div>
               </div>
               <br>
               <br>
             </div>
           </div>




               <div class="row">
                 <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                   <div class="card card-light-blue">
                     <div class="card-body">
                       <p class="mb-4">Number of Farmers</p>
                       <h2 id="Table">Loading...</h2>
                     </div>
                   </div>
                 </div>
         
                 <script>
                 document.addEventListener("DOMContentLoaded", () => {
                   // Fetch data from your CodeIgniter route
                   fetch('/f')
                   .then(response => response.json())
                   .then(data => {
                // Display the total number of farmers
                document.getElementById('Table').textContent = data.numFarmers || 0;
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>

                 <div class="col-md-6 mb-4 stretch-card transparent">
                   <div class="card card-tale">
                     <div class="card-body">
                       <p class="mb-4">Total Damage </p>
                       <h2 id="Damage">Loading...</h2>
                   
                     </div>
                   </div>
                 </div>


                 <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    // Fetch data from your CodeIgniter route
                    fetch('/d') // Replace '/calculatedamage' with the actual route that points to your calculatedamage function
                      .then(response => response.json())
                      .then(data => {
                        // Display the total damage
                        document.getElementById('Damage').textContent = data.total_damages || 0;
                      })
                      .catch(error => console.error('Error fetching data:', error));
                  });
                </script>

</div>



<div class="row">

                 <div class="col-md-6 mb-4 stretch-card transparent">
                   <div class="card card-dark-blue">
                     <div class="card-body">
                       <p class="mb-4"> Standing Crop</p>
                       <h2 id="stand">Loading...</h2>
                     </div>
                   </div>
                 </div>
            
               <script>
                document.addEventListener("DOMContentLoaded", () => {
                    // Fetch data from your CodeIgniter route
                    fetch('/di') // Replace '/calculatedamage' with the actual route that points to your calculatedamage function
                      .then(response => response.json())
                      .then(data => {
                        // Display the total damage
                        document.getElementById('stand').textContent = data.standing_crop || 0;
                      })
                      .catch(error => console.error('Error fetching data:', error));
                  });
                </script>

                 <div class="col-md-6 stretch-card transparent">
                   <div class="card card-light-danger">
                     <div class="card-body">
                       <p class="mb-4">Number of Cans Damage</p>
                       <h2 id="da">Loading...</h2>
                     </div>
                   </div>
                 </div>
                 <script>
                document.addEventListener("DOMContentLoaded", () => {
                    // Fetch data from your CodeIgniter route
                    fetch('/ch') // Replace '/calculatedamage' with the actual route that points to your calculatedamage function
                      .then(response => response.json())
                      .then(data => {
                        // Display the total damage
                        document.getElementById('da').textContent = data.cans_damages|| 0;
                      })
                      .catch(error => console.error('Error fetching data:', error));
                  });
                </script>
            
  </div>



  <div class="row">
  
                  <div class="col-md-6 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                   <p class="card-title">Seedling date</p>
                   <canvas id="ling"></canvas>
                   <p class="font-weight-500"></p>
                  </div>
               </div>
             </div>
             <script>
    document.addEventListener("DOMContentLoaded", () => {
        // Fetch data from the PHP endpoint
        fetch('/se') // Adjust the path to your PHP file
            .then(response => response.json())
            .then(data => {
                const months = data.map(item => item.dt);
                const dateData = data.map(item => item.total_seedling);

                // Creating Line Chart
                var ctx = document.getElementById('ling').getContext('2d');
                new Chart(ctx, {
                    type: 'line',  // Changed from 'bar' to 'line'
                    data: {
                        labels: months,
                        datasets: [
                            {
                                label: 'Seedling Date',
                                data: dateData,
                                yAxisID: 'area',
                                fill: false,  // Setting fill to false for a line chart
                                borderColor: 'rgba(75, 192, 192, 1)',  // Adjust color as needed
                                tension: 0.1  // Adjust tension for line smoothing
                            },
                           
                        ]
                    },
                    options: {
                        
                          scales: {
                            x: {
                                type: 'category',
                                labels: months.map(date => {
                                    const dateObj = new Date(date);
                                    // Format the date as needed (e.g., "MMM DD" for month and day)
                                    return `${dateObj.toLocaleString('default', { month: 'long' })}`;
                                })
                            },
                            area: {
                                type: 'linear',
                                position: 'left',
                                title: {
                                    display: true,
                                    text: 'Standing Crop'
                                }
                            },
                          }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>








             
             <div class="col-md-6 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                 <p class="card-title">Location of  Farmers</p>
                      <!-- Pie Chart -->
                    <canvas id="chart"></canvas>
                  </div>
                </div>
               </div>
         
         
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Fetch data from the PHP endpoint
            fetch('/l') // Adjust the path to your PHP file
                .then(response => response.json())
                .then(data => {
                    const locations = data.locations;

                    // Creating Pie Chart
                    var ctx = document.getElementById('chart').getContext('2d');
                    new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: locations.map(item => item.location),
                            datasets: [{
                                label: 'Location',
                                data: locations.map(item => item.count),
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.7)',
                                    'rgba(54, 162, 235, 0.7)',
                                    'rgba(255, 206, 86, 0.7)',
                                    'rgba(75, 192, 192, 0.7)',
                                    'rgba(153, 102, 255, 0.7)',
                                    'rgba(255, 159, 64, 0.7)'
                                ],
                            }]
                        },
                        options: {
                            // Add any additional options you need
                        }
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        });
    </script>
  </div>
     

  
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Standing Crop</h5>
                <!-- Bar Chart -->
                <canvas id="art" ></canvas>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        // Fetch data from the PHP endpoint
        fetch('/pla') // Adjust the path to your PHP file
            .then(response => response.json())
            .then(data => {
                const months = data.map(item => item.dt);
                const cropData = data.map(item => item.total_standing_crop);
                

                // Creating Bar Chart
                var ctx = document.getElementById('art').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: months,
                        datasets: [
                            {
                                label: 'Standing Crop',
                                data: cropData,
                                yAxisID: 'area'
                            },
                           
                        ]
                    },
                    options: {
                        
                          scales: {
                            x: {
                                type: 'category',
                                labels: months.map(date => {
                                    const dateObj = new Date(date);
                                    // Format the date as needed (e.g., "MMM DD" for month and day)
                                    return `${dateObj.toLocaleString('default', { month: 'long' })}`;
                                })
                            },
                            area: {
                                type: 'linear',
                                position: 'left',
                                title: {
                                    display: true,
                                    text: 'Standing Crop'
                                }
                            },
                          }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>


    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Expected</h5>
                <!-- Bar Chart -->
                <canvas id="barChart" style="min-height: 400px;"></canvas>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Fetch data from the PHP endpoint
        fetch('/t') // Adjust the path to your PHP file
            .then(response => response.json())
            .then(data => {
                const months = data.map(item => item.mon);
                const areaData = data.map(item => item.total_expected_area);
                const volumeData = data.map(item => item.total_expected_volume);

                // Creating Bar Chart
                var ctx = document.getElementById('barChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: months,
                        datasets: [
                            {
                                label: 'Total Expected Area',
                                data: areaData,
                                yAxisID: 'area'
                            },
                            {
                                label: 'Total Expected Volume',
                                data: volumeData,
                                yAxisID: 'volume'
                            }
                        ]
                    },
                    options: {
                        scales: {
                            x: {
                                type: 'category',
                                labels: months.map(date => {
                                    const dateObj = new Date(date);
                                    // Format the date as needed (e.g., "MMM DD" for month and day)
                                    return `${dateObj.toLocaleString('default', { month: 'long' })}`;
                                })
                            },
                            area: {
                                type: 'linear',
                                position: 'left',
                                title: {
                                    display: true,
                                    text: 'Total Expected Area'
                                }
                            },
                            volume: {
                                type: 'linear',
                                position: 'right',
                                title: {
                                    display: true,
                                    text: 'Total Expected Volume'
                                }
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

