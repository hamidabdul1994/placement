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
$sql=mysql_query("select * from resume where reg_id='$reg_id'");
while ($b=mysql_fetch_array($sql)) {
	$project1=$b['project'];
	$miniproject1=$b['miniproject'];
	$certification1=$b['certification'];
     $sy11=$b['sy1'];
    $py11=$b['py1'];
    $Hname1=$b['Hname'];
    $py21=$b['py2'];
    $sname1=$b['sname'];
    $py31=$b['py3'];
	$address1=$b['address'];
    $obj1=$b['obj'];
    $lang=$b['langu'];
    $publication=$b['publication'];
}
if(isset($_POST['update']))
{
	    $address=$_POST['address'];
        $project=$_POST['project'];
        $miniproject=$_POST['miniproject'];
        $certification=$_POST['certification'];
    $publication=$_POST['publication'];
        $langu=$_POST['langu'];
        $obj=$_POST['obj'];
        $sql=mysql_query("select * from resume where reg_id='$reg_id'");
	    $count=mysql_num_rows($sql);
	    if($count==1)
        {
        mysql_query("update resume set address='$address',project='$project',miniproject='$miniproject',certification='$certification',langu='$langu',obj='$obj',publication='$publication' where reg_id='$reg_id' ");
        }


}



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sakec Placement | Personal</title>
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
<style>
.main-footer{background:#ecf0f5}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include('header.php') ?>
<div class="wrapper">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <section class="content">
      <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">

            <!-- /.box-header -->
            <!-- form start -->
               <form action="" method="post">
              <div class="box box-info">
            <div class="box-header with-border">
              <h1 class="box-title">SSC</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form class="form-horizontal"  >
              <div class="box-body">
              	<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">School Name</label>
                  <div class="col-sm-9">
                   <input type="text" class="form-control" name="sname" value="<?php echo $sname1 ?>"readonly>
                  </div>
                 </div>
                  <br>
                    <br>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Passing Year </label>
                  <div class="col-sm-9">
                       <input type="text" class="form-control" name="py3" value="<?php echo $py31 ?>" readonly>
                  </div>
                </div>
                    </div>

              </div>
            </form>

        </div>

               <div class="box box-info">
            <div class="box-header with-border">
              <h1 class="box-title">HSC/Diploma</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" >
              <div class="box-body">
              	<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">HSC/Diploma College Name</label>
                  <div class="col-sm-9">
                   <input type="text" class="form-control" name="Hname" value=" <?php echo $Hname1 ?>" readonly>
                  </div>
                 </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Passing Year </label>
                  <div class="col-sm-9">
                       <input type="text" class="form-control" name="py2" value=" <?php echo $py21 ?>" readonly>
                  </div>
                </div>
                    </div>

              </div>
            </form>
        </div>
               <div class="box box-info">
            <div class="box-header with-border">
              <h1 class="box-title">Degree</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                    <form class="form-horizontal" >
              <div class="box-body">
              	<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">College Name</label>
                  <div class="col-sm-9">
                   <input type="text" class="form-control" name="dname" value="SHAH AND ANCHOR KUTCHHI ENGINEERING COLLEGE"readonly>
                  </div>
                 </div>
                   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Starting Year </label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" name="sy1" value=" <?php echo $sy11 ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Passing Year </label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" name="py1" value=" <?php echo $py11 ?>" readonly>
                  </div>
                </div>
                    </div>

              </div>
            </form>

        </div>
               <div class="box box-info">
            <div class="box-header with-border">
              <h1 class="box-title">Project and Personal Details</h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                    <form class="form-horizontal" method="post" action="" >
              <div class="box-body">
              	<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Career Objective</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="obj" value="<?php echo $obj1 ?>" >
                  </div>
                 </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Project Details(Final year)</label>
                  <div class="col-sm-9">
                     <textarea rows='3' class="form-control" name="project" ><?php echo $project1 ?> </textarea>
                  </div>
                </div>
                    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Any other Projects</label>
                  <div class="col-sm-9">
                    <textarea rows='3' class="form-control" id="inputEmail3" name="miniproject" ><?php echo $miniproject1 ?></textarea>
                  </div>
                </div>
                    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Publications</label>
                  <div class="col-sm-9">
                  <textarea rows='3' class="form-control" id="inputEmail3" name="publication"><?php echo $publication ?></textarea>
                  </div>
                </div>
                     <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Permanent Address</label>
                  <div class="col-sm-9">
                  <textarea rows='3' class="form-control" id="inputEmail3" name="address"><?php echo $address1 ?></textarea>
                  </div>
                </div>
                     <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Technical Skills</label>
                  <div class="col-sm-9">
                   <textarea rows='3' class="form-control" id="inputEmail3" name="langu"><?php echo $lang ?></textarea>
                  </div>
                </div>
                     <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Certifications if any</label>
                  <div class="col-sm-9">
                    <textarea rows='3' class="form-control" id="inputEmail3" name="certification"><?php echo $certification1 ?></textarea>
                  </div>
                </div>
                    </div>

              </div>
                        <div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" name="update" id="update" value="Update">
              </div>
            </form>

        </div>

        <div class="box-footer">
            <a href="resume_builder.php" target="_blank" > <input type="button" class="btn btn-info pull-right"  name="sub" id="sub" value="Generate Resume"></a>
              </div>
              </form>


              <!-- /.box-body -->

              <!-- /.box-footer -->

          </div>
	</div>

    </section>

    </section>


</div>
 <footer class="main-footer">
   <?php
   include 'footer.php';
    ?>
  </footer>
</div>


</div>
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

})
</script>
</body>
</html>
