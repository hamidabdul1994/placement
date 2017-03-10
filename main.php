<?php
require_once'session.php';
error_reporting(0);
$reg_id=$_SESSION['login_user'];
$sql=mysql_query("select * from user where reg_id='$reg_id'");
while($x=mysql_fetch_array($sql)){
    $name=$x['uname'];
}


$sql=mysql_query("select * from hscmark where reg_id='$reg_id'");
while ($b=mysql_fetch_array($sql)) {
	$sscmarks=$b['sscmarks'];
    $sscoutoff=$b['sscoutoff'];
    $hscmarks=$b['hscmarks'];
    $hscoutoff=$b['hscoutoff'];
}

if(isset($_POST['update']))
{

    $sem8marks=$_POST['sem8marks'];
    $sem8outoff=$_POST['sem8outoff'];
    $totalmarks=(($sem1marks)+($sem2marks)+($sem3marks)+($sem4marks)+($sem5marks)+($sem6marks)+($sem7marks)+($sem8marks));
    $totaloutoff=(($sem1outoff)+($sem2outoff)+($sem3outoff)+($sem4outoff)+($sem5outoff)+($sem6outoff)+($sem7outoff)+($sem8outoff));
    $degreepointer=(($totalmarks)/($totaloutoff));
    $degreepointer=sprintf('%0.2f', $degreepointer);
    $sql=mysql_query("select * from hscmark where reg_id='$reg_id'");
    $count=mysql_num_rows($sql);
     if($count==1)
        {
        mysql_query("update hscmark set sem1marks='$sem1marks',sem1outoff='$sem1outoff',sem2marks='$sem2marks',sem2outoff='$sem2outoff',sem3marks='$sem3marks',sem3outoff='$sem3outoff',sem4marks='$sem4marks',sem4outoff='$sem4outoff',sem5marks='$sem5marks',sem5outoff='$sem5outoff',sem6marks='$sem6marks',sem6outoff='$sem6outoff',sem7marks='$sem7marks',sem7outoff='$sem7outoff',sem8marks='$sem8marks',sem8outoff='$sem8outoff',totalmarks='$totalmarks',totaloutoff='$totaloutoff',degreepointer='$degreepointer',livekt='$livekt',deadkt='$deadkt',py1='$py1',py2='$py2',py3='$py3',sy='$sy',attempts='$attempts' where reg_id='$reg_id'");


       }
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sakec Placement | Academic</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href=" bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="./css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href=" dist/css/skins/_all-skins.min.css">
<style>
    .wrapper{background:#ecf0f5 !important}
.tools{font-size:18px;text-align:left}
</style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 <div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <section class="content">
      <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">

            <!-- form start -->
            <form class="form-horizontal" method="post" action="" >
              <div class="box-body">
              	<CENTER><B><I>SHREE BHAWANI ELECTRIC AND HARDWARE</I></B></CENTER>
              </div>
            </form>
        </div>

          <div class="box box-info">
            <div class="box-header with-border">
              <h1 class="box-title">Account</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <B style='padding-left: 24px;'>Quantity</B><B style='padding-left: 260px;'>Particulars</B><B style='padding-left: 345px;'>Rate</B><B style='padding-left: 123px;'>AMOUNT</B>
            <form class="form-horizontal" method="post" action="" >
              <div class="box-body">
              	<div class="col-md-12">
				 <div class="form-group">

                     <div class="col-sm-1">
                    <input type="text" class="form-control" name="sem1marks" value="<?php echo $sem1marks ?>">
                     </div>
                         <div class="col-sm-7">
                    <input type="text" class="form-control"  name="sem1marks" value="<?php echo $sem1marks ?>">
                     </div>
                             <div class="col-sm-2">
                    <input type="text" class="form-control"  name="sem1marks" value="<?php echo $sem1marks ?>">
                            </div>
                 <div class="col-sm-2">
                    <input type="text" class="form-control"  name="sem1marks" value="<?php echo $sem1marks ?>">
                 </div>
            </div>
        </div>

                <div class="col-md-12">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-10 control-label">TOTAL</label>
                     <div class="col-sm-2">
                    <input type="text" class="form-control" name="totalmarks" value="<?php echo $totalmarks ?>"readonly>
                     </div>
                 </div>
                </div>
        </div>


	</div>
    </section>
</section>

</div>
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php
		include 'footer.php';
		 ?>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src=" plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src=" bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src=" plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src=" plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src=" dist/js/app.min.js"></script>
<!-- Page Script -->
<script>
$(document).ready(function(){

})
</script>
</body>
</html>
