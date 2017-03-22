<?php
include'../config.php';
require_once'session_admin.php';
$out='';
$company='';
$to=$_GET['id'];
$sq=mysql_query("select * from company");
while ($a=mysql_fetch_array($sq)) {
	$company.='
	<option value="'.$a['c_id'].'">'.$a['cname'].' ('.$a['ccode'].')</option>
	';
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MHSSCE Placement | Mailbox</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style>
.box-header:hover{cursor: pointer}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include('header_admin.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>

      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
		<div class="row">
			<div class="col-sm-12">
				<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Send Mail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                	<label>To</label>
                	<input type="text" name="to" class="form-control" id="to" value="<?php echo $to ?>"/>
                </div>


                <div class="form-group">
                	<label>Subject</label>
                	<input type="text" name="subject" class="form-control" id="sub"/>
                </div>
                <div class="form-group">
                	<label>Company Registration(only for registration)</label>
                		<select class="form-control" id="company">
                			<option value="">None</option>
                			<?php echo $company ?>
                		</select>
                </div>
                <div class="form-group">
                	<label>Message</label>
                	<textarea name="message" class="form-control" id="message" rows="6"></textarea>
                </div>
               </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success" id="sent">Send</button>
                <div class="callout callout-success" id="success" style="margin-top: 20px;display: none">
                <h4>Message sent.</h4>
              </div>
              </div>
          </div>
			</div>
		</div>
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
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>

<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>


<!-- Page Script -->
<script>
$(document).ready(function(){
	$("#sent").click(function(){
		$.ajax({
			type:"POST",
			url:"send_mail.php",
			data:"to="+$('#to').val()+"&subject="+$("#sub").val()+"&message="+$("#message").val()+"&company="+$("#company").val(),
			cache:false,
			success:function(){
				$("#to").val('');
				$("#sub").val('');
				$("#message").val('');
				$("html, body").animate({ scrollTop: $(document).height() }, 500);
				$("#success").fadeIn();

			}
		})
	})
	$("#example1").DataTable();
})
</script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
