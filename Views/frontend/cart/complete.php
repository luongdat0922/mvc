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
                        <p class="bread"><span><a href="index.html">Home</a></span> / <span>Order Complete</span></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="colorlib-product">
            <div class="container">
                <div class="row row-pb-lg">
                    <div class="col-sm-10 offset-md-1">
                        <div class="process-wrap">
                            <div class="process text-center active">
                                <p><span>01</span></p>
                                <h3>Shopping Cart</h3>
                            </div>
                            <div class="process text-center active">
                                <p><span>02</span></p>
                                <h3>Checkout</h3>
                            </div>
                            <div class="process text-center active">
                                <p><span>03</span></p>
                                <h3>Order Complete</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 offset-sm-1 text-center">
                        <p class="icon-addcart"><span><i class="icon-check"></i></span></p>
                        <h2 class="mb-4">Thank you for purchasing, Your order is complete</h2>
                        <p>
                            <a href="index.html" class="btn btn-primary btn-outline-primary">Home</a>
                            <a href="shop.html" class="btn btn-primary btn-outline-primary"><i class="icon-shopping-cart"></i> Continue Shopping</a>
                        </p>
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