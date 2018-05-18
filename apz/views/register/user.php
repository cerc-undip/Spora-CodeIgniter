<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registrasi User</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url() ?>assets/component/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/component/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/component/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page " style="background:url(<?php echo base_url();?>assets/img/login-01.jpg); background-size:cover; background-repeat : no-repeat; overflow: hidden">
  <div class="register-box">
    <center>
      <img src="<?php echo base_url();?>assets/img/logo.png" style="">
    </center>
    <br>
    <br>
    <div class="register-box-body">
    <p class="login-box-msg">Daftar menjadi anggota baru</p>

    <form action="<?= site_url('register') ?>" method="post">
      <div id="error-message" class="form-group">
        <?= $message; ?>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="password" id="password2" class="form-control" name="password2" placeholder="Ulangi Password" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" name="register" id="btn" class="btn gradient-45deg-indigo-light-blue shadow white-font rounded btn-block btn-flat" value="Kirim">
        </div>
        <!-- /.col -->
      </div>
    </form>

      </br>
    <a href="<?= site_url('login') ?>" class="text-center">Sudah menjadi pengguna</a>
  </div>

</div>

<script src="<?= base_url() ?>assets/component/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/component/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
$(function () {
  $("#btn").click(function(e) {
    var password  = $("#password").val();
    var password2 = $("#password2").val();

    if(password.length < 6){
      $("#error-message").empty();
      $("#error-message").append("<div class=\"alert alert-danger\">Password minimal 6 karakter alfanumerik.</div>")
      return false;
    }

    if (password != password2) {
      $("#error-message").empty();
      $("#error-message").append("<div class=\"alert alert-danger\">Password tidak cocok.</div>")
      return false;
    }

    return true;
  });
});
</script>
</body>
</html>
