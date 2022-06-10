<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

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
        <?php include './inc/header.php' ?>

        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="bread"><span><a href="index.html">Home</a></span> / <span>Products</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="breadcrumbs-two">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumbs-img" style="background-image: url(images/cover-img-1.jpg);">
                            <h2>Search: <?= $name ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-product">
            <div class="container">
                <div class="row row-pb-md">
                    <?php $count = 0;
                    foreach ($products as $product) { ?>
                        <div class="col-md-3 col-lg-3 mb-4 text-center">
                            <div class="product-entry border">
                                <a href="#" class="prod-img">
                                    <img src="<?= $product['image'] ?>" class="img-fluid" alt="#">
                                </a>
                                <div class="desc">
                                    <h2><a href="#"><?= $product['name'] ?></a></h2>
                                    <span class="price">$<?= $product['price'] ?></span>
                                </div>
                            </div>
                        </div>
                    <?php
                        $count++;
                        if ($count % 4 == 0) {
                            echo '<div class="w-100"></div>';
                        }
                    }
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-partner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                        <h2>Trusted Partners</h2>
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

        <?php include './inc/footer.php'; ?>
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