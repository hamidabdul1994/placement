<?php
include'config.php';
require_once'session.php';
$reg_id=$_SESSION['login_user'];
$sql=mysql_query("select * from user where reg_id='$reg_id'");
while($x=mysql_fetch_array($sql)){
    $name=$x['uname'];
}
$sql=mysql_query("select * from student_details where reg_id='$reg_id'");
while ($b=mysql_fetch_array($sql)) {
	$stname=$b['stname'];
}


$sql=mysql_query("select * from dipmarks where reg_id='$reg_id'");
while ($b=mysql_fetch_array($sql)) {
	$sscmarks=$b['sscmarks'];
    $sscoutoff=$b['sscoutoff'];
    $sscpercentage=$b['sscpercentage'];
    $year1marks=$b['year1marks'];
    $year1outoff=$b['year1outoff'];
    $year2marks=$b['year2marks'];
    $year2outoff=$b['year2outoff'];
    $year3marks=$b['year3marks'];
    $year3outoff=$b['year3outoff'];
    $diplomapercentage=$b['diplomapercentage'];
    $totaldmarks=$b['totaldmarks'];
    $totaldoutoff=$b['totaldoutoff'];
    $sem3marks=$b['sem3marks'];
    $sem3outoff=$b['sem3outoff'];
    $sem4marks=$b['sem4marks'];
    $sem4outoff=$b['sem4outoff'];
    $sem5marks=$b['sem5marks'];
    $sem5outoff=$b['sem5outoff'];
    $sem6marks=$b['sem6marks'];
    $sem6outoff=$b['sem6outoff'];
    $sem7marks=$b['sem7marks'];
    $sem7outoff=$b['sem7outoff'];
    $sem8marks=$b['sem8marks'];
    $sem8outoff=$b['sem8outoff'];
    $totalmarks=$b['totalmarks'];
    $totaloutoff=$b['totaloutoff'];
    $degreepointer=$b['degreepointer'];
    $py1=$b['py1'];
    $py2=$b['py2'];
    $py3=$b['py3'];
    $sy=$b['sy'];
    $livekt=$b['livekt'];
    $deadkt=$b['deadkt'];
    $attempts=$b['attempts'];

}


if(isset($_POST['update']))
{

    $sem3marks=$_POST['sem3marks'];
    $sem3outoff=$_POST['sem3outoff'];
    $sem4marks=$_POST['sem4marks'];
    $sem4outoff=$_POST['sem4outoff'];
    $sem5marks=$_POST['sem5marks'];
    $sem5outoff=$_POST['sem5outoff'];
    $sem6marks=$_POST['sem6marks'];
    $sem6outoff=$_POST['sem6outoff'];
    $sem7marks=$_POST['sem7marks'];
    $sem7outoff=$_POST['sem7outoff'];
    $sem8marks=$_POST['sem8marks'];
    $sem8outoff=$_POST['sem8outoff'];
    $totalmarks=(($sem3marks)+($sem4marks)+($sem5marks)+($sem6marks)+($sem7marks)+($sem8marks));
    $totaloutoff=(($sem3outoff)+($sem4outoff)+($sem5outoff)+($sem6outoff)+($sem7outoff)+($sem8outoff));
    $degreepointer=(($totalmarks)/($totaloutoff));
    $degreepointer=sprintf('%0.2f', $degreepointer);
    $py1=$_POST['py1'];
    $py2=$_POST['py2'];
    $py3=$_POST['py3'];
    $sy=$_POST['sy'];
    $livekt=$_POST['livekt'];
    $deadkt=$_POST['deadkt'];
    $attempts=$_POST['attempts'];

        $sql=mysql_query("select * from dipmarks where reg_id='$reg_id'");
	    $count=mysql_num_rows($sql);
     if($count==1)
        {
        mysql_query("update dipmarks set sem3marks='$sem3marks',sem3outoff='$sem3outoff',sem4marks='$sem4marks',sem4outoff='$sem4outoff',sem5marks='$sem5marks',sem5outoff='$sem5outoff',sem6marks='$sem6marks',sem6outoff='$sem6outoff',sem7marks='$sem7marks',sem7outoff='$sem7outoff',sem8marks='$sem8marks',sem8outoff='$sem8outoff',totalmarks='$totalmarks',totaloutoff='$totaloutoff',degreepointer='$degreepointer',py1='$py1',py2='$py2',py3='$py3',sy='$sy',livekt='$livekt',deadkt='$deadkt',attempts='$attempts' where reg_id='$reg_id'");


       }
    echo mysql_error();
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sakec Placement | Academic</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href=" bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="./css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./css/ionicons.min.css"><!-- fullCalendar 2.2.5-->
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
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include('header.php') ?>
 <div class="wrapper">
<form method="post"  action="academic_diploma.php">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style='min-height: 1272px;'>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <section class="content">
      <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h1 class="box-title">SSC</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
              	<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Marks obtained</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="marks obtained" name="sscmarks" value="<?php echo $sscmarks ?>"readonly>
                     </div>
                 </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Out off marks</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Out off" name="sscoutoff" value="<?php echo $sscoutoff ?>"readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">SSC percentage</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control"  name="sscpercentage" value="<?php echo $sscpercentage ?>"readonly>
                        </div>
                    </div>
                </div>
                  <div class="col-md-12">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Passing year</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="py1" value="<?php echo $py1 ?>" required>
                  </div>
                 </div>
                  </div>
              </div>
              </div>
        </div>
          <div class="box box-info">
            <div class="box-header with-border">
              <h1 class="box-title">DIPLOMA</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal" >
              <div class="box-body">
              	<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Year 1</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="marks obtained" name="year1marks" value="<?php echo $year1marks ?>"readonly>
                     </div>
                 </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Out off" name="year1outoff" value="<?php echo $year1outoff ?>"readonly>
                        </div>
                    </div>
                </div>
                                	<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Year 2</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="marks obtained" name="year2marks" value="<?php echo $year2marks ?>"readonly>
                     </div>
                 </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Out off" name="year2outoff" value="<?php echo $year2outoff ?>"readonly>
                        </div>
                    </div>
                </div>
                              	<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Year 3</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="marks obtained" name="year3marks" value="<?php echo $year3marks ?>"readonly>
                     </div>
                 </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Out off" name="year3outoff" value="<?php echo $year3outoff ?>"readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Total</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="marks obtained" name="totaldmarks" value="<?php echo $totaldmarks ?>"readonly>
                     </div>
                 </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Out off" name="totaldoutoff" value="<?php echo $totaldoutoff ?>"readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Diploma Percentage</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control"  name="diplomapercentage" value="<?php echo $diplomapercentage ?>"readonly>
                        </div>
                    </div>
                </div>
                  <div class="col-md-12">
                   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Passing year</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="py2" value="<?php echo $py2 ?>" required>
                  </div>
                 </div>
              </div>
                </div>
              </div>
        </div>
          <div class="box box-info">
            <div class="box-header with-border">
              <h1 class="box-title">DEGREE</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <B style='padding-left: 320px;'>C*G</B><B style='padding-left: 490px;'>C</B>
             <div class="form-horizontal" >
              <div class="box-body">
              	                  <div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">SEM3</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="marks obtained" name="sem3marks" value="<?php echo $sem3marks ?>">
                     </div>
                 </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Out off" name="sem3outoff" value="<?php echo $sem3outoff ?>">
                        </div>
                    </div>
                </div>
                  <div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">SEM4</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="marks obtained" name="sem4marks" value="<?php echo $sem4marks ?>">
                     </div>
                 </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Out off" name="sem4outoff" value="<?php echo $sem4outoff ?>">
                        </div>
                    </div>
                </div>
                  <div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">SEM5</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="marks obtained" name="sem5marks" value="<?php echo $sem5marks ?>">
                     </div>
                 </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Out off" name="sem5outoff" value="<?php echo $sem5outoff ?>">
                        </div>
                    </div>
                </div>
                  <div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">SEM6</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="marks obtained" name="sem6marks" value="<?php echo $sem6marks ?>">
                     </div>
                 </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Out off" name="sem6outoff" value="<?php echo $sem6outoff ?>">
                        </div>
                    </div>
                </div>
                  <div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">SEM7</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="marks obtained" name="sem7marks" value="<?php echo $sem7marks ?>">
                     </div>
                 </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Out off" name="sem7outoff" value="<?php echo $sem7outoff ?>">
                        </div>
                    </div>
                </div>
                  <div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">SEM8</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="marks obtained" name="sem8marks" value="<?php echo $sem8marks ?>">
                     </div>
                 </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Out off" name="sem8outoff" value="<?php echo $sem8outoff ?>">
                        </div>
                    </div>
                </div>
                  <div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">TOTAL</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="marks obtained" name="totalmarks" value="<?php echo $totalmarks ?>"readonly>
                     </div>
                 </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Out off" name="totaloutoff" value="<?php echo $totaloutoff ?>"readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Degree POINTER</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control"  name="degreepointer" value="<?php echo $degreepointer ?>"readonly>
                        </div>
                    </div>
                </div>
                  <div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Starting year</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" name="sy" value="<?php echo $sy ?>">
                     </div>
                 </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Passing year</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="py3" value="<?php echo $py3 ?>">
                        </div>
                    </div>
                </div>
                  </div>
              </div>
        </div>
                  <div class="box box-info">
            <div class="box-header with-border">
              <h1 class="box-title">Details</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                 <div class="col-md-6">
				 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Live KT</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" name="livekt"  value="<?php echo $livekt ?>">
                     </div>
                 </div>
                </div>
                   <div class="col-md-8">
				 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Dead KT</label>
                     <div class="col-sm-6">
                    <input type="text" class="form-control" name="deadkt"  value="<?php echo $deadkt ?>">
                     </div>
                 </div>
                </div>
                        <div class="col-md-6">
				 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Attempts</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" name="attempts"  value="<?php echo $attempts ?>">
                     </div>
                 </div>
                </div>
              </div>


                <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" name="update" id="update" value="Update">
              </div>
            </div>
        </div>






	</div>
    </section>
</section>
      <div class="modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Message</h4>
              </div>
              <div class="modal-body">
                <p><?php echo $stname ?>  your Academic Profile has been updated </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-right" id="close" data-dismiss="modal">Close</button>

              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
 <footer class="main-footer" style="background:#ecf0f5">

   <?php
   include 'footer.php';
    ?>
  </footer>
</div>
         </form>
</div>
  <!-- /.content-wrapper -->


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
     $("#update").click(function(){
        $(".modal").modal('show');
     });
})
</script>
</body>
</html>
