<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-9">
                    <div id="colorlib-logo"><a href="index.html">Myntra</a></div>
                </div>
                <div class="col-sm-5 col-md-3">
                    <form action="index.php?controller=home&action=search" class="search-wrap" method="post">
                        <div class="form-group">
                            <input type="search" name="key" class="form-control search" placeholder="Search">
                            <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-left menu-1">
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="index.php">Products</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
                        <li class="cart"><a href="index.php?controller=home&action=logOut"><i class="icon-user"></i><?= $_SESSION['username'] ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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