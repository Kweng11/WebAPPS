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
            width: 500px;
            border: none
        }

        .btr {
            border-top-right-radius: 7px !important
        }

        .btl {
            border-top-left-radius: 7px !important
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
            padding: 20px;
            height: 450px
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
<section>
  <br>
  <br>
  <br>
  <br>
  <div class="container py-6 h-100">
  <div class="d-flex justify-content-center align-items-center mt-5">
  <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      
      <form class="row g-3 needs-validation" novalidate method="post" action="/auth">

<div class="col-12">
    <label for="yourEmail" class="form-label">Email</label>
    <div class="input-group has-validation">
        <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
        <input type="text" name="email" class="form-control"
            id="yourEmail" required>
        <div class="invalid-feedback">Please enter your Email.</div>
    </div>
</div>

<div class="col-12">
    <label for="yourPassword" class="form-label">Password</label>
    <input type="password" name="password" class="form-control"
        id="yourPassword" required>
    <div class="invalid-feedback">Please enter your password!</div>
</div>

<div class="col-12">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember"
            value="true" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Remember me</label>
    </div>
</div>
<div class="col-12">
    <button class="btn btn-primary w-100" type="submit">Login</button>
</div>
<div class="col-12">
    <p class="small mb-0">Don't have account? <a
            href="/LGURegister">Create an account</a></p>
</div>
<?= (isset($fail) && !isset($success))? 
                  "<div id='alert-border-2' class=' mt-2 rounded flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800' role='alert'>
                  <svg class='flex-shrink-0 w-4 h-4' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='currentColor' viewBox='0 0 20 20'>
                  <path d='M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z'/>
                  </svg>
                  <div class='ms-3 text-sm font-medium'>
                  " . $fail . "
                  </div>
                  <button type='button' class='ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700'  data-dismiss-target='#alert-border-2' aria-label='Close'>
                      <span class='sr-only'>Dismiss</span>
                      <svg class='w-3 h-3' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 14 14'>
                          <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6'/>
                      </svg>
                  </button>
              </div>"

              : "" ?>
              <?= (isset($success) && !isset($fail))? 
              
              "<div id='alert-border-3' class='mt-2 flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800' role='alert'>
              <svg class='flex-shrink-0 w-4 h-4' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='currentColor' viewBox='0 0 20 20'>
              <path d='M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z'/>
              </svg>
              <div class='ms-3 text-sm font-medium'>
              " . $success . "
              </div>
              <button type='button' class='ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700'  data-dismiss-target='#alert-border-3' aria-label='Close'>
              <span class='sr-only'>Dismiss</span>
              <svg class='w-3 h-3' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 14 14'>
                  <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6'/>
              </svg>
              </button>
              </div>"

              : "" ?>  
</form>
      </div>
    </div>

    

</section>

<br>
<Br>
<Br>
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