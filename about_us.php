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
            <li class="nav-item active-page">
              <a class="nav-link hover-border" href="about_us.php">About&nbsp;Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-border" href="services.php">Services</a>       
    </li>
            <li class="nav-item">
              <a class="nav-link hover-border" href="services.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-border" href="careers.php">Careers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><button class="chat"><img class="chat-logo" src="source/Images/chat.svg">CONTACT&nbsp;US</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-border" href="login.php">Login</a>
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
        <a class="menu-name" href="products.php">Products</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="careers.php">Careers</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="login.php">Login</a>
      </li>
    </ul>
  </section>
  <!-- about-us-content -->
  <section class="about-us-hero">
    <h4>WHO WE ARE</h4>
    <div class="about-us-container1">
      <div>
        <h1>ABOUT US</h1>
        <p>Sakthicadd, is an industry leader in high quality PCB Design and Fabrication offering the very best service
          at competitive prices. With our resources and experience, we will be your complete Engineering partner no matter how large or small your project is. We can design package design for components, high-speed digital, analog and mixed-signal, and ultra-high-density boards in no time. With our experienced team, we can assure you to provide the astonishing designs that make your product stand out in the market..</p>
      </div>
      <img class="img-fluid" src="source/Images/about-us-logo.png" alt="Logo">
    </div>
    <p>With more than 20+ years of experience as a leading product development company in the scope of PCB Designing & Fabrication, Electronics and Embedded System development, AI, Data Science & Computer vision, we understand the ecosystem more than anyone else. We are helping small and mid-sized companies worldwide design their product ensuring the quality,experience and timelines as expected. We’ve a network of over 100+ engineering manufacturers to deliver world class electronics in the domains of Embedded electronics, Consumer, Robotics, Wearables,
      Wireless, Industrial, IoT and AI.
  </section>
  <!-- OurTeam -->
  <section class="our_team">
    <div class="our_team-con">
      <h1>Meet Out Team</h1>
      <div id="carouselExampleIndicators" class="carousel slide sliders" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
          <?php
          $sql = "select * from ourteam where displayorder = 1";
                 $result =$con->query($sql);
                 if($result !== false && $result->num_rows > 0){
                     while($row = $result->fetch_assoc()){
                       echo '<div class="team-in"><div class="team-left"><img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" class="d-block w-100" alt="logo"></div><div class="team-right"><p>'.$row["description"].'</p><p>'.$row["name"].'</p></div></div>';
                        }
                 }
      ?>
          </div>
          <?php
          $sql = "select * from ourteam where displayorder <> 1";
                 $result =$con->query($sql);
                 if($result !== false && $result->num_rows > 0){
                     while($row = $result->fetch_assoc()){
                       echo '<div class="carousel-item"><div class="team-in"><div class="team-left"><img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" class="d-block w-100" alt="logo"></div><div class="team-right"><p>'.$row["description"].'</p><p>'.$row["name"].'</p></div></div></div>';
                        }
                 }
      ?>
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

  <!-- about-us_strip -->
  <section class="strip">
    <div class="strip-container">
      <p><span class="counting" data-count="25">25 +</span> years of Experience</p>
      <p><span class="counting" data-count="1000">1000 +</span> Projects</p>
      <p><span class="counting" data-count="100">100 +</span> Happy Clientss</p>
    </div>
  </section>

  <!-- clients -->
  <section class="clients">
    <h1 class="clients-heading">Our Clients</h1>
    <div class="sliders">
      <div id="carouselExampleIndicators2" class="carousel slide sliders" data-bs-ride="carousel">
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
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