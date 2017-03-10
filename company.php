<?php
include'config.php';
require_once'session_admin.php';
$reg_id=$_SESSION['login_user'];
$sql=mysql_query("select * from admin where reg_id='$reg_id'");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sakec Placement | Company Registration</title>
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
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include('header_admin.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h1 class="box-title">Company Registration</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="companydb.php" >
              <div class="box-body">
              	<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Company Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Company Name" name="cname">
                  </div>
                 </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Company Code</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control"  name="ccode">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Rounds</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control"  name="criteria">
                  </div>
                </div>
              	<div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Deadline Date </label>
                  <div class="col-sm-9">
                     <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="deadline" >
                  </div>
                </div>
          	</div>

              </div>

              <!-- /.box-body -->

                  <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" name="register" id="register" value="Register">
              </div>
              </form>
        </div>

              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <!-- /.box-body -->
            </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
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
<!-- iCheck -->
<script src=" plugins/iCheck/icheck.min.js"></script>
<!-- Page Script -->

<!-- AdminLTE for demo purposes -->
<script src=" dist/js/demo.js"></script>
</body>
</html>
