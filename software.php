
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SakthiCad</title>
  <link href="assets/CSS/index.css" media="all" rel="stylesheet">
  <link href="assets/Bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css" media="all" rel="stylesheet">
  <link href="assets/Bootstrap/bootstrap-5.0.2-dist/js/bootstrap.min.js" media="all" rel="stylesheet">
  <!-- Oswald-font -->
  <link href="http://fonts.cdnfonts.com/css/oswald-6" rel="stylesheet">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Header -->
  <section class="header header-fixed" id="myHeader">
    <nav class=" header-box navbar navbar-expand-lg navbar-light">
      <div class="container header-con-fixed">
        <a class="navbar-brand header-logo-parent" href="index.php">
          <img class="img-fluid header-logo" src="source/Images/Logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler navbar-toggler-forfixed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon navbar-toggler-icon-forfixed"></span>
        </button>
        <div class="collapse navbar-collapse header-topics" id="navbarNav">
          <ul class="navbar-nav header-topics-content">
            <li class="nav-item">
              <a class="nav-link hover-border" href="about_us.php">About&nbsp;Us</a>
            </li>
            <li class="nav-item active-page">
            <li class="nav-item dropdown" id="myDropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
      <ul class="dropdown-menu">
        <li> <a class="dropdown-item" href="electronics.php">Electronics</a></li>
        <li> <a class="dropdown-item" href="mechanical.php">Mechanical</a>
        <li> <a class="dropdown-item" href="software.php">Software</a>
        </ul>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-border" href="http://www.sakthicadd.com/coming_soon.htm">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-border" href="careers.php">Careers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><button class="chat"><img class="chat-logo" src="source/Images/chat.svg">CONTACT&nbsp;US</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-border" href="login1.php">Login</a>
            </li>
          </ul>
        </div>
    </nav>
  </section>
  <!-- Mobile-NavBar -->
  <section class="mobile-menu">
    <div class="close">
      <img src="source/Images/close.png" id="close" alt="close">
    </div>
    <ul class="navbar-nav header-topics-content">
    <li class="nav-item mobile-nav">
        <a class="menu-name" href="index.php">Home</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="about_us.php">About Us</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="services.php">Services</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="http://www.sakthicadd.com/coming_soon.htm">Products</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="careers.php">Careers</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="login1.php">Login</a>
      </li>
    </ul>
  </section>
  <!-- Product-content -->
 
  <!-- development -->
 
  <div class="col-lg-12 text-center">
        <h2 class="subtitle">Software</h2>
      </div>
 <!-- Slider -->
 <section class="sliders-parent">
    <section class="Dop-sliders">
      <div class="slide-left intro-left">
        <h1>Embedded Product Development Service</h1>
        
        <p>Development of all parts of embedded software including bootloaders, hardware software abstraction
layers (a.k.a. peripheral libraries), application libraries, and business logic applications for a wide range
of devices. Planning for an IoT product? We can develop Mobile application that can seamlessly connect
with your hardware.  </p>
      </div>
      <div class="slide-right">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="intro-right">
                <img src="source/Images/Arduino1.jpg" alt="logo">
              </div>
            </div>
</div>
        </div>
      </div>
    </section>
  </section>
  <section class="sliders-parent">
    <section class="Dop-sliders">
      <div class="slide-left intro-left">
        <h2>PCB Assembly Services:
</h2	>
        
        <p>Our PCB assembly service caters for a wide range of modern and legacy assembly techniques. From
simple through-hole designs to modern multi-layer, flex-rigid and HDI PCB technologies, all data are
design rule checked (DRC) and panelized to ensure compliance and best yield for our manufacturing
processes. In addition, surface mount solder stencils are checked and engineered with thickness and
aperture types in the SMT production process. </p>
      </div>
      <div class="slide-right">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="intro-right">
                <img src="source/Images/Arduino3.jpg" alt="logo">
              </div>
            </div>
</div>
        </div>
      </div>
    </section>
  </section>

  


  <!-- Footer -->
  <section class="footer">
    <div class="footer-com footer-1">
      <div class="container">
        <div class="row footer-1-row">
          <div class="col">
            <p class="fs-6 fw-bold txt1">STAY IN THE LOOP !</p>
            <h6 class="h1 fw-bold subscribe">SUBSCRIBE</h6>
            <p class="fs-6">to our monthly newsletter and learn the latest tech trends and discount coupons on PCBs.</p>
          </div>
          <div class="col">
            <img class="img-fluid right" src="source/Images/footer-1-image.png" alt="Footer-image" />
          </div>
        </div>
        <div class="col email-layer">
          <form method="POST" action="PHP/subscribe.php" id="form">
            <div class="input-layer">
              <input type="email" name="email" class="form-control email-input" id="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
              <!-- <input type="image"name="send" class="btn" id="send" class="img-fluid" type="image" src="Images/send.png"> -->
              <button type="submit" name="send" class="btn" id="send">
                <img class="img-fluid" src="source/Images/send.png" alt="Footer-image" /></button>
            </div>
          </form>
        </div>
        <div class="col email-layer">
          <p class="email-txt">By clicking send, you'll receive occasional emails from us. You always have the choice to unsubscribe within every email you receive.</p>
        </div>
        <div class="col sucess-msg">
        </div>
      </div>
    </div>
    <div class="footer-strip">
      <button class="talk-btn btn btn-primary">Let's talk</button>
    </div>
    <div class="footer-com footer-2">
      <div class="container">
        <div class="footer2-in">
          <div class="col footer-col col1">
            <a class="navbar-brand" href="#">
              <img class=" footer-2-mainlogo" src="source/Images/Logo.png" alt="Logo">
            </a>
            <p class="fs-6">All our work is bespoke and tailored to your needs, and we are thrilled to explore the technical details of your project - so get in touch today!</p>
            <div class="col footer-2-map">
              <a class="navbar-brand" href="http://www.sakthicadd.com/coming_soon.htm">
                <img class="img-fluid fly-in-right fade-in-right" src="source/Images/map.png" alt="Logo">
              </a>
            </div>
          </div>
          <div class="col footer-col col2">
            <a class="navbar-brand nav-link" href="http://www.sakthicadd.com/coming_soon.htm">
              <h2 class="footer-2-col3-heading">Navigate</h2>
            </a>
            <a class="navbar-brand nav-link" href="http://www.sakthicadd.com/coming_soon.htm">
              <p class="foot-ash">ABOUT US</p>
            </a>
            <a class="navbar-brand nav-link" href="http://www.sakthicadd.com/coming_soon.htm">
              <p class="foot-ash">SERVICES</p>
            </a>
            <a class="navbar-brand nav-link" href="http://www.sakthicadd.com/coming_soon.htm">
              <p class="foot-ash">PRODUCTS</p>
            </a>
            <a class="navbar-brand nav-link" href="http://www.sakthicadd.com/coming_soon.htm">
              <p class="foot-ash">CAREERS</p>
            </a>
          </div>
          <div class="col footer-col col3">
            <a class="navbar-brand nav-link" href="#">
              <h2 class="footer-2-col3-heading">Services</h2>
            </a>
            <a class="navbar-brand nav-link" href="http://www.sakthicadd.com/coming_soon.htm">
              <p class="foot-ash">MECHANICAL</p>
            </a>
            <a class="navbar-brand nav-link" href="http://www.sakthicadd.com/coming_soon.htm">
              <p class="foot-ash">ELECTRONICS & <br>EMBEDDED SYSTEMS</p>
            </a>
          </div>
          <div class="col footer-col col4">
            <h2 class="footer-2-col3-heading">Contact Us</h2>
            <div class="footer-2-contact">
              <img class="img-fluid footer-2-logo" src="source/Images/location.png" alt="Logo">
              <p class="fotter-2-contact-con">17/91,2nd Lane, C.S.Colony, Indira Nagar, Adyar, Chennai - 600020, Tamil Nadu</p>
            </div>
            <div class="footer-2-contact">
              <img class="img-fluid footer-2-logo" src="source/Images/email.png" alt="Logo">
              <p class="fotter-2-contact-con">contact@sakthicadd.com</p>
            </div>
            <div class="footer-2-contact">
              <img class="img-fluid footer-2-logo" src="source/Images/phone.png" alt="Logo">
              <p class="fotter-2-contact-con">+91 9444284487</p>
            </div>
            <div class="footer-2-contact footer-2-contacthours">
              <img class="img-fluid footer-2-logo" src="source/Images/clock.png" alt="Logo">
              <p class="fotter-2-contact-con">Monday to Saturday: 9.00 am to 6 pm</p>
            </div>
          </div>
        </div>
        <div class="row footer-2-bottom2">
          <div class="col footer-2-social-media-layout">
            <a class="navbar-brand" href="http://www.sakthicadd.com/coming_soon.htm">
              <img class="img-fluid social-media" src="source/Images/Facebook.png" alt="Logo">
            </a>
            <a class="navbar-brand" href="http://www.sakthicadd.com/coming_soon.htm">
              <img class="img-fluid social-media" src="source/Images/Instagram.png" alt="Logo">
            </a>
            <a class="navbar-brand" href="http://www.sakthicadd.com/coming_soon.htm">
              <img class="img-fluid social-media" src="source/Images/Twitter.png" alt="Logo">
            </a>
            <a class="navbar-brand" href="http://www.sakthicadd.com/coming_soon.htm">
              <img class="img-fluid social-media" src="source/Images/Linkedin.png" alt="Logo">
            </a>
          </div>
          <div class="footer-2-contacthours2">
            <p class="footer-2-bottom-txt foot-ash">Privacy Policy / Personal Information / Terms of Service<br>Copyrights © 2023 </p>
          </div>
        </div>
      </div>
  </section>
  <script src="assets/Jquery/jquery.js"></script>
  <script src="assets/JS/index.js"></script>
</body>
<script>
  //window.onscroll = function() {scrollFunction2()};
  function scrollFunction() {
    if (document.documentElement.scrollTop > 590) {
      $("#myHeader").addClass("header-scroll");
    } else {
      $("#myHeader").removeClass("header-scroll");
    }
    if (document.documentElement.scrollTop > 700) {
      $(".right").removeClass("slide-out");
      $(".right").addClass("slide-in");
    } else {
      $(".right").removeClass("slide-in");
      $(".right").addClass("slide-out");
    }
  }
</script>

</html>