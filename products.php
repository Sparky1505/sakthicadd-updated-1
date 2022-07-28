
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <!-- Oswald-font -->
  <link href="http://fonts.cdnfonts.com/css/oswald-6" rel="stylesheet">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  
  <style>
      .body {
        background-color: grey;
        }
        hr.solid {
  border-top: 3px solid #bbb;
}

  </style>
</head>

<body style="background-color:grey;">
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
            <li class="nav-item ">
              <a class="nav-link hover-border" href="#">Shop</a>
            </li>
            
           
            <li class="nav-item dropdown" id="myDropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Solutions</a>
      <ul class="dropdown-menu">
        <li> <a class="dropdown-item" href="electronics.php">Industrial</a></li>
        <li> <a class="dropdown-item" href="mechanical.php">IOT</a>
        <li> <a class="dropdown-item" href="software.php">Environment</a>
        <li> <a class="dropdown-item" href="software.php">Commercial</a>
        </ul>
            </li>
            <li class="nav-item active-page">
              <a class="nav-link hover-border" href="">Customize</a>
            </li>
            
            <li class="nav-item dropdown" id="myDropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Community</a>
      <ul class="dropdown-menu">
        <li> <a class="dropdown-item" href="electronics.php">Forum</a></li>
        <li> <a class="dropdown-item" href="mechanical.php">Projects</a>
        <li> <a class="dropdown-item" href="software.php">Wiki</a>
        </ul>
            </li>
            <li></li>
            <div class="navmenu">
            <form action="#">
                <input type="text"
                    placeholder=" Search for Products..."
                    name="search">
                    

            </form>
            
        </div>
        <button class="btn btn-outline-success" type="submit">🔍</button>
        
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
        <a class="menu-name" href="products.php">Products</a>
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
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="source/Images/ultra1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SAKTHICADD FIRST SLIDE</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="source/Images/ultra3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SAKTHICADD SECOND SLIDE</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="source/Images/ultra3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SAKTHICADD THIRD SLIDE</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.product-f-image {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .3s ease;
  background-color: grey;
}

.container:hover .overlay {
  opacity: 1;
}

.icon {
  color: white;
  font-size: 100px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.fa-user:hover {
  color: #eee;
}
body {
  background-color: coral;
}
.flip-card {
  background-color: transparent;
  width: 220px;
  height: 200px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: grey;
  color: white;
  transform: rotateY(180deg);
}

</style>

  </head>
  <body style="background-color:grey;">

    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">New Arrivals</h2>
                        <hr class="solid">
                        <div class="product-carousel">
                        <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino1.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 1</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino2.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 2</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="singleproduct.php" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino3.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 3</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino4.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 4</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino5.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 5</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                        </div>
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino1.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 1</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino2.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 2</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino3.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 3</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino4.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 4</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino5.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 5</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                        </div>
                        <div class="text-right">

                       
                        <a class="btn btn-primary" href="filter.php">More Products&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ></a>

</div>
<br>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Column 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a>
      </li>
      <li></li>
      <li></li>
      <li class="nav-item">
        <a class="nav-link" href="#">Column 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
      </li>
      <li></li>
      <li></li>
      <li class="nav-item">
        <a class="nav-link" href="#">Column 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
      </li>
      <li></li>
      <li></li>
      <li class="nav-item">
        <a class="nav-link" href="#">Column 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
      </li>
      
    </ul>
   
  </div>
</nav>

<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>---</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='#' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } .carousel-item {
  height: 40vh;
  min-height: 250px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


.display-4{
	font-family: 'Source Serif Pro', serif;
}

.lead{
	font-family: 'Source Serif Pro', serif;
}



.font-weight-light{
	font-family: 'Source Serif Pro', serif;
}

</style>
                                </head>
                                <body className='snippet-body'>
                               
<header>
  <div id="indicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#indicators" data-slide-to="0" class="active"></li>
      <li data-target="#indicators" data-slide-to="1"></li>
      <li data-target="#indicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://wallpapercave.com/wp/wp7440083.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">PCB Designing</h3>
          <p class="lead">Some description about the first slide</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://rumbum.co/wp-content/uploads/2020/10/wallpapertip_hd-wallpaper-software_1570176.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Productoin Engineering</h3>
          <p class="lead">Some description about the second slide</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://www.integrasources.com/media/files/django-ckeditor-5/fb9eea2c-ec9d-4e9b-823b-d37708d59e87.png')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">PCB Fabrication</h3>
          <p class="lead">Some description about the third slide</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<!-- Page Content -->


<script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
    </script>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>#</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                            
                                </body>
                            </html>
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino1.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 1</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino2.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 2</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino3.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 3</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino4.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 4</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="source/Images/Arduino5.jpg" alt="">
                                   
                                </div>
                                
                                <h5><a href="singleproduct.php">Arduino 5</a></h5>
                                
                                <div class="product-carousel-price">
                                    <h6><ins>$700.00</ins> <del>$800.00</del></h6>
                                </div> 
                                <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                            </div>
                            
                        </div>
                        <div class="text-right">

                       
                        <a class="btn btn-primary" href="filter.php">More Products&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ></a>

</div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
 
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>

<!-- Image and text -->

<style>
* {
  box-sizing: border-box;
}

.zoom {
  padding: 10px;
  transition: transform .2s;
  border: 1px solid black;
  width: 250px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
</style>
<div class="container">
  <h1></h1>

  
  <h2>Latest blogs</h2>  
  <hr class="solid">
<div class="card-group">
 
    <div class="zoom">
<!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="source/Images/Arduino1.jpg" alt="Card image cap" width="100">
      <div class="card-body">
        <h4 class="card-title">Arduino 1</h4>
      </div>

    </div>
    <!-- /.card -->
  
      <div class="zoom">
<!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="source/Images/Arduino2.jpg" alt="Card image cap" width="400">
      <div class="card-body">
        <h4 class="card-title">Arduino 2</h4>
      </div>
     
    </div>
    <!-- /.card -->
  
      <div class="zoom">
<!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="source/Images/Arduino3.jpg" alt="Card image cap" width="400">
      <div class="card-body">
        <h4 class="card-title">Arduino 3</h4>
      </div>
     
    </div>
    <!-- /.card -->
    
        <div class="zoom">
<!-- set a width on the image otherwise it will expand to full width       -->
      <img class="card-img-top img-fluid" src="source/Images/Arduino4.jpg" alt="Card image cap" width="400">
      <div class="card-body">
        <h4 class="card-title">Arduino 4</h4>
      </div>
      
    </div>
    <!-- /.card -->
    

</div>
<!-- /.card-group -->
  
  
    <!-- /.card -->
    
    </div>
    <!-- /.col-sm-2 -->
    
    
    
    
    
  </div>
  <!-- /.row -->
  
  
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- /.container -->
<div class="text-center">
<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
  More
</button>
</div>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body {
  background-color: #343434;
}

#cover {
  width: 450px;
  height: 300px;
  margin: 0 auto;
}

#cover > img {
  float: left;
  border: 2px solid black;
  width: 45%;
  margin: 1.66%;
}
  </style>
</head>
<body>

<div class="container">
  <h3>Manufacturing Services<h3>
  <hr class="solid">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="source/Images/Arduino3.jpg5" target="_blank">
          <img src="source/Images/Arduino5.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Text to be added</p>
          </div>
        </a>
      </div>
    </div>
    <div id="cover">
  <img src="source/Images/Arduino1.jpg">
  <img src="source/Images/Arduino2.jpg">
  <img src="source/Images/Arduino3.jpg">
  <img src="source/Images/Arduino1.jpg">
</div>
   
  </div>
</div>

</body>
</html>


   

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