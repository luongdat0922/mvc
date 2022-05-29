<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./public/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./public/vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <title>Login</title>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                            <h4>Myntra!</h4>
                            <h6 class="font-weight-light">Sign in</h6>
                            <form class="pt-3" method="post" name="login" action="index.php?controller=login&action=check   ">
                                <div class="form-group">
                                    <input type="text" name="username" value="<?php if (isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" class="form-control form-control-lg" id="username" placeholder="admin">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" class="form-control form-control-lg" id="password" placeholder="********">
                                </div>
                                <div class="mt-3">
                                    <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="login" value="SIGN IN" />
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input" name="remember" value="on">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-block btn-google auth-form-btn">
                                        <h2>GOOGLE</h2>
                                    </button>
                                </div>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                        <h2>FACEBOOK</h2>
                                    </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="index.php?controller=register&action=index" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./public/vendors/base/vendor.bundle.base.js"></script>
    <script src="./public/js/off-canvas.js"></script>
    <script src="./public/js/hoverable-collapse.js"></script>
    <script src="./public/js/template.js"></script>
</body>

</html>