<?php
include'config.php';
require_once'session.php';
$out='';
$reg_id=$_SESSION['login_user'];
$id=$_GET['id'];
$current_date=date("Y-m-d");
$s=mysql_fetch_array(mysql_query("select * from message where mail_id=$id"));
$c_id=$s['c_id'];
$f=mysql_fetch_array(mysql_query("select * from company where c_id=$c_id"));
$company=$f['cname'];
$deadline=$f['deadline'];

$sql=mysql_query("select * from message_list where mail_id=$id and u_id=$reg_id");
$count=mysql_num_rows($sql);
if($count==1){
	$x=mysql_fetch_array($sql);
	$register=$x['register'];

	if($register=="n"){
		if($current_date<=$deadline){
		$status='y';
		$round='1';
		mysql_query("update message_list set register='$status',round='$round' where  mail_id=$id and u_id=$reg_id");
		$out='
			<h2 class="headline text-red"><i class="ion-android-done-all text-green"></i></h2>
			<div class="error-content">
			<h3> Registered Successfull.</h3>
			<p>
			   You have registered for <b>'.$company.'</b> .
			</p>
			 </div>
			';
	}
	else{
	$deadline=date("d M, Y",strtotime($deadline));
	$out='
			<h2 class="headline text-red"><i class="ion-calendar text-yellow"></i></h2>
			<div class="error-content">
			<h3> Registrations closed</h3>
			<p>
			   Registrations closed for <b>'.$company.'</b> on <b>'.$deadline.'</b> .
			</p>
			 </div>
			';
}

	}
	else{
		$out='
			<h2 class="headline text-red"><i class="ion-android-done text-yellow"></i></h2>
			<div class="error-content">
			<h3> Already Registered</h3>
			<p>
			   You have already registered for <b>'.$company.'</b> .
			</p>
			 </div>
			';
	}



}
else{
$out='
<h2 class="headline text-red"><i class="fa fa-warning text-red"></i></h2>
<div class="error-content">
<h3> Oops! Invalid company.</h3>
<p>
    You are not eligible to register for <b>'.$company.'</b> .
</p>
 </div>
';
}
$out.='<a href="placeCompany.php">GO back</a>'
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sakec Placement | Mailbox</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href=" bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href=" plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href=" plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href=" dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href=" dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href=" plugins/iCheck/flat/blue.css">
<style>
b{font-size:18px}
h2{margin-top:0px}
</style>
</head>
<body class="skin-blue sidebar-mini sidebar-collapse" style="background:#ecf0f5">
    <!-- Main content -->
    <section class="content">
      <div class="error-page" style="margin-top:20%">
   		<?php echo $out ?>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->

<script src=" plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src=" bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src=" plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src=" plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src=" dist/js/app.min.js"></script>
<!-- iCheck -->
<script src=" plugins/iCheck/icheck.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src=" dist/js/demo.js"></script>
<script>

</script>
</body>
</html>
