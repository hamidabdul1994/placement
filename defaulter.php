<?php
include'config.php';
require_once'session_admin.php';
$reg_id=$_SESSION['login_user'];
$out='';
$i=1;
$sql=mysql_query("select * from student_details");
while ($a=mysql_fetch_array($sql)) {
	$defaulter=$a['defaulter'];
	if($defaulter=='n'){
		$defaulter='<label class="label label-success">No</label>';
	}
	else{
		$defaulter='<label class="label label-warning">Yes</label>';
	}
	$out.='
	<tr id="t'.$a['reg_id'].'">
		<td>'.$i.'</td>
		<td>'.$a['reg_id'].'</td>
		<td>'.$a['stname'].'</td>
		<td>'.$a['branch'].'</td>
		<td>'.$a['division'].'</td>
		<td>'.$a['r_number'].'</td>
		<td class="defaulter">'.$defaulter.'</td>
		<td id="'.$a['reg_id'].'"><button class="label label-warning col-sm-5 yes click-me" style="margin-right:10px">Yes</button><button class="label label-primary col-sm-5 no click-me">No</button> </td>
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
  <title>Sakec Placement | Defaulter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href=" bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="./css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./css/ionicons.min.css"><!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href=" plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href=" plugins/fullcalendar/fullcalendar.print.css" media="print">
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href=" dist/css/skins/_all-skins.min.css">
<style>
.click-me{padding-top:5px;border:0px;padding-bottom: 5px}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include('header_admin.php') ?>
 <div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <section class="content">
      	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Defaulter</h3>
            </div>
            <!-- /.box-header -->

              <div class="box-body">
              	              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr no.</th>
                  <th>Reg_id</th>
                  <th>Name</th>
                  <th>Branch</th>
                  <th>Div</th>
                  <th>Roll no</th>
                  <th>Defaulter</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	<?php echo $out ?>
                </tbody>

              </table>

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

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src=" plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src=" dist/js/app.min.js"></script>
<!-- Page Script -->
<script>
$(document).ready(function(){
     $("#example1").DataTable();


})
$(document).on("click",".yes",function(){
     	var id=$(this).parent().attr('id');
     	var status='y';
     	$.ajax({
     		type:"GET",
     		url:"action.php?id="+id+"&s="+status,
     		cache:false,
     		success:function(){
     			$("#t"+id+">.defaulter>label").remove();
     			$("#t"+id+">.defaulter").append('<label class="label label-warning">Yes</label>');

     		}
     	})
     })
$(document).on("click",".no",function(){
     	var id=$(this).parent().attr('id');
     	var status='n';
     	var data="action.php?id="+id+"&s="+status;

     	$.ajax({
     		type:"GET",
     		url:data,
     		cache:false,
     		success:function(){
     			$("#t"+id+">.defaulter>label").remove();
     			$("#t"+id+">.defaulter").append('<label class="label label-success">No</label>');

     		}
     	})
     })
</script>
</body>
</html>
