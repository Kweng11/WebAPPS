<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Agrisync</title>
  <!-- plugins:css -->
  <link href="public/adminuser/vendors/feather/feather.css" rel="stylesheet">
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
  <link rel="stylesheet" href="public/agrisync/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

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
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="public/agrisync/images/na.png" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="public/agrisync/images/nal.png" alt="logo" /></a>
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
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="">
                <i class="ti-power-off text-primary"></i>
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
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-success border mr-3"></div>Dark
          </div>
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
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Information</h4>



                  <form action="/<?= isset(($edit['id'])) ? "submitedit/" . $edit['id'] : "submit" ?>" method="post">
                    <div class="form-group">
                      <label for="NameofFramer">Name of Farmer</label>
                      <input type="text" class="form-control" id="NameofFarmer" placeholder="Name of Farmer" name="NameofFarmer" required value="<?= (isset($edit['id'])) ? $edit['names'] : ""  ?>">
                    </div>
                    <div class="form-group">
                      <label for="FarmerLocation">Farmer Location</label>
                      <input type="text" class="form-control" id="FarmerLocation" placeholder="Farmer Location" name="FarmerLocation" required value="<?= (isset($edit['id'])) ? $edit['location'] : ""  ?>">
                    </div>
                    <div class="form-group">
                      <label for="NoofCans">No. of Cans</label>
                      <input type="number" class="form-control" id="NoofCans" placeholder="No of Cans" name="NoofCans" required value="<?= (isset($edit['id'])) ? $edit['cans'] : ""  ?>">
                    </div>
                    <div class="form-group">
                      <label for="SeedlingDate">Seedling Date</label>
                      <input type="date" class="form-control" id="SeedlingDate" placeholder="Seedling Date" name="SeedlingDate" required value="<?= (isset($edit['id'])) ? $edit['date'] : ""  ?>">
                    </div>

                    <div class="form-group">
                      <label for="NoofArea">Expected No. of Area</label>
                      <input type="text" class="form-control" id="NoofArea" placeholder="Expected No of Area" name="NoofArea" required value="<?= (isset($edit['id'])) ? $edit['area'] : ""  ?>">
                    </div>

                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Expected Damaged</h4>


                        <div class="form-group">
                          <label for="DamegeTyphoon">Damaged By Typhoon (ha)</label>
                          <input type="text" class="form-control" id="DamagedTyphoon" placeholder=" Damaged By Typhoon" name="Damagedoftyphoon" required value="<?= (isset($edit['id'])) ? $edit['typhoon'] : ""  ?>">
                        </div>
                        <div class="form-group">
                          <label for="DamageRain"> Damaged By Heavy Rains(HA)</label>
                          <input type="text" class="form-control" id="Rain" placeholder=" Damaged By Heavy Rains" name="DamagedofRains" required value="<?= (isset($edit['id'])) ? $edit['heavy_rains'] : ""  ?>">
                        </div>

                        <div class="form-group">
                          <label for="Total">Total Damaged(HA)</label>
                          <input type="text" class="form-control" id="TotalDamaged" placeholder=" Total Damaged" name="TotalDamaged" required value="<?= (isset($edit['id'])) ? $edit['total_damages'] : ""  ?>">
                        </div>
                      </div>
                    </div>e
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Status </h4>
                        <p class="card-description">
                          Report
                        </p>

                        <div class="form-group">
                          <label for="StandingCrop">Standing Crop</label>
                          <input type="text" class="form-control" id="StandingCrop" placeholder="Standing Crop" name="StandingCrop" required value="<?= (isset($edit['id'])) ? $edit['standing_crop'] : ""  ?>">
                        </div>
                        <div class="form-group">
                          <label for="TransplateDate">Transplante Date</label>
                          <input type="date" class="form-control" id="TransplateDate" placeholder="Transplate Date" name="TransplateDate" required value="<?= (isset($edit['id'])) ? $edit['transplate_date'] : ""  ?>">
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
                          <input type="date" class="form-control" id="ExpectedDate" placeholder="Expected Date of Harvest" name="ExpectedHarvest" required value="<?= (isset($edit['id'])) ? $edit['expected_date'] : ""  ?>">
                        </div>
                        <div class="form-group">
                          <label for="ExpectedArea">Expected Area of Harvest(HA)</label>
                          <input type="text" class="form-control" id="ExpectedArea" placeholder="Expected Area of Harvest" name="ExpectedArea" required value="<?= (isset($edit['id'])) ? $edit['expected_area'] : ""  ?>">
                        </div>
                        <div class="form-group">
                          <label for="ExpectedVolume">Expected Volume of Harvest (MT)</label>
                          <input type="number" class="form-control" id="ExpectedVolume" placeholder="Expected Volume of Harvest" name="ExpectedVolume" required value="<?= (isset($edit['id'])) ? $edit['expected_volume'] : ""  ?>">
                        </div>
                        
                        <div class="form-group">
                          <label for="DamagesCans">Number of  Damages Cans</label>
                          <input type="number" class="form-control" id="DamagesCans" placeholder="Number of Damages Cans" name="DamagesCans" required value="<?= (isset($edit['id'])) ? $edit['cans_damages'] :"" ?>">
                        </div>

                        <button type="submit" value="<?= (isset($edit['id'])) ? "Update" : "Submit"  ?>" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>

                      </div>
                    </div>

                  </form>



                  <br>
                  <br> <br>
                  <br>

                  <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title"> Information Table</h4>
                        <p class="card-description">
                          Report
                        </p>

                        <div class="table-responsive pt-3">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th> Name of Framer</th>
                                <th>Farm Location</th>
                                <th>No of Cans</th>
                                <th> Seedling Date</th>
                                <th> Expected No. of Area</th>
                                <th>Damagedd By Typhoon (ha)</th>
                                <th> Damaged By Heavy Rains(HA)</th>
                                <th>Total Damaged(HA)</h>
                                <th>Standing Crop</th>
                                <th>Transplante Date</th>
                                <th>Expected Date of Harvest</th>
                                <th>Expected Area of Harvest(HA)</th>
                                <th>Expected Volume of Harvest (MT)</th>
                                <th> Number of Damages Cans </th>
                                <th>Action</th>

                            </thead>
                            <tbody>

                              <?php foreach ($users as $u) : ?>
                                <tr>
                                  <td><?= $u['names']; ?></td>
                                  <td><?= $u['location']; ?></td>
                                  <td><?= $u['cans']; ?></td>
                                  <td><?= $u['date']; ?></td>
                                  <td><?= $u['area']; ?></td>
                                  <td><?= $u['typhoon']; ?></td>
                                  <td><?= $u['heavy_rains']; ?></td>
                                  <td><?= $u['total_damages']; ?></td>
                                  <td><?= $u['standing_crop']; ?></td>
                                  <td><?= $u['transplate_date']; ?></td>
                                  <td><?= $u['expected_date']; ?></td>
                                  <td><?= $u['expected_area']; ?></td>
                                  <td><?= $u['expected_volume']; ?></td>
                                  <td><?= $u['cans_damages'];?></td>
                                  <td><a href="/delete-user/<?= $u['id']; ?>">DELETE USER</a> || <a href="/edit-user/<?= $u['id']; ?> ">EDIT USER </td>
                                </tr>

                              <?php endforeach ?>
                            </tbody>
                          </table>
                          <br>
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
          <script src="public/adminuser/vendors/chart.js/Chart.min.js"></script>
          <script src="public/adminuser/vendors/datatables.net/jquery.dataTables.js"></script>
          <script src="public/adminuser/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
          <script src="public/adminuser/js/dataTables.select.min.js"></script>

          <!-- End plugin js for this page -->
          <!-- inject:js -->
          <script src="public/adminuser/js/off-canvas.js"></script>
          <script src="public/adminuser/js/hoverable-collapse.js"></script>
          <script src="public/adminuser/js/template.js"></script>
          <script src="public/adminuser/js/settings.js"></script>
          <script src="public/adminuser/js/todolist.js"></script>
          <!-- endinject -->
          <!-- Custom js for this page-->
          <script src="public/adminuser/js/dashboard.js"></script>
          <script src="public/adminuser/js/Chart.roundedBarCharts.js"></script>
          <!-- End custom js for this page-->
</body>

</html>