<?php
include'config.php';
require_once'session.php';
$reg_id=$_SESSION['login_user'];
$sql=mysql_query("select * from user where reg_id='$reg_id'");
while($x=mysql_fetch_array($sql)){
    $name=$x['uname'];
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MHSSCE Placement| Change Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href=" bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href=" css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href=" plugins/iCheck/square/blue.css">
<link rel="stylesheet" href=" dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href=" dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <?php include('header.php') ?>
<div class="register-box">
  <div class="register-logo">
    <a href="index.php"><b>MHSSCE</b>Placement</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Choose your new password</p>

    <form action="changepassworddb_login.php" method="post">
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="New password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype New password" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>


      <div class="row">

        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Submit</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

         </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.1.4 -->
<script src=" plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src=" bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src=" plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
