<html>
    <head>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
body {
  background-color: whitesmoke;
}
.icon-control {
    margin-top: 5px;
    float: right;
    font-size: 80%;
}



.btn-light {
    background-color: #fff;
    border-color: #e4e4e4;
}

.list-menu {
    list-style: none;
    margin: 0;
    padding-left: 0;
}
.list-menu a {
    color: #343a40;
}

.card-product-grid .info-wrap {
    overflow: hidden;
    padding: 18px 20px;
}

[class*='card-product'] a.title {
    color: black;
    display: block;
}

.card-product-grid:hover .btn-overlay {
    opacity: 1;
}
.card-product-grid .btn-overlay {
    -webkit-transition: .5s;
    transition: .5s;
    opacity: 0;
    left: 0;
    bottom: 0;
    color: #fff;
    width: 100%;
    padding: 5px 0;
    text-align: center;
    position: absolute;
    background: rgba(0, 0, 0, 0.5);
}
.img-wrap {
    overflow: hidden;
    position: relative;
}
.button {
  background-color: #CC5500;
  border: none;
  color: white;
  padding: 7px 55px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
}

.filter123 {
    background: #000;
    float: left;
    height: 24vw;
    margin: 1%;
    width: 23%;
}

    </style>
    </head>
    <body>
    

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


        <div class="container">
            <div class="row">
            <aside class="col-md-3">
                
        <div class="card">
            <article class="filter-group">
                <header class="card-header">
                    <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                        <i class="icon-control fa fa-chevron-down"></i>
                        <h6 class="title">Product type</h6>
                    </a>
                </header>
                <div class="filter-content collapse show" id="collapse_1" style="">
                    <div class="card-body">
                        <form class="pb-3">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-append">
                            <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                        </form>
                        
                        <ul class="list-menu">
                        <li><a href="#">Manufacturer  </a></li>
                        <li><a href="#">Series </a></li>
                        <li><a href="#">Packaging  </a></li>
                        <li><a href="#">Product Status  </a></li>
                        <li><a href="#">board type </a></li>
                        <li><a href="#">Core Processor</a></li>
                        <li><a href="#">Platform </a></li>
                        </ul>
        
                    </div> <!-- card-body.// -->
                </div>
            </article> <!-- filter-group  .// -->
            <article class="filter-group">
                <header class="card-header">
                    <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                        <i class="icon-control fa fa-chevron-down"></i>
                        <h6 class="title">Brands </h6>
                    </a>
                </header>
                <div class="filter-content collapse show" id="collapse_2" style="">
                    <div class="card-body">
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" checked="" class="custom-control-input">
                          <div class="custom-control-label">4D system  
                              <b class="badge badge-pill badge-light float-right">120</b>  </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" checked="" class="custom-control-input">
                          <div class="custom-control-label">Adafruit Industries
                              <b class="badge badge-pill badge-light float-right">15</b>  </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" checked="" class="custom-control-input">
                          <div class="custom-control-label">Analog Devices
                              <b class="badge badge-pill badge-light float-right">35</b> </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" checked="" class="custom-control-input">
                          <div class="custom-control-label">Arduino
                              <b class="badge badge-pill badge-light float-right">89</b> </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input">
                          <div class="custom-control-label">Bridgetech PTE
                              <b class="badge badge-pill badge-light float-right">30</b>  </div>
                        </label>
            </div> <!-- card-body.// -->
                </div>
            </article> <!-- filter-group .// -->
            <article class="filter-group">
                <header class="card-header">
                    <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
                        <i class="icon-control fa fa-chevron-down"></i>
                        <h6 class="title">Price range </h6>
                    </a>
                </header>
                
                <div class="filter-content collapse show" id="collapse_3" style="">
                    <div class="card-body">
                        <input type="range" class="custom-range" min="0" max="100" name="">
                        <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Min</label>
                          <input class="form-control" placeholder="₹0" type="number">
                        </div>
                        <div class="form-group text-right col-md-6">
                          <label>Max</label>
                          <input class="form-control" placeholder="₹10,000" type="number">
                        </div>
                        </div> <!-- form-row.// -->
                        <button class="btn btn-block btn-primary">Apply</button>
                    </div><!-- card-body.// -->
                </div>
            </article> <!-- filter-group .// -->
            <article class="filter-group">
                <header class="card-header">
                    <a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true" class="">
                        <i class="icon-control fa fa-chevron-down"></i>
                        <h6 class="title">Stocking Option </h6>
                    </a>
                </header>
                <div class="filter-content collapse show" id="collapse_4" style="">
                    <div class="card-body">
                      <label class="checkbox-btn">
                        <input type="checkbox">
                        <span class="btn btn-light"> In Stock </span>
                      </label>
        
                      <label class="checkbox-btn">
                        <input type="checkbox">
                        <span class="btn btn-light"> Normally Stocking </span>
                      </label>
        
                      <label class="checkbox-btn">
                        <input type="checkbox">
                        <span class="btn btn-light"> New Product </span>
                      </label>
        
                     
                </div><!-- card-body.// -->
                </div>
            </article> <!-- filter-group .// -->
            <article class="filter-group">
                <header class="card-header">
                    <a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" class="">
                        <i class="icon-control fa fa-chevron-down"></i>
                        <h6 class="title">More filter </h6>
                    </a>
                </header>
                <div class="filter-content collapse in" id="collapse_5" style="">
                    <div class="card-body">
                        <label class="custom-control custom-radio">
                          <input type="radio" name="myfilter_radio" checked="" class="custom-control-input">
                          <div class="custom-control-label">Any condition</div>
                        </label>
        
                        <label class="custom-control custom-radio">
                          <input type="radio" name="myfilter_radio" class="custom-control-input">
                          <div class="custom-control-label">Brand new </div>
                        </label>
        
                        <label class="custom-control custom-radio">
                          <input type="radio" name="myfilter_radio" class="custom-control-input">
                          <div class="custom-control-label">Used items</div>
                        </label>
        
                        <label class="custom-control custom-radio">
                          <input type="radio" name="myfilter_radio" class="custom-control-input">
                          <div class="custom-control-label">Very old</div>
                        </label>
                    </div><!-- card-body.// -->
                </div>
            </article> <!-- filter-group .// -->
        </div> <!-- card.// -->
        
            </aside>
            <main class="col-md-9">
        
        <header class="border-bottom mb-4 pb-3">
                <div class="form-inline">
                    <span class="mr-md-auto">16 Items found </span>
                    <select class="mr-2 form-control">
                        <option>Featured</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest Arrivals</option>
                    </select>
                    <div class="btn-group">
                        <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" title="" data-original-title="List view"> 
                            <i class="fa fa-bars"></i></a>
                        <a href="#" class="btn  btn-outline-secondary active" data-toggle="tooltip" title="" data-original-title="Grid view"> 
                            <i class="fa fa-th"></i></a>
                    </div>
                </div>
        </header><!-- sect-heading -->
        
        <div class="row">
             <!-- col.// -->
        
            
           
    <div class ="filter123">
    <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino1.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                       
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span><br>
                                <span class="price">SKU</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
            <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino2.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                       
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span><br>
                                <span class="price">SKU</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
    <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino3.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                        
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span><br>
                                <span class="price">SKU</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
    <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino4.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                        
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span><br>
                                <span class="price">SKU</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
    <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino5.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                        
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span><br>
                                <span class="price">SKU</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
    <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino6.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                       
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span><br>
                                <span class="price">SKU</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
            <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino7.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                        
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span><br>
                                <span class="price">SKU</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
    <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino8.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                        
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span><br>
                                <span class="price">SKU</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
    <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino9.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                        
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
    <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino1.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                       
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
    <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino2.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                        
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
            <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino3.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                        
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
    <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino4.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                        
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
    <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino5.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                        
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
    <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino6.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                        
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
    <div class ="filter123">
    <figure class="card card-product-grid">
                    <div class="img-wrap"> 
                        <img src="source/Images/Arduino7.jpg" class="img-fluid">
                        <a class="btn-overlay" href="singleproduct.php"><h4>Arduino Sample </h4><br>
                        
                        Description<br>
                        </a>
                    </div> <!-- img-wrap.// -->
                    <figcaption class="info-wrap">
                        <div class="fix-height">
                            <a href="#" class="title">Product name</a>
                            <div class="price-wrap mt-2">
                                <span class="price">₹1280</span>
                            </div> <!-- price-wrap.// -->
                        </div>
                        <a href="#" class="button">Add&nbsp;to&nbsp;cart</a>	
                    </figcaption>
                </figure>
    </div>
            
     <!-- col.// -->
        </div> <!-- row end.// -->
      

        <nav class="mt-4" aria-label="Page navigation sample">
          <ul class="pagination">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
        
            </main>
            </div>
        </div>
        </body>
</html>