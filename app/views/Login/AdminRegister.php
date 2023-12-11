<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrisync</title>
   
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
</head>
<style>
       
      
        .card {
            width: 400px;
            border: none
        }

        .btr {
            border-top-right-radius: 5px !important
        }

        .btl {
            border-top-left-radius: 5px !important
        }

        .btn-dark {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd
        }

        .btn-dark:hover {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd
        }

        .nav-pills {
            display: table !important;
            width: 100%
        }

        .nav-pills .nav-link {
            border-radius: 0px;
            border-bottom: 1px solid #0d6efd40
        }

        .nav-item {
            display: table-cell;
            background: #0d6efd2e
        }

        .form {
            padding: 10px;
            height: 370px
        }

        .form input {
            margin-bottom: 12px;
            border-radius: 3px
        }

        .form input:focus {
            box-shadow: none
        }

        .form button {
            margin-top: 20px
        }
    </style>
<body>
<header class="header_section" style="position: fixed; top: 0; left: 0; z-index: 9999; width: 100%; height: 100px; background-color: #00a087;">

<div class="logo" style="position: fixed; top: 0; left: 0;height: 0; width: 10;">
   <a href="/"> <img src="public/agrisync/images/L.png" height="100" width="100"></a>
   <a class="navbar-brand" href="/">
    
        
    <span>
    Agrisync 
    </span>        


</a>

</div>



</header>

 
<br>
<section class="vh-100">
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center h-100">
    <div class="col-md-6 ">
        <div class="img-box">
          <img src="public/agrisync/images/di.png" alt="">
        </div>
      </div>
      <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="card" style=>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center"> <a class="nav-link btr active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Signup</a> </li>
            </ul>
            
                <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="form px-4">
                        <form action="<?php echo site_url('/signup'); ?>" method="post" onsubmit="return validateForm()">
                           
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" oninput="validatePassword()" required>
                            <div style="position: relative;">
                                <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirm Password" oninput="validatePassword()" required>
                                <span id="password-status" style="font-size: 16px; position: absolute; top: 50%; transform: translateY(-50%); right: 5px;"></span>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">Signup</button>
                            <a href="<?=site_url()?>/AdminLogin">Already have an account?</a>
                        </form>
                    </div>
                </div>
            
        </div>
    </div>
    </div>
  </div>
</section>

<br>
<br>
<br>

    
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
                A centralized Website for Onion Report in LGU MIMAROPA.
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
                Contact
                </a>
                <a class="" href="#">
                  Login
                </a>
              </div>
            </div>
          </div>          <div class="img-box">
                <img src="public/agrisync/images/seal.png" alt="" width="300" height="300">
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
  
<script>
    function validatePassword() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmpassword").value;
        var passwordStatus = document.getElementById("password-status");

        if (confirmPassword === "") {
            passwordStatus.innerHTML = "";
        } else if (password === confirmPassword) {
            passwordStatus.innerHTML = "&#10004;";
            passwordStatus.style.color = "green";
        } else {
            passwordStatus.innerHTML = "&#10006;";
            passwordStatus.style.color = "red";
        }
    }

    function validateForm() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmpassword").value;

        if (password !== confirmPassword) {
            alert("Passwords do not match!");
            return false;
        }

        return true;
    }
</script>
   
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