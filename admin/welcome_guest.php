<?php
include'../config.php';
require_once'session_guest.php';
$reg_id=$_SESSION['guest_user'];
$out='';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sakec Placement | Student list</title>
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
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="../plugins/datatables/extra/buttons.dataTables.min.css"/>
<style>
#out{margin-top:20px}
#DataTables_Table_0_filter{float:right}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include('header_guest.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Search Students</h3>
            </div>

            <div class="box-body">
              <div class="col-sm-6">
              	<div class="form-group">
              		<div class="col-sm-6 no-padding">
              			<input type="text" class="pointer form-control" id="pointer" placeholder="Enter Pointer (start)"/>
              		</div>
              		<div class="col-sm-6 no-padding">
              			<input type="text" class="pointer form-control" id="pointer1" placeholder="Enter Pointer (end)"/>
              		</div>
              	</div>
              </div>
              <div class="col-sm-6">
              	<div>
              	<button class="btn btn-success " id="search"><i class="ion-android-search"></i> Get Info</button>
              </div>
              </div>
              <div id="out" class="col-sm-12"></div>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php
		include '../footer.php';
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
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>

<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../plugins/datatables/extra/buttons.flash.min.js"></script>
<script src="../plugins/datatables/extra/buttons.html5.min.js"></script>
<script src="../plugins/datatables/extra/buttons.print.min.js"></script>
<script src="../plugins/datatables/extra/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables/extra/jszip.min.js"></script>
<script src="../plugins/datatables/extra/pdfmake.min.js"></script>
<script src="../plugins/datatables/extra/vfs_fonts.js"></script>
<script>
$(document).ready(function(){
	$("#search").click(function(){
		var pointer=$("#pointer").val();
		var pointerend=$("#pointer1").val();
		$.ajax({
			type:"GET",
			url:"getinfo.php?start="+pointer+"&end="+pointerend,
			cache:false,
			success:function(html){
				$("#out").empty();
				$("#out").append(html);
				$(".table").DataTable({
						dom: 'Bfrtip',
				        buttons: [
				            'copy', 'csv', 'excel', 'pdf', 'print'
				        ]
					});
			}
		})
	})
})
</script>
</body>
</html>
