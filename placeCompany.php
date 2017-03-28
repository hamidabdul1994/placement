<?php
include'config.php';
require_once'session.php';
$out='';
$id=$_SESSION['login_user'];
$out='';
$i=1;
// $sql=mysql_query("SELECT  * FROM  user INNER JOIN message_list ON message_list.u_id = user.u_id ");
$sql=mysql_query("SELECT  * FROM  user,message_list,company,message where message_list.u_id = user.u_id AND company.c_id = message.c_id AND message_list.mail_id=message.mail_id AND user.u_id = $id");
echo mysql_error();
$i = 1;
while ($a=mysql_fetch_array($sql)) {
	$out.='
	<tr id="t'.$a['u_id'].'"">
		<td>'.$i.'</td>
		<td>'.$a['uname'].'</td>
    <td>'.$a['smartcard_no'].'</td>
    <td>'.$a['cname'].'</td>
    <td>'.$a['round'].'</td>
    <td>'.$a['register'].'</td>
    <td id="'.$a['u_id'].'" cId="'.$a['c_id'].'" mailId="'.$a['mail_id'].'">';
    if($a['round']==0){
    $out.='<a href="registerc.php?id='.$a['mail_id'].'" class="label label-warning col-sm-5 attend click-me" style="margin-right:10px">Attend </a>';
    }
    $out.='</td></tr>';
	$i++;
}
if($i==1)
{
  $out='<tr><td colspan="7" align="center"><h2>No Placement Available Please touch with TPO for company derive</h2></td></tr>';
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student Registered For Compnay</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/datatables/extra/buttons.dataTables.min.css"/>
<style>
#example1_filter{float:right}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include('header.php') ?>

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
                  <th>Company Name</th>
                  <th>Round</th>
                  <th>Registered</th>
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
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="plugins/datatables/extra/buttons.flash.min.js"></script>
<script src="plugins/datatables/extra/buttons.html5.min.js"></script>
<script src="plugins/datatables/extra/buttons.print.min.js"></script>
<script src="plugins/datatables/extra/dataTables.buttons.min.js"></script>
<script src="plugins/datatables/extra/jszip.min.js"></script>
<script src="plugins/datatables/extra/pdfmake.min.js"></script>
<script src="plugins/datatables/extra/vfs_fonts.js"></script>
</body>
</html>
