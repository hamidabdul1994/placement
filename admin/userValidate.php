<?php
include'../config.php';
require_once'session_admin.php';
$reg_id=$_SESSION['login_user'];

$out='';
$i=1;
$sql=mysql_query("select * from user where valid=0");
$i = 1;
while ($a=mysql_fetch_array($sql)) {
	$out.='
	<tr id="t'.$a['u_id'].'"">
		<td>'.$i.'</td>
		<td>'.$a['uname'].'</td>
    <td>'.$a['smartcard_no'].'</td>
    <td id="'.$a['u_id'].'"><button class="label label-warning col-sm-5 yes click-me" style="margin-right:10px">Accept</button><button class="label label-primary col-sm-5 no click-me">Reject</button> </td>
	</tr>
	';
	$i++;
}
if($i==1)
{
  $out='<tr><td colspan="3" align="center"><h2>No User For Validate</h2></td></tr>';
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Validate</title>
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
                	<th>Username</th>
                	<th>Smart Card No.</th>
                	<th>Action</th>
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
  $(document).on("click",".yes",function(){
       	var id=$(this).parent().attr('id');
       	var status='y';
       	$.ajax({
       		type:"POST",
       		url:"userValidateProcess.php?id="+id+"&s="+status,
          data:{id,s:status},
       		cache:false,
       		success:function(){
            <?php header("Refresh:0"); ?>
       			$("#t"+id).remove();
       		}
       	})
       })
  $(document).on("click",".no",function(){
       	var id=$(this).parent().attr('id');
       	var status='n';
       	var data="userValidate.php?id="+id+"&s="+status;

       	$.ajax({
       		type:"POST",
       		url:data,
          data:{id,s:status},
       		cache:false,
       		success:function(){
       			$("#t"+id+">.defaulter>label").remove();
       			$("#t"+id+">.defaulter").append('<label class="label label-success">No</label>');

       		}
       	})
       })
})
</script>
</body>
</html>
