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
  <title>Contact</title>
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
            <a class="nav-link" style="color: #1ca7e3;" href="contact.html">CONTACT US</a>
          </li>
          <!-- <li class="nav-item">
                  <a class="nav-link" href="#"><img src="images/search-icon.png"></a>
                </li> -->
          <li class="nav-item">
            <a class="nav-link" href="#">SIGN IN</a>
          </li>
          <!-- <li class="nav-item">
                  <a class="nav-link" href="#">REGISTER</a>
                </li> -->
        </ul>
      </div>
    </nav>
  </div>
  <!-- header section end -->
  <!-- contact section start -->
  <div class="contact_section layout_padding padding_top_0">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="email_box">
            <div class="input_main">
              <div class="container">
                <form action="insert0.php" onsubmit="return validation()" method="post">
                  <div class="form-group">
                    <input type="text" class="email-bt" placeholder="Name" name="Name" id="name">
                  </div>
                  <span class="text-danger font-weight-bold" id="username"></span>
                  <div class="form-group">
                    <input type="text" class="email-bt" placeholder="Email" name="Email" id="email">
                  </div>
                  <span class="text-danger font-weight-bold" id="mail"></span>
                  <div class="form-group">
                    <input type="text" class="email-bt" placeholder="Phone Number" name="Phone" id="phone">
                    <span class="text-danger font-weight-bold" id="num"></span>
                  </div>

                  <div class="form-group">
                    <textarea class="massage-bt" placeholder="Feedback" rows="5" id="comment"
                      name="Feed"></textarea>
                    <span class="text-danger font-weight-bold" id="com"></span>
                  </div>

                  <div class="main_bt"><input type="submit" value="Submit" name="submit" id=""
                        style="background: transparent;border: none;color: white;"></div>
                </form>
              </div>

            </div>
            <script>
              $(document).ready(function () {
                $(".fancybox").fancybox({
                  openEffect: "none",
                  closeEffect: "none"
                })
              });
            </script>
</body>
<script type="text/javascript">
  function validation() {
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var comment = document.getElementById('comment').value;

    if (name == "") {
      document.getElementById('username').innerHTML = " ** Please fill the username field";
      return false;
    }

    if ((name.length <= 2) || (name.length >= 20)) {
      document.getElementById('username').innerHTML = " ** Username length must be between 2 and 20";
      return false;
    }

    if (!isNaN(name)) {
      document.getElementById('username').innerHTML = " ** only characters are allowed";
      return false;
    }

    if (email == "") {
      document.getElementById('mail').innerHTML = " ** Please fill the email field";
      return false;
    }
    if (email.indexOf('@') <= 0) {
      document.getElementById('mail').innerHTML = " ** @ Invalid Position";
      return false;
    }

    if ((email.charAt(email.length - 4) != '.') && (email.charAt(email.length - 3) != '.')) {
      document.getElementById('mail').innerHTML = " ** . Invalid Position";
      return false;
    }

    if (phone == "") {
      document.getElementById('num').innerHTML = " ** Please fill the mobile number field";
      return false;
    }

    if (isNaN(phone)) {
      document.getElementById('num').innerHTML = " ** user must write digits only not characters";
      return false;
    }
    if (phone.length != 10) {
      document.getElementById('num').innerHTML = " ** Mobile Number must be 10 digits only";
      return false;
    }
    if (comment == "") {
      document.getElementById('com').innerHTML = " ** Please fill the Feedback field";
      return false;
    }
  }
</script>
</div>
</div>
<div class="col-md-6">
  <div class="image_6"><img src="images/img-6.png"></div>
</div>
</div>
</div>
</div>
<!-- contact section end -->
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


</html>