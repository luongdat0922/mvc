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
                        <p class="bread"><span><a href="index.html">Home</a></span> / <span>Checkout</span></p>
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
                            <div class="process text-center">
                                <p><span>03</span></p>
                                <h3>Order Complete</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <form method="post" class="colorlib-form" action="index.php?controller=order&action=checkout">
                            <h2>Checkout</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" name="first" id="fname" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" name="last" id="lname" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fname">Address</label>
                                        <input type="text" name="address" id="address" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="companyname">City</label>
                                        <input type="text" name="city" id="towncity" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Phone">Phone</label>
                                        <input type="text" name="phone" id="zippostalcode" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p><button class="btn btn-primary">Order Complete</button></p>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cart-detail">
                                    <h2>Cart</h2>
                                    <ul>
                                        <li>
                                            <span>Subtotal</span> <span>$100.00</span>
                                            <ul>
                                                <li><span>1 x Product Name</span> <span>$99.00</span></li>
                                                <li><span>1 x Product Name</span> <span>$78.00</span></li>
                                            </ul>
                                        </li>
                                        <li><span>Shipping</span> <span>$0.00</span></li>
                                        <li><span>Order Total</span> <span>$180.00</span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-12">
                                <div class="cart-detail">
                                    <h2>Payment</h2>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="radio">
                                                <label><input type="radio" name="optradio"> Offline</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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