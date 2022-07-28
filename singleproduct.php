
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
            <li class="nav-item">
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
            <div class="search">
            <form action="#">
                <input type="text"
                    placeholder=" Search for Products..&nbsp;&nbsp;🔍"name="search">
                    
               
            </form>
        </div>
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
  <!-- Product-content -->
  <!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
                                <style>.breadcrumb-item+.breadcrumb-item::before {
    content: ">"
}

.breadcrumb {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: .1rem 0rem !important;
    margin-bottom: 0rem;
    list-style: none;
    background-color: #ffffff;
    border-radius: .25rem
}

.single_product {
    padding-top: 66px;
    padding-bottom: 140px;
    background-color: #e5e5e5;
    margin-top: 0px;
    padding: 17px
}

.product_name {
    font-size: 20px;
    font-weight: 400;
    margin-top: 0px
}

.badge {
    display: inline-block;
    padding: 0.50em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem
}

.product-rating {
    margin-top: 10px
}

.rating-review {
    color: #5b5b5b
}

.product_price {
    display: inline-block;
    font-size: 30px;
    font-weight: 500;
    margin-top: 9px;
    clear: left
}

.product_discount {
    display: inline-block;
    font-size: 17px;
    font-weight: 300;
    margin-top: 9px;
    clear: left;
    margin-left: 10px;
    color: red
}

.product_saved {
    display: inline-block;
    font-size: 15px;
    font-weight: 200;
    color: #999999;
    clear: left
}

.singleline {
    margin-top: 1rem;
    margin-bottom: .40rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, .1)
}

.product_info {
    color: #4d4d4d;
    display: inline-block
}

.product_options {
    margin-bottom: 10px
}

.product_description {
    padding-left: 0px
}

.product_quantity {
    width: 104px;
    height: 47px;
    border: solid 1px #e5e5e5;
    border-radius: 3px;
    overflow: hidden;
    padding-left: 8px;
    padding-top: -4px;
    padding-bottom: 44px;
    float: left;
    margin-right: 22px;
    margin-bottom: 11px
}

.order_info {
    margin-top: 18px
}

.shop-button {
    height: 47px
}

.product_fav i {
    line-height: 44px;
    color: #cccccc
}

.product_fav {
    display: inline-block;
    width: 52px;
    height: 46px;
    background: #FFFFFF;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    border-radius: 11%;
    text-align: center;
    cursor: pointer;
    margin-left: 3px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.br-dashed {
    border-radius: 5px;
    border: 1px dashed #dddddd;
    margin-top: 6px
}

.pr-info {
    margin-top: 2px;
    padding-left: 2px;
    margin-left: -14px;
    padding-left: 0px
}

.break-all {
    color: #5e5e5e
}

.image_selected {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: calc(100% + 15px);
    height: 525px;
    -webkit-transform: translateX(-15px);
    -moz-transform: translateX(-15px);
    -ms-transform: translateX(-15px);
    -o-transform: translateX(-15px);
    transform: translateX(-15px);
    border: solid 1px #e8e8e8;
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 15px
}

.image_list li {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 165px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1) !important;
    margin-bottom: 15px;
    cursor: pointer;
    padding: 15px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    overflow: hidden
}

@media (max-width: 390px) {
    .product_fav {
        display: none
    }
}

.bbb_combo {
    width: 100%;
    margin-right: 7%;
    padding-top: 21px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 24px;
    border-radius: 5px;
    margin-top: 0px;
    text-align: -webkit-center
}

.bbb_combo_image {
    width: 170px;
    height: 170px;
    margin-bottom: 15px
}

.fs-10 {
    font-size: 10px
}

.step {
    background: #167af6;
    border-radius: 0.8em;
    -moz-border-radius: 0.8em;
    -webkit-border-radius: 6.8em;
    color: #ffffff;
    display: inline-block;
    font-weight: bold;
    line-height: 3.6em;
    margin-right: 5px;
    text-align: center;
    width: 3.6em;
    margin-top: 116px
}

.row-underline {
    content: "";
    display: block;
    border-bottom: 2px solid #3798db;
    margin: 0px 0px;
    margin-bottom: 20px;
    margin-top: 15px
}

.deal-text {
    margin-left: -10px;
    font-size: 25px;
    margin-bottom: 10px;
    color: #000;
    font-weight: 700
}

.padding-0 {
    padding-left: 0;
    padding-right: 0
}

.padding-2 {
    margin-right: 2px;
    margin-left: 2px
}

.vertical-line {
    display: inline-block;
    border-left: 3px solid #167af6;
    margin: 0 10px;
    height: 364px;
    margin-top: 4px
}

.p-rating {
    color: green
}

.combo-pricing-item {
    display: flex;
    flex-direction: column
}

.boxo-pricing-items {
    display: inline-flex
}

.combo-plus {
    margin-left: 10px;
    margin-right: 18px;
    margin-top: 10px
}

.add-both-cart-button {
    margin-left: 36px
}

.items_text {
    color: #b0b0b0
}

.combo_item_price {
    font-size: 18px
}

.p_specification {
    font-weight: 500;
    margin-left: 22px
}

.mt-10 {
    margin-top: 10px
}

@charset "utf-8";
@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');

* {
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    text-shadow: rgba(0, 0, 0, .01) 0 0 1px
}

body {
    font-family: 'Rubik', sans-serif;
    font-size: 14px;
    font-weight: 400;
    background: #FFFFFF;
    color: #000000
}

div {
    display: block;
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

ul {
    list-style: none;
    margin-bottom: 0px
}

.single_product {
    padding-top: 16px;
    padding-bottom: 140px
}

.image_list li {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 120px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
    cursor: pointer;
    padding: 15px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    overflow: hidden
}

.image_list li:last-child {
    margin-bottom: 0
}

.image_list li:hover {
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3)
}

.image_list li img {
    max-width: 100%
}

.image_selected {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: calc(100% + 15px);
    height: 525px;
    -webkit-transform: translateX(-15px);
    -moz-transform: translateX(-15px);
    -ms-transform: translateX(-15px);
    -o-transform: translateX(-15px);
    transform: translateX(-15px);
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 15px
}

.image_selected img {
    max-width: 100%
}

.product_category {
    font-size: 12px;
    color: rgba(0, 0, 0, 0.5)
}

.product_rating {
    margin-top: 7px
}

.product_rating i {
    margin-right: 4px
}

.product_rating i::before {
    font-size: 13px
}

.product_text {
    margin-top: 27px
}

.product_text p:last-child {
    margin-bottom: 0px
}

.order_info {
    margin-top: 16px
}

.product_quantity {
    width: 182px;
    height: 50px;
    border: solid 1px #e5e5e5;
    border-radius: 5px;
    overflow: hidden;
    padding-left: 25px;
    float: left;
    margin-right: 30px
}

.product_quantity span {
    display: block;
    height: 50px;
    font-size: 16px;
    font-weight: 300;
    color: rgba(0, 0, 0, 0.5);
    line-height: 50px;
    float: left
}

.product_quantity input {
    display: block;
    width: 30px;
    height: 50px;
    border: none;
    outline: none;
    font-size: 16px;
    font-weight: 300;
    color: rgba(0, 0, 0, 0.5);
    text-align: left;
    padding-left: 9px;
    line-height: 50px;
    float: left
}

.quantity_buttons {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 29px;
    border-left: solid 1px #e5e5e5
}

.quantity_inc,
.quantity_dec {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: 50%;
    cursor: pointer
}

.quantity_control i {
    font-size: 11px;
    color: rgba(0, 0, 0, 0.3);
    pointer-events: none
}

.quantity_control:active {
    border: solid 1px rgba(14, 140, 228, 0.2)
}

.quantity_inc {
    padding-bottom: 2px;
    justify-content: flex-end;
    border-top-right-radius: 5px
}

.quantity_dec {
    padding-top: 2px;
    justify-content: flex-start;
    border-bottom-right-radius: 5px
}
hr.solid {
  border-top: 3px solid #bbb;
}
</style>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>
                            <div class="super_container">
    <header class="header" style="display: none;">
        <div class="header_main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix">
                                        <div class="custom_dropdown">
                                            <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">All Categories</span> <i class="fas fa-chevron-down"></i>
                                                <ul class="custom_list clc">
                                                    <li><a class="clc" href="#">All Categories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="single_product">
        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
            <div class="row">
                <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        <li data-image="source/Images/Arduino1.jpg"><img src="source/Images/Arduino1.jpg" alt=""></li>
                        <li data-image="source/Images/Arduino1.jpg"><img src="source/Images/Arduino2.jpg" alt=""></li>
                        <li data-image="source/Images/Arduino1.jpg"><img src="source/Images/Arduino3.jpg" alt=""></li>
                        <li data-image="source/Images/Arduino1.jpg"><img src="source/Images/Arduino4.jpg" alt=""></li>

                    </ul>
                </div>
                <div class="col-lg-4 order-lg-2 order-1">
                    <div class="image_selected"><img src="source/Images/Arduino1.jpg" alt=""></div>
                    <hr class="singleline">
                    
                    <div class="row" style="margin-top: 15px;">
                                <div class="col-xs-6" style="margin-left: -150px;"> <span class="product_options"><h4>Product details</h4></span></div>
                                <div class="col-xs-6" style="margin-left: -130px;"> <span class="product_options"></span><br> <button class="btn btn-primary btn-sm">Product details</button> </div>
                                <div class="col-xs-6" style="margin-left: -130px;"> <span class="product_options"></span><br> <button class="btn btn-primary btn-sm">Documents</button></div>
                                <div class="col-xs-6" style="margin-left: -130px;"> <span class="product_options"></span><br> <button class="btn btn-primary btn-sm">Learn</button></div>
                                <div class="col-xs-6" style="margin-left: -130px;"> <span class="product_options"></span><br> <button class="btn btn-primary btn-sm">Reviews</button></div>
                                <div class="col-xs-6" style="margin-left: -130px;"> <span class="product_options"></span><br> <button class="btn btn-primary btn-sm">FAQ</button></div>

                              </div>
                              <hr class="solid">
                              <div class="row" style="margin-top: 15px;">
                                <div class="col-xs-6" style="margin-left: -150px;"> <span class="product_options"><h4>Documentation</h4></span></div>
                                <div class="col-xs-6" style="margin-left: -130px;"> <span class="product_options"></span><br> <button class="btn btn-primary btn-sm">Attachment</button> </div>
                               
                              </div>
                </div>
                <div class="col-lg-6 order-3">
                    <div class="product_description">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Products</li>
                            </ol>
                        </nav>
                        <div class="product_name">Arduino 1</div>
                        <div class="product-rating"><span class="badge badge-success"></span> <span class="rating-review"><h5>SKU data to be added here</h5></span></div><br>
                        <div> <span class="product_info">Description to be added here<span><br> <span class="product_info">Warranty: 6 months warranty<span><br> <span class="product_info">7 Days easy return policy<span><br> <span class="product_info">7 Days easy return policy<span><br></div>

                        <div> <span class="product_price">₹ 1,350</span> <strike class="product_discount"> <span style='color:black'>₹ 2,000<span> </strike> </div>
                        <div> <span class="product_saved">You Saved:</span> <span style='color:black'>₹650<span> <br> <span class="product_info">In Stock: 25 units sold this week<span> </div>
                        <hr class="singleline">
                        <div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="br-dashed">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-3"> <img src="https://img.icons8.com/color/48/000000/price-tag.png"> </div>
                                            <div class="col-md-9 col-xs-9">
                                                <div class="pr-info"> <span class="break-all">Get 5% instant discount using code SAKTHICADD</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7"> </div>
                            </div>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options">Variants</span><br> <button class="btn btn-primary btn-sm">Variant 1</button> <button class="btn btn-primary btn-sm">Variant 2</button></div>
                                <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options"></span><br> <button class="btn btn-primary btn-sm">Variant 3</button> <button class="btn btn-primary btn-sm">Variant 4</button></div>
                                <hr class="singleline">
                                <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options"></span><br> <button class="btn btn-primary btn-sm">Product details</button> </div>
                                <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options"></span><br> <button class="btn btn-primary btn-sm">Documents</button></div>
                                <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options"></span><br> <button class="btn btn-primary btn-sm">Learn</button></div>
                                <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options"></span><br> <button class="btn btn-primary btn-sm">Reviews</button></div>
                                <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options"></span><br> <button class="btn btn-primary btn-sm">FAQ</button></div>

                              </div>

                        </div>
                        <hr class="singleline">
                        <div class="order_info d-flex flex-row">
                            <form action="#">
                        </div>
                        <div class="row">
                            
                            <div class="col-xs-6"> <button type="button" class="btn btn-primary shop-button">Add to Cart</button> <button type="button" class="btn btn-success shop-button">Buy Now</button>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                        <br>
                        <div class="text-right">
                        <button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top&nbsp;&nbsp;&nbsp; ^</button>
      
</div>
                    </div>
                </div>
            </div>
            <div class="row row-underline">
                <div class="col-md-6"> <span class=" deal-text">Learn</span> </div>
                <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
            </div>

            <p>Blog posts to be added here</p>
            <div class="row row-underline">
                <div class="col-md-6"> <span class=" deal-text">Reviews</span> </div>
                <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
                
            </div>
            <p> Review to be added here</p>
            <div class="row row-underline">
                <div class="col-md-6"> <span class=" deal-text">FAQ</span> </div>
                <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
                
            </div>
            
<div class="container ">
    <div class="panel-group" id="faqAccordion">
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: What is an Arduino?</a>
              </h4>

            </div>
            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Arduino generally refers to the open-source platform or company by the same name. The Arduino platform is comprised of circuit boards, software, and an IDE for writing code. The boards are inexpensive and can perform a variety of basic functions from controlling an LED to manipulating servo motors.
                        </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: What is Arduino UNO?</a>
              </h4>

            </div>
            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>The Arduino Uno is a microcontroller board. It features 14 input/output pins, 6 analog pins, and a 16 MHz quartz crystal. There are a few ports as well including a USB connection and power jack.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: How do you use an Arduino?</a>
              </h4>

            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Arduinos can be programmed to receive input, signal output, and trigger custom scripts under certain conditions.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: Where can u do?</a>
              </h4>

            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Arduino microcontroller boards can send and interpret signals for a variety of hardware. You can use an Arduino to control servo motors, relays, buttons, LEDs, and more.</p>
                </div>
            </div>
        </div>
        
    </div>
    <!--/panel-group-->
</div>

        </div>
    </div>
</div>
                            <script type='text/javascript'></script>
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