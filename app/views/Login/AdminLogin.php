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
  <br>
  <br>
      

  <section class="about_section layout_margin-top">
  <div class="container  ">
    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="public/agrisync/images/di.png" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
           
            <h1> Log In</h1>
            <form >
              <br>
              
<div class="row mb-4">
  <div class="btn-group">
  <button type="button" class="btn btn-success" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Administrator
  </button>
  
  </div>
  </div>

<!-- Email input -->

<div class="tab-content" id="pills-tabContent" >
              <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row mb-4">
                    <div class="form px-4">
                        <form action="/signin" method="post">
                        <div class="form-input mb-5">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                            <input type="password" name="password" class="form-control" placeholder="Password" required >
                            <br>

                            <a href="<?=site_url()?>/AdminRegister">Create Account?</a>
                        </form>
                       </div>
                    </div>
                </div>
</div>





<!-- 2 column grid layout for inline styling -->
<div class="row mb-4">
<div class="col d-flex justify-content-center">


<!-- Checkbox -->
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
<label class="form-check-label" for="form2Example31"> Remember me </label>
</div>
</div>


<div class="col">
<!-- Simple link -->
<a href="/">Forgot password?</a>
</div>
</div>

<!-- Submit button -->
<div class="text-center">
<a type="button" href="/home"  class="btn btn-primary btn-block mb-4" >Sign in</a>
</div>


</form>
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