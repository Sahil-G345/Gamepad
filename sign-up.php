<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Sign up page</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen">
  <style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
    }

    .card-registration .select-arrow {
      top: 13px;
    }

    /* img {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    } */
  </style>
</head>

<body>
  <div class="loader_bg">
    <div class="loader"><img src="loading.gif" alt="#"></div>
  </div>
  <!-- header section start -->
  <div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="padding-left: 450px;">
          <li class="nav-item">
            <a class="nav-link" href="index.html">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.html">OUR PRODUCTS</a>
          </li>
          <!-- <li class="nav-item">
                  <a class="nav-link" href="video.html">VIDEO GAMES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="remot.html">REMOT CONTROL</a>
                </li> -->
          <li class="nav-item">
            <a class="nav-link" href="contact.html">CONTACT US</a>
          </li>
          <!-- <li class="nav-item">
                  <a class="nav-link" href="#"><img src="images/search-icon.png"></a>
                </li> -->
          <li class="nav-item">
            <a class="nav-link" style="color: #1ca7e3;" href="#">SIGN IN</a>
          </li>
          <!-- <li class="nav-item">
                  <a class="nav-link" href="#">REGISTER</a>
                </li> -->
        </ul>
      </div>
    </nav>
  </div>
  <!-- header section end -->


  <section class="h-100 bg-dark">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="spider.jpg" alt="Sample photo" class="img-fluid"
                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              </div>

              <div class="col-xl-6">
                <a href="index.php" target="_self">
                  <p class="pull-right" style="color:rgb(105, 195, 251)">Already a member? Log in</p>
                </a>
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 ">Register here</h3>


                  <form action="process/register.php" method="post" onsubmit="return validation()">


                    <div class="form-group">
                      <label for="Name" class="font-weight-bold">Full Name:</label>
                      <input type="text" class="form-control" name="Name" id="Name">
                      <span id="name" class="text-danger font-weight-bold"></span>
                    </div>

                    <div class="form-group">
                      <label class="font-weight-bold">Email:</label>
                      <input type="text" name="Email" id="Email" class="form-control">
                      <span class="text-danger font-weight-bold" id="email"></span>
                    </div>

                    <div class="form-group">
                      <label class="font-weight-bold">Username</label>
                      <input type="text" class="form-control" id="User" name="User">
                      <span class="text-danger font-weight-bold" id="user"></span>
                    </div>

                    <div class="form-group">
                      <label class="font-weight-bold">Password</label>
                      <input type="password" class="form-control" id="Pass" name="Pass">
                      <span class="text-danger font-weight-bold" id="pass"></span>
                    </div>

                    <div class="form-group">
                      <label class="font-weight-bold">Confirm Password</label>
                      <input type="password" class="form-control" id="Cpass" name="Cpass">
                      <span class="text-danger font-weight-bold" id="cpass"></span>
                    </div>

                    <div class="form-group">
                      <label class="font-weight-bold">Mobile Number:</label>
                      <input type="text" name="Number" id="Number" class="form-control">
                      <span class="text-danger font-weight-bold" id="number"></span>
                    </div>

                    <div class="form-group">
                      <label class="font-weight-bold">Address:</label>
                      <input type="text" name="AD" id="AD" class="form-control">
                      <span class="text-danger font-weight-bold" id="ad"></span>
                    </div>

                    <div class="form-group">
                      <label class="font-weight-bold">Pincode:</label>
                      <input type="text" name="Pin" id="Pin" class="form-control">
                      <span class="text-danger font-weight-bold" id="pin"></span>
                    </div>



                    <!-- <div class="row">
                      <div class="col-md-6 mb-4">


                        <div class="form-outline">
                          <input type="text" id="Fname" class="form-control form-control-lg" />
                          <label class="form-label" for="Fname">First name</label>
                        </div>
                        <span class="text-danger font-weight-bold" id="fname"></span>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="Lname" class="form-control form-control-lg" />
                          <label class="form-label" for="Lname">Last name</label>
                          <span class="text-danger font-weight-bold" id="lname"></span>
                        </div>
                      </div>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="Email" class="form-control form-control-lg" />
                      <label class="form-label" for="Email">Email ID</label>
                      <span class="text-danger font-weight-bold" id="email"></span>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="Pass" class="form-control form-control-lg" />
                      <label class="form-label" for="Pass">Password</label>
                      <span class="text-danger font-weight-bold" id="pass"></span>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="Phone" class="form-control form-control-lg" />
                      <label class="form-label" for="Phone">Phone Number</label>
                      <span class="text-danger font-weight-bold" id="phone"></span>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="DOB" class="form-control form-control-lg" />
                      <label class="form-label" for="DOB">DOB</label>
                      <span id="dob" class="text-danger font-weight-bold"></span>
                    </div>


                    <div class="form-outline mb-4">
                      <input type="text" id="AD1" class="form-control form-control-lg" />
                      <label class="form-label" for="AD1">Address Line 1</label>
                      <span id="ad1" class="text-danger font-weight-bold"></span>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="AD2" class="form-control form-control-lg" />
                      <label class="form-label" for="AD2">Address Line 2</label>
                      <span id="ad2" class="text-danger font-weight-bold"></span>
                    </div>


                    <div class="form-outline mb-4">
                      <input type="text" id="Pin" class="form-control form-control-lg" />
                      <label class="form-label" for="Pin">Pincode</label>
                      <span id="pin" class="text-danger font-weight-bold"></span>
                    </div> -->

                    <div class="d-flex justify-content-end pt-3">
                      <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                      <input type="submit" value="submit" name="submit"  class="btn btn-warning btn-lg ms-2">
                    </div>
                  </form>
                  <script type="text/javascript">
                    function validation() {
                      var Name = document.getElementById('Name').value;
                      var Email = document.getElementById('Email').value;
                      var User = document.getElementById('User').value;
                      var Pass = document.getElementById('Pass').value;
                      var Cpass = document.getElementById('Cpass').value;
                      var Number = document.getElementById('Number').value;
                      var AD = document.getElementById('AD').value;
                      var Pin = document.getElementById('Pin').value;

                      if (Name == "") {
                        document.getElementById('name').innerHTML = " ** Please fill the name field";
                        return false;
                      }

                      if ((Name.length <= 2) || (Name.length >= 30)) {
                        document.getElementById('name').innerHTML = " ** Name length must be between 2 and 30";
                        return false;
                      }

                      if (!isNaN(Name)) {
                        document.getElementById('name').innerHTML = " ** only characters are allowed";
                        return false;
                      }

                      if (Email == "") {
                        document.getElementById('email').innerHTML = " ** Please fill the email field";
                        return false;
                      }
                      if (Email.indexOf('@') <= 0) {
                        document.getElementById('email').innerHTML = " ** @ Invalid Position";
                        return false;
                      }

                      if ((Email.charAt(Email.length - 4) != '.') && (Email.charAt(Email.length - 3) != '.')) {
                        document.getElementById('email').innerHTML = " ** . Invalid Position";
                        return false;
                      }

                      if (User == "") {
                        document.getElementById('user').innerHTML = " ** Please fill the name field";
                        return false;
                      }

                      if ((User.length <= 2) || (User.length >= 30)) {
                        document.getElementById('user').innerHTML = " ** Name length must be between 2 and 30";
                        return false;
                      }

                      if (Pass == "") {
                        document.getElementById('pass').innerHTML = " ** Please fill the password field";
                        return false;
                      }

                      if ((Pass.length <= 5) || (Pass.length >= 20)) {
                        document.getElementById('pass').innerHTML = " ** Password length must be between 5 and 20";
                        return false;
                      }

                      if (Cpass == "") {
                            document.getElementById('cpass').innerHTML = " ** Please fill the confirm password field";
                            return false;
                        }
                      if (Pass != Cpass) {
                           document.getElementById('cpass').innerHTML = " ** Password does not match";
                            return false;
                         }

                      if (Number == "") {
                        document.getElementById('number').innerHTML = " ** Please fill the mobile number field";
                        return false;
                      }

                      if (isNaN(Number)) {
                        document.getElementById('number').innerHTML = " ** user must write digits only not characters";
                        return false;
                      }
                      if (Number.length != 10) {
                        document.getElementById('number').innerHTML = " ** Mobile Number must be 10 digits only";
                        return false;
                      }

                      if (AD == "") {
                        document.getElementById('ad').innerHTML = " ** Please fill the Address field";
                        return false;
                      }

                      if (Pin == "") {
                        document.getElementById('pin').innerHTML = " ** Please fill the Pin code field";
                        return false;
                      }

                      if (Pin.length != 6) {
                        document.getElementById('pin').innerHTML = " **Pin code must be 10 digits only";
                        return false;
                      }
                    }

                  </script>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- footer section start -->
  <div class="section_footer ">
    <div class="container">
      <div class="footer_section_2">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="account_text">About Us</h2>
            <p class="ipsum_text_2">Gaming controllers are an essential accessory for avid gamers, providing more
              precision and control than a keyboard and mouse.If you’re looking for the perfect controllers to elevate
              your gaming
              experience, look no further than Gamepad Store!</p>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="account_text">Useful Link</h2>
            <div class="useful_link">
              <ul>
                <li><a href="#">Video games</a></li>
                <li><a href="#">Remote control</a></li>
                <li><a href="#">3d controller</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="account_text">Contact Us</h2>
            <p class="ipsum_text_2">Paritosh Sandhan - <span><a href="#" style="color: #337ab7;">+91992180****</a></p>
            <p class="ipsum_text_2">Sahil Gaikwad - <a href="#" style="color: #337ab7;">+917058147****</a></p>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="account_text text-allign-left">Premium Membership</h2>
            <input type="" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
            <button class="subscribr_bt">SUBSCRIBE</button>
          </div>
        </div>
      </div>
      <div class="social_icon">
        <ul>
          <li><a href="https://www.facebook.com/" target="_blank"><img src="images/fb-icon.png"></a></li>
          <li><a href="https://twitter.com/home?lang=en" target="_blank"><img src="images/twitter-icon.png"></a></li>
          <li><a href="https://www.linkedin.com/hp" target="_blank"><img src="images/linkdin-icon.png"></a></li>
          <li><a href="https://www.instagram.com/_sahil_gaikwad_official/" target="_blank"><img
                src="images/instagram-icon.png"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">Copyright 2020 All Right Reserved By Gamepad Store
      </p>
    </div>
  </div>
  <!-- footer section end -->
  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/plugin.js"></script>
  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- javascript -->
  <script src="js/owl.carousel.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>