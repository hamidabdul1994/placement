<?php
include'config.php';
require_once'session_admin.php';
$reg_id=$_SESSION['login_user'];
$sql=mysql_query("select * from admin where username='$reg_id'");
$result=mysql_query("select * from guest ");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MHSSCE Placement | Company Registration</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
<style>
table {

    width: 80%;
}

th, td {
    text-align: left;
    padding: 8px;
}
th {
    background-color: #4296C7;
    color: white;
}
</style>
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
              <h1 class="box-title">Guest Registration</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form class="form-horizontal" >
              <div class="box-body">
              	<div class="box-body">
              	<div class="col-md-12">
                    <div class="row">
            <div class="col-md-12">

            <?php echo "<table border='1'>
            <tr><th>Guest ID</th><th>Guest Names</th><th>Company Name</th><th>Password</th><th>Add Guest</th></tr>";
while ($row=mysql_fetch_array($result)) {
	echo"<tr id='".$row['g_id']."'><input type='hidden' name='gid' value='".$row['g_id']."'>";
    echo"<td>" . $row['g_id'] . "</td>";
    echo"<td>" . $row['gname'] . "</td>";
    echo"<td>" . $row['cname'] . "</td>";
    echo "<td><input type='text' name='pwd' class='pwd' value='" . $row['pwd'] . "' /> </td>";
    echo "<td><input type='button' class='btn btn-primary btn-block btn-flat add' name='Add' id='Add' value='Add'> </td>";
    echo"</tr>";



}echo "</table>";?>
               </div>
                    </div>
                         </div>
                           </div>
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
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- Page Script -->
<script>
$(document).ready(function(){
	$(".add").click(function(){
		var id=$(this).parent().parent().attr('id');
		var pwd=$("#"+id+" .pwd").val();
		$.ajax({
			type:"GET",
			url:"update_guest.php?id="+id+"&pwd="+pwd,
			cache:false,
			success:function(html){
				location.reload();
			}
		})
	})
})
</script>

</body>
</html>
