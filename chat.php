<?php
include'config.php';
require_once'session.php';
$reg_id=$_SESSION['login_user'];
$name='';
$sql=mysql_query("select * from user where u_id=$reg_id");
while($x=mysql_fetch_array($sql)){
    $name=$x['uname'];
}
$gender1='';
$sql=mysql_query("select * from student_details where u_id=$reg_id");
while($x=mysql_fetch_array($sql)){
    $gender=$x['gender'];
    $type=$x['type'];
    if($gender=="male"){$gender1='male.png';}
    else{$gender1='female.png';}
}
$out='';
$sql=mysql_query("select * from chat where u_id=$reg_id order by message_id ASC");
while($s=mysql_fetch_array($sql)){
    $message=$s['message'];
    $curdate=$s['cur_date'];
    $curdate=date("M d",strtotime($curdate));
    $curtime=$s['cur_time'];
    $sent=$s['sent'];
    if($sent=='n'){
    $out.='
    <div class="item">
                <img src="'.$gender1.'" alt="user image" class="offline">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right">'.$curdate.' <i class="fa fa-clock-o"></i> '.$curtime.'</small>
                    '.$name.'
                  </a>
                  '.$message.'
                </p>
              </div>

    ';
    }
else{
	 $out.='
    <div class="item">
                <img src="admin.png" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right">'.$curdate.' <i class="fa fa-clock-o"></i> '.$curtime.'</small>
                    Admin
                  </a>
                  '.$message.'
                </p>
              </div>

    ';
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sakec Placement | Mailbox</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href=" bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include('header.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Support
      </h1>
      <ol class="breadcrumb">
        <li><a href="welcome.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Support</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                    <div class="box box-success">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Chat</h3>
            </div>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 400px;"><div class="box-body chat" id="chat-box" style="overflow-y:scroll; width: auto; height: 400px;">
              <?php echo $out ?>
            </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 184.911px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
            <!-- /.chat -->
            <div class="box-footer">
              <div class="input-group">
                <input class="form-control" name="message" id="message" placeholder="Type message...">

                <div class="input-group-btn">
                  <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                </div>
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
<script>
  $(function () {

    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
$(document).ready(function(){
	var count=$(".item").length;
	var c=$(".item").length;
	var hh=$("#chat-box")[0].scrollHeight;
	$("#chat-box").scrollTop(hh);
    $(".btn-success").click(function(){
    var message=$("#message").val();
    if(message!=null || message!=''){
     $.ajax({
        type:"POST",
        url:"chat_process.php",
        data:"message="+message,
        cache:false,
        success:function(){
            $("#chat-box").last().append(' <div class="item"><img src="<?php echo $gender1 ?>" alt="user image" class="offline"><p class="message"><a href="#" class="name"><small class="text-muted pull-right"> <i class="fa fa-clock-o"></i> Just now</small><?php echo $name ?></a>'+message+'</p></div>');
     		$('#message').val('');
     		hh=$("#chat-box")[0].scrollHeight;
			$("#chat-box").scrollTop(hh);
			c=c+1;
     }
     })
        }
    })

$('#message').keypress(function(event){
    var keyCode = (event.keyCode ? event.keyCode : event.which);
    if (keyCode == 13) {
        $('.btn-success').trigger('click');
    }
});
 setInterval(function () {
       $.ajax({
        type:"GET",
        url:"chat_interval.php?count="+c,
        cache:false,
        success:function(html){
            	$("#chat-box").last().append(html);
            	c=$(".item").length;
            	if(c>count){
            	hh=$("#chat-box")[0].scrollHeight;
				$("#chat-box").scrollTop(hh);
				count=c;
				}
     }
     })
    },1000);
})
</script>
</body>
</html>
