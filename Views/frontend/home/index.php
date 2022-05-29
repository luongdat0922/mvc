<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/animate.css">
    <link rel="stylesheet" href="./public/css/icomoon.css">
    <link rel="stylesheet" href="./public/css/ionicons.min.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/magnific-popup.css">
    <link rel="stylesheet" href="./public/css/flexslider.css">
    <link rel="stylesheet" href="./public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./public/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./public/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <title></title>
</head>

<body>
    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <?php include './inc/header.php' ?>
            <div class="sale">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 text-center">
                            <div class="row">
                                <div class="owl-carousel2">
                                    <div class="item">
                                        <div class="col">
                                            <h3><a href="#">25% Use Code: PHP SUMMER</a></h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col">
                                            <h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(./public/images/slideshow-1.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <h1 class="head-1">Men's</h1>
                                            <h2 class="head-2">Shoes</h2>
                                            <h2 class="head-3">Collection</h2>
                                            <p class="category"><span>New trending shoes</span></p>
                                            <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(./public/images/slideshow-2.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <h1 class="head-1">Huge</h1>
                                            <h2 class="head-2">Sale</h2>
                                            <h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
                                            <p class="category"><span>Big sale sandals</span></p>
                                            <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(./public/images/slideshow-3.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <h1 class="head-1">New</h1>
                                            <h2 class="head-2">Arrival</h2>
                                            <h2 class="head-3">up to <strong class="font-weight-bold">30%</strong> off</h2>
                                            <p class="category"><span>New stylish shoes for men</span></p>
                                            <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="colorlib-intro">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="intro">It started with a simple idea: Create quality, well-designed products that I wanted myself.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="colorlib-product">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <div class="featured">
                            <a href="#" class="featured-img" style="background-image: url(./public/images/men.jpg);"></a>
                            <div class="desc">
                                <h2><a href="#">Men's Collection</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="featured">
                            <a href="#" class="featured-img" style="background-image: url(./public/images/women.jpg);"></a>
                            <div class="desc">
                                <h2><a href="#">Women's Collection</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-product">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                        <h2>Best Sellers</h2>
                    </div>
                </div>
                <div class="row row-pb-md">
                    <?php foreach ($products as $product) { ?>
                    <div class="col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="<?= $product['image'] ?>" class="img-fluid" alt="">
                            </a>
                            <div class="desc">
                                <h2><a href="#"><?= $product['name'] ?></a></h2>
                                <span class="price">$<?= $product['price'] ?></span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="w-100"></div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p><a href="#" class="btn btn-primary btn-lg">All Products</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-partner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                        <h2>Brand</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col partner-col text-center">
                        <img src="./public/images/brand-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col partner-col text-center">
                        <img src="./public/images/brand-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col partner-col text-center">
                        <img src="./public/images/brand-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col partner-col text-center">
                        <img src="./public/images/brand-4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col partner-col text-center">
                        <img src="./public/images/brand-5.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>

        <?php include './inc/footer.php' ?>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
    </div>

    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.easing.1.3.js"></script>
    <script src="./public/js/jquery.waypoints.min.js"></script>
    <script src="./public/js/jquery.flexslider-min.js"></script>
    <script src="./public/js/owl.carousel.min.js"></script>
    <script src="./public/js/jquery.magnific-popup.min.js"></script>
    <script src="./public/js/magnific-popup-options.js"></script>
    <script src="./public/js/bootstrap-datepicker.js"></script>
    <script src="./public/js/jquery.stellar.min.js"></script>
    <script src="./public/js/main.js"></script>
</body>

</html>