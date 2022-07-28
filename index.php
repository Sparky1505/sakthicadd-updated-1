<?php
include 'assets/PHP/connection.php';
?>
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
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Oswald-font -->
  <link href="http://fonts.cdnfonts.com/css/oswald-6" rel="stylesheet">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Background video -->
  <video autoplay muted loop id="myVideo">
    <source src="source/Video/background.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <!-- Hero -->
  <div class="hero">
    <!-- Header -->
    <section class="header" id="myHeader">
      <nav class=" header-box navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand header-logo-parent" href="index.php">
            <img class="img-fluid header-logo" src="source/Images/Logo.png" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse header-topics" id="navbarNav">
            <ul class="navbar-nav header-topics-content">
              <li class="nav-item">
                <a class="nav-link hover-border" href="about_us.php">About&nbsp;Us</a>
              </li>
              <li class="nav-item dropdown" id="myDropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
      <ul class="dropdown-menu">
        <li> <a class="dropdown-item" href="electronics.php">Electronics</a></li>
        <li> <a class="dropdown-item" href="mechanical.php">Mechanical</a>
        <li> <a class="dropdown-item" href="software.php">Software</a>
        </ul>
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
    <p class="hero-txt">We design and build <b id="changable"></b> solutions for futuristic tech companies that accelerate growth and transform your business</p>
    <a href="#carouselExampleSlidesOnly" class="arrow"><img class="down-arrow" src="source/Images/arrow.gif" alt="logo"></a>
  </div>

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

  <!-- Slider -->
  <section class="sliders-parent">
    <section class="Dop-sliders">
      <div class="slide-left intro-left">
        <h1>Struggling to make an idea into a product?</h1>
        
        <p>With more than 20+ years of experience as a leading product development company in the scope of PCB Designing & Fabrication, Electronics and Embedded System development, AI, Data Science
          & Computer vision, we understand the ecosystem more than anyone else </p>
        <a class="btn btn-primary explore" href="http://www.sakthicadd.com/coming_soon.htm" role="button">Explore Our Products</a>
      </div>
      <div class="slide-right">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="intro-right">
                <h1>Get your PCB prototype in just 4 working days</h1>
                <img src="source/Images/introSlider2_img.png" alt="logo">
              </div>
            </div>
            <div class="carousel-item">
              <div class="intro-right">
                <img src="source/Images/mobile.png" alt="logo">
              </div>
            </div>
            <div class="carousel-item">
              <div class="intro-right">
                <img src="source/Images/intoSlider3_img.png" alt="logo">
                <p>We've a network of over 100+ engineering manufacturers to deliver world class electronics in the domains of Embedded electronics, Consumer, Robotics, Wearables, Wireless, Industrial, IoT and AI</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
              <path d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z" />
            </svg>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
              <path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" />
            </svg>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
  </section>

  <!-- Turnkey Section -->
  <section class="Turnkey">
    <h1>Turnkey Solutions</h1>
    <p class="Turnkey-p">Outsourcing design and development can be difficult and involved, so choosing the right partner is key. Get the creative design services team of product development, engineering, and regulatory experts working for you.</p>
    <div class="Turnkey-iteams">
      <div class="item">
        <div class="card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="img-fluid" src="source/Images/Turnkey_image1.png" alt="Footer-image" />
          <p>Minimum Viable Products</p>
        </div>
        <div class="Turnkey-hover">
          <p>Quickly test and iterate parts of your product idea on potential customers.</p>
        </div>
      </div>
      <div class="item">
        <div class="card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="img-fluid" src="source/Images/Turnkey_image2.png" alt="Footer-image" />
          <p>Reverse Engineering</p>
        </div>
        <div class="Turnkey-hover">
          <p>No design, no code, obsolete, old tech, through-hole to SMD, or any other reason, we are able to make it for you. Just bring the sample to us as long as you’re not violating any law. We can build it for you.</p>
        </div>
      </div>
      <div class="item">
        <div class="card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="img-fluid" src="source/Images/Turnkey_image3.png" alt="Footer-image" />
          <p>Mass Production Manufacturing</p>
        </div>
        <div class="Turnkey-hover">
          <p>Planning to scale up the product worldwide? Our mass manufacturing offers shorter lead times, and is a great option for customers who need something quickly.</p>
        </div>
      </div>
      <div class="item">
        <div class="card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="img-fluid" src="source/Images/Turnkey_image4.png" alt="Footer-image" />
          <p>Life cycle management</p>
        </div>
        <div class="Turnkey-hover">
          <p>We can forecast the obsolescence, help you plan refreshes, alternatives to parts and redesigning.</p>
        </div>
      </div>
      <div class="item">
        <div class="card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="img-fluid" src="source/Images/Turnkey_image5.png" alt="Footer-image" />
          <p>Quality Control</p>
        </div>
        <div class="Turnkey-hover">
          <p>Quality assurance is built into every product we make. You can be confident that our quality management system provides strict control and verification of our internal manufacturing processes and external supply chain procedures.</p>
        </div>
      </div>
      <div class="item">
        <div class="card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="img-fluid" src="source/Images/Turnkey_image6.png" alt="Footer-image" />
          <p>Marketing</p>
        </div>
        <div class="Turnkey-hover">
          <p>Have an innovative/commercial product ready? We have got all you want to take the product to your customer.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Service -->
  <section class="services">
    <h1>Our Service</h1>
    <p>Our full-service capabilities help you launch innovate products or successfully grow your product line.</p>
    <img class="img-fluid" src="source/Images/service.png" alt="Footer-image" />
  </section>

  <!-- development -->
  <section class="development">
    <div class="development-con">
      <h1 class="dev-head">Brilliant overall product design is an essential part of your product development journey</h1>
      <p>We support you in your product development journey through quality electronic product design and
        manufacture, offering a wide range of services from initial product feasibility and detailed engineering
        design through to prototyping and volume production.</p>
    </div>
    <div class="development-images">
      <div class="development-images-group">
        <img class="img-fluid" src="source/Images/development.jpg" alt="Footer-image" />
        <div class="development-hover">
          <p>ELECTRONICS & EMBEDDED SYSTEMS</p>
          <a class="btn btn-primary view-more" href="services.php" role="button">View More</a>
        </div>
      </div>
      <div class="development-images-group">
        <img class="img-fluid" src="source/Images/development1.jpg" alt="Footer-image" />
        <div class="development-hover">
          <p>MECHANICAL</p>
          <a class="btn btn-primary view-more" href="services.php" role="button">View More</a>
        </div>
      </div>
      <div class="development-images-group">
        <img class="img-fluid" src="source/Images/development2.png" alt="Footer-image" />
        <div class="development-hover">
          <p>SOFTWARE</p>
          <a class="btn btn-primary view-more" href="services.php" role="button">View More</a>
        </div>
      </div>
    </div>
    </div>
    <div class="global">
      <div class="global-con">
        <h1>GLOBAL MANUFACTURING</h1>
        <p>SAKTHICADD has invested in electronics manufacturing partners around the world, including
          electronics design and production, to deliver the most efficient solutions possible for bringing customer products to market.</p>
        <p>Our global footprint allows us to deliver optimal solutions for customers around the world.</p>
      </div>
    </div>
  </section>

  <!-- clients -->
  <section class="clients">
    <h1 class="clients-heading">Our Clients</h1>
    <div class="sliders">
      <div id="carouselExampleIndicators" class="carousel slide sliders" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img-fluid" src="source/Images/client1.png" alt="Footer-image" />
            <img class="img-fluid" src="source/Images/client2.png" alt="Footer-image" />
            <img class="img-fluid" src="source/Images/client3.png" alt="Footer-image" />
            <img class="img-fluid" src="source/Images/client4.png" alt="Footer-image" />
          </div>
          <div class="carousel-item">
            <img class="img-fluid" src="source/Images/client5.png" alt="Footer-image" />
            <img class="img-fluid" src="source/Images/client6.png" alt="Footer-image" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
            <path d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z" />
          </svg>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
            <path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" />
          </svg>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
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
          <form method="POST" action="assets/PHP/subscribe.php" id="form">
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
            <a class="navbar-brand nav-link" href="about_us.php">
              <p class="foot-ash">ABOUT US</p>
            </a>
            <a class="navbar-brand nav-link" href="services.php">
              <p class="foot-ash">SERVICES</p>
            </a>
            <a class="navbar-brand nav-link" href="products.php">
              <p class="foot-ash">PRODUCTS</p>
            </a>
            <a class="navbar-brand nav-link" href="careers.php">
              <p class="foot-ash">CAREERS</p>
            </a>
          </div>
          <div class="col footer-col col3">
            <a class="navbar-brand nav-link" href="#">
              <h2 class="footer-2-col3-heading">Services</h2>
            </a>
            <a class="navbar-brand nav-link" href="services.php">
              <p class="foot-ash">MECHANICAL</p>
            </a>
            <a class="navbar-brand nav-link" href="services.php">
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

  <!-- Not to referesh -->
  <script>
    $("#send").click(function() {
      var email = $('#email').val();
      if (email.includes('@') && email.includes('.')) {
        $.post($("#form").attr("action"),
          $("#form :input").serializeArray(),
          function(info) {
            $(".sucess-msg").empty();
            $(".sucess-msg").html(info);
            $("#email").val("");
          })
      } else {
        $(".sucess-msg").html("Enter valid email");
      }
    });
    $("#form").submit(function() {
      return false;
    });
  </script>
</body>

</html>