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
                        <p class="bread"><span><a href="index.html">Home</a></span> / <span>Shopping Cart</span></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="colorlib-product">
            <div class="container">
                <div class="row row-pb-lg">
                    <div class="col-md-10 offset-md-1">
                        <div class="process-wrap">
                            <div class="process text-center active">
                                <p><span>01</span></p>
                                <h3>Shopping Cart</h3>
                            </div>
                            <div class="process text-center">
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

                <div class="row row-pb-lg">
                    <form action="index.php?controller=cart&action=update" method="POST">
                        <div class="col-md-12">
                            <div class="product-name d-flex">
                                <div class="one-forth text-left px-4">
                                    <span>Product Details</span>
                                </div>
                                <div class="one-eight text-center">
                                    <span>Price</span>
                                </div>
                                <div class="one-eight text-center">
                                    <span>Quantity</span>
                                </div>
                                <div class="one-eight text-center">
                                    <span>Total</span>
                                </div>
                                <div class="one-eight text-center px-4">
                                    <span>Remove</span>
                                </div>
                            </div>
                            <?php $total = 0; if(!empty($products)) { foreach ($products as $product) { ?>
                                <div class="product-cart d-flex">
                                    <div class="one-forth">
                                        <div class="product-img" style="background-image: url(<?= $product['image'] ?>);">
                                        </div>
                                        <div class="display-tc">
                                            <h3><?= $product['name'] ?></h3>
                                        </div>
                                    </div>
                                    <div class="one-eight text-center">
                                        <div class="display-tc">
                                            <span class="price">$<?= number_format($product['price'], 0)?></span>
                                        </div>
                                    </div>
                                    <div class="one-eight text-center">
                                        <div class="display-tc">
                                            <input type="text" id="quantity" name="quantity[<?= $product['id'] ?>]" class="form-control input-number text-center" value="<?= $product['quantity'] ?>" min="1" max="100">
                                        </div>
                                    </div>
                                    <div class="one-eight text-center">
                                        <div class="display-tc">
                                            <span class="price">$<?= number_format(($product['quantity'] * $product['price']), 0) ?></span>
                                        </div>
                                    </div>
                                    <div class="one-eight text-center">
                                        <div class="display-tc">
                                            <a href="index.php?controller=cart&action=delete&id=<?= $product['id'] ?>" class="closed"></a>
                                        </div>
                                    </div>
                                </div>
                            <?php  $total += $product['quantity'] * $product['price']; } }  ?>
                            <div class="row">
                                <div class="col-sm-10"></div>
                                <div class="col-sm-2">
                                    <form action="#">
                                        <div class="row form-group">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <input type="submit" value="Update" class="btn btn-primary" style="margin-left: 66.5px;">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="row row-pb-lg">
                    <div class="col-md-12">
                        <div class="total-wrap">
                            <div class="row">
                                <div class="col-sm-8">
                                    <form action="#">
                                        <div class="row form-group">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="total">
                                        <div class="sub">
                                            <p><span>Subtotal:</span> <span>$<?= number_format($total, 0) ?></span></p>
                                            <p><span>Delivery:</span> <span>$<?= number_format(35, 0) ?></span></p>
                                        </div>
                                        <div class="grand-total">
                                            <?php
                                                $_SESSION['total'] = $total - 35;
                                            ?>
                                            <p><span><strong>Total:</strong></span> <span>$<?= number_format($total - 35, 0) ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10"></div>
                                <div class="col-sm-2">
                                    <form action="index.php?controller=order" method="post">
                                        <div class="row form-group">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <button class="btn btn-primary" style="margin-left: 52px; margin-top: 14px;">Checkout</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                        <h2>Related Products</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-1.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-2.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Minam Meaghan</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-3.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Men's Taja Commissioner</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-4.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Russ Men's Sneakers</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include './inc/footer.php'; ?>>
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