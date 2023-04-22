<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= BASEURL2; ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= BASEURL2; ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASEURL2; ?>/dist/css/adminlte.min.css">
</head>

<!-- <style>
    body {
        background: url(../dist/img/blueBG.jpg);
    }
</style> -->

<style>
    .background {
        background-image: url("http://localhost/wahyu/dist/img/kantor.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .h-custom {
        height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }
</style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<body class="background">

    <section class="vh-60" style="margin-top: 125px;">

        <div class="container h-custom">
            <div class="card p-3">
                <div class="card-header mb-3">
                    <img src="<?= BASEURL2; ?>/dist/img/OSSNEW.png" style="width: 280px;" class="float-right" alt="">
                    <h2 class="text-center" style="font-family: 'Bebas Neue', cursive;">.:: SELAMAT DATANG DI ::.</h2>
                    <h1 class="text-center" style="font-family: 'Bebas Neue', cursive;">.:: SIVENTARI DPMPTSP KOTA BANJARBARU ::.</h1>
                </div>
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5 p-0">
                        <img src="<?= BASEURL2; ?>/dist/img/dinas.png" class="img-fluid" alt="Sample image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form action="<?= BASEURL; ?>/Login/login" method="post">
                            <div class="card card-outline card-primary">
                                <div class="card-header text-center">
                                    <h5 class="h4">LOGIN SIVENTARI</h5>
                                    <p><em>silahkan mengisi username dan password</em></p>
                                </div>

                                <div class="input-group mt-2 mb-1 p-2">
                                    <input type="" class="form-control" placeholder="Username" name="username" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-1 p-2">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block mb-2">Sign In <span class="fas fa-unlock ml-1"></span></button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= BASEURL2; ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= BASEURL2; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= BASEURL2; ?>/dist/js/adminlte.min.js"></script>
</body>

</html>