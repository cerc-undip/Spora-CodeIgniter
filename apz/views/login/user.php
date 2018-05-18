<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login User</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/coloshop/bootstrap4/bootstrap.min.css">
        <link href="<?= base_url() ?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/coloshop/main_styles.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/custom.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/coloshop/responsive.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    
    <body class="hold-transition login-page" style="background:url(<?= base_url();?>assets/img/login-01.jpg); background-size:cover; background-repeat : no-repeat; overflow: hidden; size:100%">
        <div class="container" style="padding-top:10%">
            <center>
                <a href="<?= site_url(); ?>">
                    <img src="<?= base_url();?>assets/img/logo.png" style="">
                </a>
            </center>
            <br />
            <center>
            <div class="card card-body" id="login" style="width:40%">
                <h5 class="card-title">Hi, <b>Orang Baik</b> ! :)))</h5>
                <h5 class="card-title">Teruskan kebaikanmu disini!</h5>
                <form class="form-horizontal" action="<?= site_url('login') ?>" method="post">
                    <div class="form-group">
                        <?= $message; ?>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" placeholder="email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" placeholder="password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input name="login" type="submit" class="btn gradient-45deg-indigo-light-blue white-font rounded" value="Masuk">
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <a href="<?= base_url('register'); ?>" >Register a new membership <i class="fa fa-caret-square-o-right"></i></a>
                    </div>

                </form>
            </div>
            </center>
        </div>

        <script src="<?php echo base_url() ?>assets/component/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/component/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
    </body>
</html>
