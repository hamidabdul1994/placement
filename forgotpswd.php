<?php
include'config.php';
$error='';
$success='';
if(isset($_POST['login']))
{
	$smartcard_no=$_POST['smartcard_no'];
	$reg_id=$_POST['reg_id'];
	$password=$_POST['password'];
	$sql=mysql_query("select * from user where reg_id='$reg_id' and smartcard_no='$smartcard_no' ");
	$count=mysql_num_rows($sql);
	if($count==1)
	{
		while ($a=mysql_fetch_array($sql)) {
			$smartcard_no=$a['smartcard_no'];
			mysql_query("update user set password='$password' where smartcard_no='$smartcard_no'");
			$success='Password successfully changed';
		}

	}
	else {
		$error='Invalid combination of Registration id and password';
	}
}

?>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MHSSCE Placement</title>
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
<style>
#error{
	display:none
}
#success{
	display: none;
}
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</style>
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
      <a href="index.php"><b>Reset</b> Password</a>
  </div>
<div class="login-box-body">

      <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Registration id" name="reg_id">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
          <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Smartcard number" name="smartcard_no">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="New Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <b><?php echo $error ?></b>
             <b><?php echo $success ?></b>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat"  name="login">Submit</button>
        </div>
    </form>
    </div>
</div>
    <footer class="footer">
<?php
include 'footer.php';
 ?>
    </footer>
</body>
</html>
