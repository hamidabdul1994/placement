<?php
include'config.php';
require_once'session_admin.php';
$reg_id=$_SESSION['login_user'];
$id=$_GET['id'];
$sql=mysql_query("select * from company where c_id=$id");
$count=mysql_num_rows($sql);
if($count==0){
	header("location:welcome_admin.php");
}
$a=mysql_fetch_array($sql);
$out='';
$round=$a['criteria'];
$mid='';
$out.='<ul class="nav nav-tabs">';
for($i=1;$i<=$round;$i++){
	$out.='<li><a data-toggle="tab" href="#'.$i.'">Round '.$i.'</a></li>';
}
$out.='<li><a data-toggle="tab" href="#placed">Placed</a></li></ul><div class="tab-content">';
$sq=mysql_query("select * from message where c_id=$id");
$b=mysql_fetch_array($sq);
$mail_id=$b['mail_id'];
for($i=1;$i<=$round;$i++){
	$sql=mysql_query("select * from message_list where mail_id=$mail_id and round>='$i'");
	$x='';
	$mid='';
	while ($c=mysql_fetch_array($sql)) {
		$user_id=$c['u_id'];
		$mid.=$user_id.';';
		$la='';

		$s=mysql_fetch_array(mysql_query("select * from student_details where u_id=$user_id"));
		if($c['round']>$i){
			$la='<label class="btn label-success pull-left">Promoted to Round '.($i+1).'</label>';
		}
		else{
			$la='<button class="btn btn-primary promote" id="user='.$user_id.'&c='.$id.'&r='.($i+1).'"><i class="ion-arrow-up-c"></i> Promote now</button>';
		}
		$x.='
		<tr>
			<td>'.$user_id.'</td>
			<td>'.$s['stname'].'</td>
			<td>'.$s['branch'].'</td>
			<td>'.$s['division'].'</td>
			<td>'.$s['r_number'].'</td>
			<td id="'.$user_id.''.$id.''.($i+1).'">'.$la.'</td>
		</tr>
		';
	}
	$pro='';
	if($i==$round){
		$pro="Promote to placed";
	}
	else{
		$pro='Promote to Round '.($i+1).' ';
	}
	$out.='
	<div id="'.$i.'" class="tab-pane fade in">
		<table class="table table-bordered table-striped">
           <thead>
                <tr>
                  <th>u_id</th>
                  <th>Name</th>
                  <th>Branch</th>
                  <th>Div</th>
                  <th>Roll no</th>
                  <th>'.$pro.'</th>
               	</tr>

           </thead>
           '.$x.'
           </table>
           <a href="mailto.php?id='.$mid.'"><button class="btn btn-warning mailto"><i class="ion-android-send"></i> Mail to above students</button></a>

	</div>
	';
}
$l='';
$mid='';
$sqq=mysql_query("select * from message_list where mail_id=$mail_id and round>'$round'");
while ($z=mysql_fetch_array($sqq)) {
	$user=$z['u_id'];
	$mid.=$user.';';
	$m=mysql_fetch_array(mysql_query("select * from student_details where u_id=$user"));
	$l.='
		<tr>
			<td>'.$user.'</td>
			<td>'.$m['stname'].'</td>
			<td>'.$m['branch'].'</td>
			<td>'.$m['division'].'</td>
			<td>'.$m['r_number'].'</td>
			<td><div class="label label-success">Placed</div></td>
		</tr>
		';
}
$out.='
	<div id="placed" class="tab-pane fade in">
		<table class="table table-bordered table-striped">
           <thead>
                <tr>
                  <th>Reg_id</th>
                  <th>Name</th>
                  <th>Branch</th>
                  <th>Div</th>
                  <th>Roll no</th>
                  <th>Placed</th>
               	</tr>
           </thead>
           '.$l.'
           </table>
           <a href="mailto.php?id='.$mid.'"><button class="btn btn-warning mailto"><i class="ion-android-send"></i> Mail to above students</button></a>
	</div>
</div>
';


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
  <link rel="stylesheet"  href="../css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet"  href="../css/ionicons.min.css">

  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">

  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet"  href="../plugins/datatables/extra/buttons.dataTables.min.css"/>
<style>
.tab-content{
	margin-top: 10px
}
</style>
</head>
<body class="hold-transition skin-blue sidebar-collapse">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $a['cname'] ?> (<?php echo $a['ccode'] ?>)</h3>
                <a href="welcome_admin.php"><button class="btn btn-primary pull-right">Back to Homepage</button></a>
            </div>
      <div class="box-body">
				<div class="row">
					<div class="col-sm-12">
						<?php echo $out ?>
					</div>
				</div>
            <!-- /.box-body -->
      </div>
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

</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script  src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script  src="../bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script  src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script  src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script  src="../dist/js/app.min.js"></script>

<script  src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script  src="../plugins/datatables/dataTables.bootstrap.min.js"></script>

<script  src="../plugins/datatables/extra/buttons.flash.min.js"></script>
<script  src="../plugins/datatables/extra/buttons.html5.min.js"></script>
<script  src="../plugins/datatables/extra/buttons.print.min.js"></script>
<script  src="../plugins/datatables/extra/dataTables.buttons.min.js"></script>
<script  src="../plugins/datatables/extra/jszip.min.js"></script>
<script  src="../plugins/datatables/extra/pdfmake.min.js"></script>
<script  src="../plugins/datatables/extra/vfs_fonts.js"></script>
<script>
$(document).ready(function(){
	$("#1").addClass('active');
	$(".nav>li").eq(0).addClass('active');
	$(".table").DataTable({
		dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
	});

})
$(document).on("click",".promote",function(){
		var id=$(this).attr('id');
		var aid=$(this).parent().attr('id');
		$.ajax({
			type:"GET",
			url:"promote.php?"+id,
			cache:false,
			success:function(){
				<?php header("Refresh:0"); ?>

				$("#"+aid).append('<label class="label label-success pull-right">Promoted</label>');
			}
		})
	})
</script>
</body>
</html>
