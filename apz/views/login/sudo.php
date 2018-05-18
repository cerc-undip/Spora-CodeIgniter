<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url() ?>assets/component/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/component/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/component/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
      Welcome to 
      </br><b>SPORA</b>
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">Masuk sebagai admin</p>

    <form action="<? site_url('login') ?>" method="post">
      <div class="form-group has-feedback">
        <input name="etEmail" type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="etPassword" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">       
        <div class="col-xs-4">
          <button name="btnLogin" type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>  
      </div>
    </form>
      </br>
    <a href="<?= site_url('login/user') ?>" class="text-center">Login user</a>

  </div>
    
</div>
    
<script src="<?= base_url() ?>assets/component/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/component/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
