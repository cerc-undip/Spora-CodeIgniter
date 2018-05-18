<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login User</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/component/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/component/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/component/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page " style="background:url(<?php echo base_url();?>assets/img/login-01.jpg); background-size:cover; background-repeat : no-repeat; overflow: hidden">

<div class="login-box">
  <center>
    <img src="<?php echo base_url();?>assets/img/logo.png" style="">
  </center>

<br>
<br>
<br>

  <div class="login-box-body">
    <p class="login-box-msg">Masuk sebagai user</p>

    <form action="<? site_url('login') ?>" method="post">
      <div class="form-group">
        <?= $message; ?>
      </div>

      <div class="form-group has-feedback">
        <input name="email" type="email" class="form-control" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="row">
        <div class="col-xs-4 ">
          <input type="submit" name="login" class="btn gradient-45deg-indigo-light-blue shadow white-font rounded btn-block btn-flat" value="Masuk">
        </div>
      </div>
    </form>

    </br>
    <a href="<?php echo base_url('register'); ?>" class="text-center">Register a new membership</a>

  </div>

</div>

<script src="<?php echo base_url() ?>assets/component/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/component/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>

</body>
</html>
