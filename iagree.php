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
  <title>MHSSCE Placement| Personal details</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href=" bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href=" plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box" style="width:600px">
  <div class="register-logo">
    <a href="index.php"><b>MHSSCE</b>Placement</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Read the Terms carefully</p>

    <p>Undertaking for Placement
I, student with registration number <?php echo $reg_id ?> will surely follow all the rules & regulation of the placement policy listed below:<br><br>
1. I know the Participation in CRP (Campus Recruitment Program) is compulsory for eligible students, I will follow the same.<br>
2. I will follow the formal dressing during CRP.<br>
3. Once I get placed in one company, I won’t attend any further CRP except the dream job company.<br>
4. I will inform the placement coordinator in advance, if I want to go for higher studies and accordingly will keep the placement department updated regularly the status of my admission from time to time.<br>
5. While applying for any off-campus recruitment, I will inform to the placement department in advance.<br>
6. I won’t post any comments or any related information regarding the placement program on the social networking website like facebook, twitter etc,.<br>
7. I ensure that for any reason I will not contact the company representative directly and whenever needed will do so through the placement department.<br>
8. Whenever the company will send any communication to me, I will forward the same to the placement department.<br>
9. During CRP if the timing goes beyond the college working hours, I will arrange for my safety, till I reach my residence. The college trust, faculty or placement cell will not be responsible for any untoward incident happening to me due to the same.</p>
    <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" required> I agree to the terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <a href="personal_details.php"><button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Submit</button></a>
        </div>
        <!-- /.col -->
      </div>

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
