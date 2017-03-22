<?php
include'../config.php';
require_once'session_admin.php';
$reg_id=$_SESSION['login_user'];
$out='';
$i=1;
$sql=mysql_query("select * from company");
while ($a=mysql_fetch_array($sql)) {
	$rounds='';
	$company=$a['c_id'];
	$round=$a['criteria'];
	for($j=1;$j<=$round;$j++){
		$y[$j]=0;
	}
	$sq=mysql_fetch_array(mysql_query("select * from message where c_id=$company"));
	$mail_id=$sq['mail_id'];
	$total_it=0;
	$total_cs=0;
	$total_elec=0;
	$total_extc=0;
	$sqq=mysql_query("select * from message_list where mail_id=$mail_id and register='y'");
	while ($x=mysql_fetch_array($sqq)) {
		$user_id=$x['user_id'];
		$stu_round=$x['round'];
		for($j=1;$j<=$stu_round;$j++){
			$y[$j]=$y[$j]+1;
		}
		$sqp=mysql_fetch_array(mysql_query("select * from student_details where u_id=$user_id"));
		$branch=$sqp['branch'];
		if($branch=='comp'){
			$total_cs=$total_cs+1;

		}
		if($branch=='it'){
			$total_it=$total_it+1;
		}
		if($branch=='elec'){
			$total_elec=$total_elec+1;
		}
		if($branch=='extc'){
			$total_extc=$total_extc+1;
		}
	}

	for($j=1;$j<=$round;$j++){
		$rounds.='
			Round '.$j.' : '.$y[$j].'<br/>
		';
	}
	$count_total=mysql_num_rows($sqq);
	$out.='
	<tr>
		<td>'.$i.'</td>
		<td>'.$a['cname'].' ('.$a['ccode'].')</td>
		<td>'.$count_total.'</td>
		<td>'.$total_cs.'</td>
		<td>'.$total_it.'</td>
		<td>'.$total_elec.'</td>
		<td>'.$total_extc.'</td>
		<td>'.$rounds.'</td>
	</tr>
	';
	$i++;
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Report</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../plugins/datatables/extra/buttons.dataTables.min.css"/>
<style>
#example1_filter{float:right}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include('header_admin.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Report</h3>
            </div>

            <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                	<th>Sr no.</th>
                	<th>Company name</th>
                	<th>Total count</th>
                	<th>CS</th>
                	<th>IT</th>
                	<th>ELEC</th>
                	<th>EXTC</th>
                	<th>Round Info</th>
                </thead>
                <tbody>
                	<?php echo $out ?>
                </tbody>
              </table>
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
	$("#example1").DataTable({
		 dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
	});
})
</script>
</body>
</html>
