<?php
include 'assets/PHP/connection.php';
?>
<!DOCTYPE html>
<html lang="en" id="html">

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
<body id="bodyc">
  <!-- View & Apply -->
  <section class="view-apply">
    <div class="view-apply-con">
      <div class="view-apply-tittle">
        <div class="tittle-left">
          <h4> Embedded Engineer</h4>
        </div>
        <div class="tittle-right">
          <p>Close</p>
        </div>
      </div>
      <div class="view-apply-content">
        <div class="content-box">
          <h4>THE COMPANY</h4>
          <p>SAKTHICADD is a product development company focused on product strategy, hardware, software, and mechanical designs, and the development of custom mobile and web applications. From exciting new tech startups to large-scale applications, the products we produce for our clients support their strategic initiatives first and foremost through open collaboration, forward-thinking user experience, engaging design, and high-quality engineering.</p>
        </div>
        <div class="content-box">
          <h4>Job Purpose:</h4>
          <p>We have an exciting opportunity for entry-level and recent graduates to join our team and be part of the best and brightest in digital product talent. This role is open for folks who have 0-2+ years working in Embedded Hardware/Software (from strategy to tactical), preferably on consumer and industrial applications.</p>
        </div>
        <div class="content-box">
          <h4>Job Responsibility </h4>
          <ul>
            <li>Learn, develop and test project specific/generic embedded hardware and software and testing tools.</li>
            <li>Learn and adhere to the best practices and coding standards of the project.</li>
            <li>Understand and Comply with all applicable development processes.</li>
            <li> Contribute to all aspects of software development, including development environment, architecture, design, programming, testing, and deployment.</li>
            <li>Design custom products and ease the adoption of custom changes.</li>
          </ul>
        </div>
        <div class="content-box">
          <h4>Knowledge/Skills: </h4>
          <ul>
            <li>Ability to read and understand data sheets and specifications of electronic components.</li>
            <li>Knowledge of embedded systems design, and low-level hardware interactions.</li>
            <li>Experience with microcontrollers/microprocessor applications. knowledge of STM8, STM32, ESP01, ESP8266, and ESP32 is an added advantage.</li>
            <li>Knowledge of C language and Embedded C.</li>
            <li>Should have completed hands-on practical writing programs in embedded C to demonstrate the use of ports and peripherals viz. I2C, SPI, UART, ADC, PWM, Timer, RTC, etc.</li>
            <li>Knowledge of interfaces TTL, CMOS, RS232, RS485</li>
            <li>Knowledge of Python coding.</li>
            <li>Good knowledge & Hands-on experience with Arduino, and Raspberry Pi.</li>
            <li>Knowledge of instruments like DSO, DMM, and Frequency generator.</li>
            <li>Good knowledge of Electronics, Circuit Theory, and Electronic Devices.</li>
            <li>Good knowledge of Electronic Circuits and Digital Electronics, with Basic C programming.</li>
            <li>Certified in Embedded system course preferred.</li>
            <li>Knowledge of Microcontroller Architecture.</li>
            <li>Communication protocols: UART, SPI, I2C, Modbus, and CAN.</li>
            <li>Knowledge of ADC, PWM, and timer.</li>
            <li>Basic understanding of the Internet of Things (IoT) and internet-based technologies.</li>
            <li>Ability to read a schematic.</li>
            <li>PCB CAD Design: Good knowledge and hands-on experience in Allegro, OrCAD, Proteus, and Ki-Cad Software is an added advantage.</li>
          </ul>
        </div>
        <form method="POST" id="form" class="careers-form formonpopup" enctype="multipart/form-data">
      <div class="form-con">
        <div class="form-con-child">
          <label>First name <samp>*</samp></label>
          <input type="text" name="firstname" class="careers-field" placeholder="First name" aria-label="Username" aria-describedby="basic-addon1">
          <label>Last name <samp>*</samp></label>
          <input type="text" name="lastname" class="careers-field" placeholder="Last name" aria-label="Username" aria-describedby="basic-addon1">
          <label>Email-Id <samp>*</samp></label>
          <input type="email" name="email" class="careers-field" id="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
          <label>Phone <samp>*</samp></label>
          <input type="number" name="phone" class="careers-field" id="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone">
          <label>Domain <samp>*</samp></label>
          <div class="input-group">
            <select class="form-select careers-field" name="domain" id="inputGroupSelect04" aria-label="Example select with button addon">
            <?php
          $sql = "select * from domain";
                 $result =$con->query($sql);
                 if($result !== false && $result->num_rows > 0){
                     while($row = $result->fetch_assoc()){
                       echo '<option value='.$row["domain name"].'>'.$row["domain name"].'</option>';
                        }
                 }
      ?>
            </select>
          </div>
        </div>
        <div class="form-con-child">
          <label>Highest Qualification<samp>*</samp></label>
          <div class="input-group">
            <select class="form-select careers-field" name="qualification" id="inputGroupSelect04" aria-label="Example select with button addon">
            <?php
          $sql = "SELECT * FROM highestqualification";
                 $result =$con->query($sql);
                 if($result !== false && $result->num_rows > 0){
                     while($row = $result->fetch_assoc()){
                       echo '<option value='.$row["qualifications"].'>'.$row["qualifications"].'</option>';
                        }
                 }
      ?>
            </select>
          </div>
          <label>Year of Graduation<samp>*</samp></label>
          <div class="input-group">
            <select class="form-select careers-field" name="year" id="inputGroupSelect04" aria-label="Example select with button addon">
              <option selected>2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
              <option value="2027">2027</option>
              <option value="2028">2028</option>
              <option value="2029">2029</option>
              <option value="2030">2030</option>
            </select>
          </div>
          <label>Upload resume Here (Upload only docx file)<samp>*</samp></label>
          <div class="input-group mb-3">
            <input type="file" name="resume" class="careers-field space upload" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
          </div>
          <label>Upload CV Here (Upload only docx file)</label>
          <div class="input-group mb-3">
            <input type="file" name="cv" class="careers-field space" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
          </div>
          <div class="input-group mb-3 check">
            <input type="checkbox" name="newsletter" class="careers-field space checkbox" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
            <p>I want to receive newsletter from SAKTHI CADD</p>
          </div>
        </div>
      </div>
      <!-- <button>sjsn</button><a>network</a> -->
      <input type="submit" id="submit" class="explore" name="submit" value="submit">
    </form>
    <div class="col sucess-msg2 msg2-dis"></div>
      </div>
    </div>
  </section>
  <!-- popup -->
  <section class="error">
    <div class="popup">
      <div class="quit">
        <img src="source/Images/close.png" id="quit" alt="close">
      </div>
      <div class="quit-con">
        <img src="source/Images/error.png" alt="error">
        <p>oops!.. error submiting form</p>
      </div>
    </div>
  </section>
  <!-- Header -->
  <section class="header header-fixed" id="myHeader">
    <nav class=" header-box navbar navbar-expand-lg navbar-light">
      <div class="container header-con-fixed">
        <a class="navbar-brand header-logo-parent" href="">
          <img class="img-fluid header-logo" src="source/Images/Logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler navbar-toggler-forfixed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon navbar-toggler-icon-forfixed"></span>
        </button>
        <div class="collapse navbar-collapse header-topics" id="navbarNav">
          <ul class="navbar-nav header-topics-content">
            <li class="nav-item">
              <a class="nav-link hover-border" href="about_us.php">About&nbsp;us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-border" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-border" href="products.php">Products</a>
            </li>
            <li class="nav-item active-page">
              <a class="nav-link active-hover" href="careers.php">Careers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><button class="chat"><img class="chat-logo" src="source/Images/chat.svg">CONTACT&nbspUS</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-border" href="login.php">Login</a>
            </li>
          </ul>
        </div>
    </nav>
  </section>
  <!-- Hero -->
  <section class="careers-hero">
    <div class="container careers-hero-container">
      <div>
        <h1>WORK WITH US</h1>
        <p>At SAKTHICADD, we're always looking for talented and creative individuals to join our diverse team. Check out our job openings below and apply today!</p>
        <a class="btn btn-primary explore" href="#opennings" role="button">View Openings</a>
      </div>
      <img class="img-fluid" src="source/Images/careers-hero.png" alt="hero-image" />
    </div>
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
  <!-- Offers -->
  <section class="offers">
    <div class="Turnkey">
      <h2>SAKTHICADD offers opportunities for growth, fun, and a healthy work-life balance</h2>
      <div class="Turnkey-iteams">
        <div class="item offer-item">
          <div class="card offer-card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img class="img-fluid" src="source/Images/Opportunities_images/flexible.png" alt="Footer-image" />
            <p>Flexible work from home policy</p>
          </div>
        </div>
        <div class="item offer-item">
          <div class="card offer-card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img class="img-fluid" src="source/Images/Opportunities_images/growth.png" alt="Footer-image" />
            <p>Professional Growth Opportunities</p>
          </div>
        </div>
        <div class="item offer-item">
          <div class="card offer-card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img class="img-fluid" src="source/Images/Opportunities_images/company.png" alt="Footer-image" />
            <p>Company hosted events</p>
          </div>
        </div>
        <div class="item offer-item">
          <div class="card offer-card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img class="img-fluid" src="source/Images/Opportunities_images/trainning.png" alt="Footer-image" />
            <p>Technical Traning for employees</p>
          </div>
        </div>
        <div class="item offer-item">
          <div class="card offer-card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img class="img-fluid" src="source/Images/Opportunities_images/try.png" alt="Footer-image" />
            <p>Freedom to try & fail</p>
          </div>
        </div>
        <div class="item offer-item">
          <div class="card offer-card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img class="img-fluid" src="source/Images/Opportunities_images/domain.png" alt="Footer-image" />
            <p>Insight into multiple domains</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Opennings -->
  <section id="opennings" class="opennings">
    <h1>Similar Openings</h1>
    <div class="opennings-filter">
      <p>Job Categories</p>
      <div class="input-group filter-mobile">
        <select class="form-select careers-field" name="year" id="inputGroupSelect04" aria-label="Example select with button addon">
          <option selected>All</option>
          <option value="1">Manager</option>
          <option value="2">Developer</option>
          <option value="3">Intern</option>
          <option value="3">Technician</option>
        </select>
      </div>
      <div class="filter-options">
        <ul class="navbar-nav">
          <li class="nav-item openning-options select-focus">
            <p>All</p>
          </li>
          <li class="nav-item openning-options">
            <p>Manager</p>
          </li>
          <li class="nav-item openning-options">
            <p>Developer</p>
          </li>
          <li class="nav-item openning-options">
            <p>Intern</p>
          </li>
          <li class="nav-item openning-options">
            <p>Technician</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="opennings-content">
      <div class="content">
        <div class="content-head">
          <h2>Operation Head<br>
            <spam>
              <p>Pune,Maharashtra</p>
            </spam>
          </h2>
          <a class="btn btn-primary explore" href="http://www.sakthicadd.com/coming_soon.htm" role="button">Remote</a>
        </div>
        <a class="careers-view-apply" href="#form">View & Apply</a>
      </div>
      <div class="content">
        <div class="content-head">
          <h2>Operation Head<br>
            <spam>
              <p>Pune,Maharashtra</p>
            </spam>
          </h2>
          <a class="btn btn-primary explore" href="http://www.sakthicadd.com/coming_soon.htm" role="button">Remote</a>
        </div>
        <a class="careers-view-apply" href="#form">View & Apply</a>
      </div>
      <div class="content">
        <div class="content-head">
          <h2>Operation Head<br>
            <spam>
              <p>Pune,Maharashtra</p>
            </spam>
          </h2>
          <a class="btn btn-primary explore" href="http://www.sakthicadd.com/coming_soon.htm" role="button">Remote</a>
        </div>
        <a class="careers-view-apply" href="#form">View & Apply</a>
      </div>
      <div class="content">
        <div class="content-head">
          <h2>Operation Head<br>
            <spam>
              <p>Pune,Maharashtra</p>
            </spam>
          </h2>
          <a class="btn btn-primary explore" href="http://www.sakthicadd.com/coming_soon.htm" role="button">Remote</a>
        </div>
        <a class="careers-view-apply" href="#form">View & Apply</a>
      </div>
      <div class="content">
        <div class="content-head">
          <h2>Operation Head<br>
            <spam>
              <p>Pune,Maharashtra</p>
            </spam>
          </h2>
          <a class="btn btn-primary explore" href="http://www.sakthicadd.com/coming_soon.htm" role="button">Remote</a>
        </div>
        <a class="careers-view-apply" href="#form">View & Apply</a>
      </div>
      <div class="content">
        <div class="content-head">
          <h2>Operation Head<br>
            <spam>
              <p>Pune,Maharashtra</p>
            </spam>
          </h2>
          <a class="btn btn-primary explore" href="http://www.sakthicadd.com/coming_soon.htm" role="button">Remote</a>
        </div>
        <a class="careers-view-apply" href="#form">View & Apply</a>
      </div>
    </div>
  </section>
  <!-- Form -->
  <section class="careers-booking">
    <h4>Join our waitlist so that you won’t miss an opportunity of working with a great team.</h4>
    <form method="POST" id="form" class="careers-form" enctype="multipart/form-data">
      <div class="form-con">
        <div class="form-con-child">
          <label>First name <samp>*</samp></label>
          <input type="text" name="firstname2" class="careers-field" placeholder="First name" aria-label="Username" aria-describedby="basic-addon1">
          <label>Last name <samp>*</samp></label>
          <input type="text" name="lastname2" class="careers-field" placeholder="Last name" aria-label="Username" aria-describedby="basic-addon1">
          <label>Email-Id <samp>*</samp></label>
          <input type="email" name="email2" class="careers-field" id="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
          <label>Phone <samp>*</samp></label>
          <input type="number" name="phone2" class="careers-field" id="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone">
          <label>Domain <samp>*</samp></label>
          <div class="input-group">
            <select class="form-select careers-field" name="domain2" id="inputGroupSelect04" aria-label="Example select with button addon">
            <?php
          $sql = "select * from domain";
                 $result =$con->query($sql);
                 if($result !== false && $result->num_rows > 0){
                     while($row = $result->fetch_assoc()){
                       echo '<option value='.$row["domain name"].'>'.$row["domain name"].'</option>';
                        }
                 }
      ?>
            </select>
          </div>
        </div>
        <div class="form-con-child">
          <label>Highest Qualification<samp>*</samp></label>
          <div class="input-group">
            <select class="form-select careers-field" name="qualification2" id="inputGroupSelect04" aria-label="Example select with button addon">
            <?php
          $sql = "SELECT * FROM highestqualification";
                 $result =$con->query($sql);
                 if($result !== false && $result->num_rows > 0){
                     while($row = $result->fetch_assoc()){
                       echo '<option value='.$row["qualifications"].'>'.$row["qualifications"].'</option>';
                        }
                 }
      ?>
            </select>
          </div>
          <label>Year of Graduation<samp>*</samp></label>
          <div class="input-group">
            <select class="form-select careers-field" name="year2" id="inputGroupSelect04" aria-label="Example select with button addon">
              <option selected>2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
              <option value="2027">2027</option>
              <option value="2028">2028</option>
              <option value="2029">2029</option>
              <option value="2030">2030</option>
            </select>
          </div>
          <label>Upload resume Here (Upload only docx file)<samp>*</samp></label>
          <div class="input-group mb-3">
            <input type="file" name="resume2" class="careers-field space upload" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
          </div>
          <label>Upload CV Here (Upload only docx file)</label>
          <div class="input-group mb-3">
            <input type="file" name="cv2" class="careers-field space" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
          </div>
          <div class="input-group mb-3 check">
            <input type="checkbox" name="newsletter2" class="careers-field space checkbox" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
            <p>I want to receive newsletter from SAKTHI CADD</p>
          </div>
        </div>
      </div>
      <input type="submit" id="submit" class="explore" name="submit2" value="submit">
    </form>
    <div class="col sucess-msg2 msg1-dis"></div>
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
  <script>
    //window.onscroll = function() {scrollFunction2()};
    function scrollFunction() {
      if (document.documentElement.scrollTop > 590) {
        $("#myHeader").addClass("header-scroll");
      } else {
        $("#myHeader").removeClass("header-scroll");
      }
      if (document.documentElement.scrollTop > 2500) {
        $(".right").removeClass("slide-out");
        $(".right").addClass("slide-in");
      } else {
        $(".right").removeClass("slide-in");
        $(".right").addClass("slide-out");
      }
    }
  </script>
</body>
<?php
// Pop Form
if (isset($_POST['submit'])) {
  echo "<script>$('.sucess-msg').html(' ');</script>";
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $domain = $_POST['domain'];
  $qualification = $_POST['qualification'];
  $year = $_POST['year'];
  $resumename = $_FILES['resume']['name'];
  $resumesize = $_FILES['resume']['size'];
  $cvname = $_FILES['cv']['name'];
  $cvsize = $_FILES['cv']['size'];
  if ($firstname == "" || $lastname == "" || $email == "" || $phone == "" || $domain == "" || $qualification == "" || $year == "" || $resumename == "") {
    echo "<script>$('.sucess-msg2').html('Please filll all the fields');</script>";
    echo "<script>$('.error').css('display','flex');</script>";
    echo "empty";
    return false;
  } else {
    $resume = addslashes(file_get_contents($_FILES['resume']['tmp_name']));
    //$cv = addslashes(file_get_contents($_FILES['cv']['tmp_name']));
    if ($cvname != "") {
      $cv = addslashes(file_get_contents($_FILES['cv']['tmp_name']));
    } else {
      $cv = "notuploaded";
    }
    $extension1 = pathinfo($resumename, PATHINFO_EXTENSION);
    $extension2 = pathinfo($cvname, PATHINFO_EXTENSION);
    if (!in_array($extension1, ['pdf', 'docx', 'doc'])) {
      echo "<script>$('.msg2-dis').html('file must be pdf or doc');</script>";
      echo "<script>$('.error').css('display','flex');</script>";
      echo "file";
      return false;
      if (!in_array($extension2, ['pdf', 'docx', 'doc'])) {
        echo "<script>$('.msg2-dis').html('file must be pdf or doc');</script>";
        echo "<script>$('.error').css('display','flex');</script>";
        echo "file";
        return false;
      }
    } else {
      $query = "insert into careersform values(null,'$firstname','$lastname','$email','$phone','$domain','$qualification','$year','$resume','$cv')";
      if ($con->query($query) === TRUE) {
        //echo "Thank you for subscription";
        echo "<script>$('.msg2-dis').html('Form submitted successfully');</script>";
        echo "<script>$('.error').css('display','none');</script>";
        echo "suc";
        return false;
      } else {
        echo "<script>$('.msg2-dis').html('Something went wrong please try again later');</script>";
        echo "<script>$('.error').css('display','flex');</script>";
        return false;
      }
    }
  }
}
// On-page Form
if (isset($_POST['submit2'])) {
  echo "<script>$('.sucess-msg').html(' ');</script>";
  $firstname = $_POST['firstname2'];
  $lastname = $_POST['lastname2'];
  $email = $_POST['email2'];
  $phone = $_POST['phone2'];
  $domain = $_POST['domain2'];
  $qualification = $_POST['qualification2'];
  $year = $_POST['year2'];
  $resumename = $_FILES['resume2']['name'];
  $resumesize = $_FILES['resume2']['size'];
  $cvname = $_FILES['cv2']['name'];
  $cvsize = $_FILES['cv2']['size'];
  if ($firstname == "" || $lastname == "" || $email == "" || $phone == "" || $domain == "" || $qualification == "" || $year == "" || $resumename == "") {
    echo "<script>$('.msg1-dis').html('Please filll all the fields');</script>";
    echo "<script>$('.error').css('display','flex');</script>";
    return false;
  } else {
    $resume = addslashes(file_get_contents($_FILES['resume2']['tmp_name']));
    //$cv = addslashes(file_get_contents($_FILES['cv']['tmp_name']));
    if ($cvname != "") {
      $cv = addslashes(file_get_contents($_FILES['cv2']['tmp_name']));
    } else {
      $cv = "notuploaded";
    }
    $extension1 = pathinfo($resumename, PATHINFO_EXTENSION);
    $extension2 = pathinfo($cvname, PATHINFO_EXTENSION);
    if (!in_array($extension1, ['pdf', 'docx', 'doc'])) {
      echo "<script>$('.msg1-dis').html('file must be pdf or doc');</script>";
      echo "<script>$('.error').css('display','flex');</script>";
      return false;
      if (!in_array($extension2, ['pdf', 'docx', 'doc'])) {
        echo "<script>$('.msg1-dis').html('file must be pdf or doc');</script>";
        echo "<script>$('.error').css('display','flex');</script>";
        return false;
      }
    } else {
      $query = "insert into careersform values(null,'$firstname','$lastname','$email','$phone','$domain','$qualification','$year','$resume','$cv')";
      if ($con->query($query) === TRUE) {
        //echo "Thank you for subscription";
        echo "<script>$('.msg1-dis').html('Form submitted successfully');</script>";
        echo "<script>$('.error').css('display','none');</script>";
        return false;
      } else {
        echo "<script>$('.msg1-dis').html('Something went wrong please try again later');</script>";
        echo "<script>$('.error').css('display','flex');</script>";
        echo '$con';
        return false;
      }
    }
  }
}
?>

</html>