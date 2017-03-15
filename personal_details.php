<?php
include'config.php';
require_once'session.php';
$u_id=$_SESSION['login_user'];
$sql=mysql_query("select * from user where u_id='$u_id'");
while($x=mysql_fetch_array($sql)){
    $name=$x['uname'];
    $smartcard_no=$x['smartcard_no'];
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sakec Placement| Personal details</title>
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
    <script language="javascript" type="text/javascript">
function checkform(form)
{

    if(form.st_mobile.value.length!=10)
	{
	alert("Enter 10 digit number!")
	form.st_mobile.focus();
	return false;
	}
    if(isNaN(form.st_mobile.value))
    {
    alert("Enter numbers only!")
	form.st_mobile.focus();
	return false;
    }

    if(form.division.value.length!=1)
	{
	alert("Enter only a digit!")
	form.st_mobile.focus();
	return false;
	}

     if(isNaN(form.reg_id.value))
    {
    alert("Enter numbers only!")
	form.reg_id.focus();
	return false;
    }
    if(form.r_number.value.length!=2)
	{
	alert("2 digits allowed!")
	form.r_number.focus();
	return false;
	}
}
</script>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index.php"><b>SAKEC</b>Placement</a>
  </div>

  <div class="register-box-body">
      <h3><p class="login-box-msg">Fill in your Personal details</p></h3>

    <form action="personaldb.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Student's name(firstname lastname)" name="stname" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

        <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Father's name(firstname lastname)" name="faname" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Mother's name(firstname lastname)" name="moname" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
        <input type="number" disabled value="<?php echo $u_id; ?>" class="form-control" placeholder="Registration number" name="u_id" required>
        <span class="glyphicon glyphicon-book form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
        <input type="number" disabled value="<?php echo $smartcard_no; ?>" class="form-control" placeholder="Smartcard Number" name="smart_card" required>
        <span class="glyphicon glyphicon-book form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
        <input type="date" class="form-control" placeholder="Dateofbirth(dd/mm/yyyy)" name="dob" required>
        <span class="glyphicon glyphicon-book form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Address" name="Add" required>
        <span class="glyphicon glyphicon-bookmark form-control-feedback"></span>
      </div>

        <div class="form-group has-feedback">
        <input type="number" class="form-control" placeholder="Mobile number" name="st_mobile" required>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>

        <div class="form-group has-feedback">
        <input type="number" class="form-control" placeholder="Parent's Mobile number" name="pa_mobile" required>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Roll number" name="r_number" required>
        <span class="glyphicon glyphicon-book form-control-feedback"></span>
      </div>

        <div class="form-group has-feedback">
            <select class="form-control" name="branch" id="branch" required>
            <option value="">----Branch----</option>
            <option value="comp">Computer Engineering</option>
            <option value="it">Information Technology</option>
            <option value="elec">Electronics</option>
            <option value="extc">Electronics and Telecommunication</option>
            </select>
            </div>

         <div class="form-group has-feedback">
            <select class="form-control" id="div" name="division">
              <option value="">----Select Division----</option>
              <option value="1">1</option>
					    <option value="2">2</option>
            </select>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="emailid" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>


         <div class="form-group has-feedback" style="font-size: 20px;">
        Male <Input type = "Radio" name ="gender" value="male"> &nbsp; &nbsp;
        Female<Input type = "Radio" name ="gender" value="female">

        </div>
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-12">
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
  $(document).ready(function () {
   $('#branch').change(function(){
		var val=$(this).val();
		if(val=="elec")
		{
			$('#div').empty();
			$('#div').append("<option value='1'>1</option><option value='2'>2</option>>");
		}
		if(val=="comp")
		{
			$('#div').empty();
			$('#div').append("<option value='3'>3</option><option value='4'>4</option><option value='D'>D</option>");
		}
		if(val=="it")
		{
			$('#div').empty();
			$('#div').append("<option value='5'>5</option><option value='6'>6</option>");
		}
		if(val=="extc")
		{
			$('#div').empty();
			$('#div').append("<option value='7'>7</option>");
		}
	});
  });
</script>
</body>
</html>
