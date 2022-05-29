<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="./public/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./public/vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="./public/css/main.css">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                            <h4>Myntra! </h4>
                            <h6 class="font-weight-light">Create</h6>
                            <form class="pt-3" method="POST" name="register" action="http://localhost/mvc/index.php?controller=register&action=check">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="admin">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="dat.luongthanh@phuxuan.edu.vn">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="********">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="cpassword" class="form-control form-control-lg" id="password" placeholder="********">
                                </div>
                                <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" name="agree" value="1" class="form-check-input">
                                            I read and agree to Terms & Conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <input type="submit" name="register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="CREATE ACCOUNT" />

                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="index.php?controller=login&action=index" class="text-primary">Sign in</a>
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