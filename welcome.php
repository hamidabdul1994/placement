<?php
include'config.php';
require_once'session.php';
$reg_id=$_SESSION['login_user'];
$sql=mysql_query("select * from user where reg_id='$reg_id'");
while($x=mysql_fetch_array($sql)){
    $name=$x['uname'];
}
$message_out='';
$sql=mysql_query("select * from message_list where user_id='$reg_id' order by mail_id DESC");
while ($a=mysql_fetch_array($sql)) {
	$mail_id=$a['mail_id'];
	$b=mysql_fetch_array(mysql_query("select * from message where mail_id='$mail_id'"));
	$message=$b['message'];
	$message = substr($message, 0, 100);
	$send_date=date('d M , Y',strtotime($b['send_date']));
	$message_out.='

	<tr>
	       <td class="mailbox-subject"><a href="#" class="view-message" id="'.$mail_id.'" style="color:#333"><b>'.$b['subject'].'</b> - '.$message.'...</a></td>
	       <td class="mailbox-date" style="text-align:right">'.$send_date.'</td>
    </tr>

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
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox</h3>

              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  	<?php echo $message_out ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
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
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->


  </div>
</div>

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

<!-- AdminLTE for demo purposes -->
<script src=" dist/js/demo.js"></script>
<script>
$(document).ready(function(){
	$(".view-message").click(function(){
		var id=$(this).attr('id');
		$.ajax({
			type:"GET",
			url:"viewmessage.php?id="+id,
			cache:false,
			success:function(data){
				$("#myModal>div").empty();
				$("#myModal>div").append(data);
				$("#myModal").modal();
			}
		})
	})
})
</script>
</body>
</html>
