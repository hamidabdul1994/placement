<?php
include'config.php';
require_once'session_admin.php';
$out='';
$reg_id=$_SESSION['login_user'];
$sql=mysql_query("select Distinct user_id from chat order by message_id desc");
while ($a=mysql_fetch_array($sql)) {
	$user_id=$a['user_id'];
	$sql1=mysql_query("select * from user where reg_id='$user_id'");
	$count=mysql_num_rows(mysql_query("select * from chat where user_id='$user_id'"));
	while ($b=mysql_fetch_array($sql1)) {
        $sql2=mysql_query("select * from student_details where reg_id='$user_id'");
while($x=mysql_fetch_array($sql2)){
    $gender=$x['gender'];
    if($gender=="male"){$gender1='male.png';}
    else{$gender1='female.png';}

}
		$uname=$b['uname'];
		$out.='
		<div class="box-header with-border chat" id="'.$user_id.'">
      				<div class="user-panel">
				        <div class="pull-left image">
				          <img src="'.$gender1.'" class="img-circle" alt="User Image">
				        </div>
				        <div class="pull-left info">
				          <p></p>
				          <a style="color:#333"><i class="fa fa-circle text-success"></i> <h3 class="box-title">'.$uname.'</h3></a>
				          <span class="badge" style="text-align:right"> '.$count.' </span>
				        </div>
				      </div>
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
  <link rel="stylesheet" href=" plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href=" plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href=" dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href=" dist/css/skins/_all-skins.min.css">

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
      	<div class="col-md-6">
      		<div class="box box-primary" style="height:500px;overflow-y: scroll">
      			<?php echo $out ?>
      		</div>
      	</div>
      	<div class="col-md-6">
      		<div class="box box-success">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Support Chat</h3>
            </div>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 400px;"><div class="box-body chat" id="chat-box" style="overflow-y: scroll; width: auto; height: 400px;">

            </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 184.911px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
            <!-- /.chat -->
            <div class="box-footer">
              <div class="input-group">
                <input class="form-control" id="message" name="message" placeholder="Type message...">

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

<!-- Page Script -->
<script>
 $(document).ready(function(){
 	var hh=0;
 	var id;
 	var active=0;
 	var c=0,count=0;
 	$(".chat").click(function(){
 		id=$(this).attr('id');
 		$.ajax({
 			type:"GET",
 			url:"chat_admin.php?id="+id,
 			cache:false,
 			success:function(html){
 				$("#chat-box").empty();
 				$("#chat-box").append(html);
 				hh=$("#chat-box")[0].scrollHeight;
				$("#chat-box").scrollTop(hh);
				active=1;
				c=$(".item").length;
				count=$(".item").length;
 			}
 		})
 	})
 	$(".btn-success").click(function(){
    var message=$("#message").val();
    if(message!=null || message!=''){
     $.ajax({
        type:"POST",
        url:"chat_process_admin.php",
        data:"message="+message+"&user_id="+id,
        cache:false,
        success:function(){
            $("#chat-box").last().append(' <div class="item"><img src="<?php echo $gender1 ?>" alt="user image" class="online"><p class="message"><a href="#" class="name"><small class="text-muted pull-right"> <i class="fa fa-clock-o"></i> Just now</small>Admin</a>'+message+'</p></div>');
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
	if(active==1){
       $.ajax({
        type:"GET",
        url:"chat_interval_admin.php?count="+c+"&reg_id="+id,
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
     }
    },1000);

 })


</script>
<!-- AdminLTE for demo purposes -->
<script src=" dist/js/demo.js"></script>
</body>
</html>
