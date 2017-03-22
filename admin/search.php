<?php
include'config.php';
require_once'session_admin.php';
$reg_id=$_SESSION['login_user'];
$sql=mysql_query("select * from admin where reg_id='$reg_id'");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MHSSCE Placement | Search</title>
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
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include('header_admin.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Search
      </h1>
      <ol class="breadcrumb">
        <li><a href="welcome_admin.php"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li class="active">Search</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
         <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <div  class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Criteria</h3>
              </div>
            <form action="mail.php" method="get" class="form-horizontal">
                <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Student name</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="stname" id="inputEmail3" placeholder="name">
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">Branch</label>
                          <div class="col-sm-8">
                            <input type="checkbox" name="branch[]" value="elec" checked> Electronics &nbsp;
                              <input type="checkbox" name="branch[]" value="comp" checked> Computer &nbsp;
                              <input type="checkbox" name="branch[]" value="it" checked> IT &nbsp;
                                <input type="checkbox" name="branch[]" value="extc" checked> EXTC &nbsp;
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-4 control-label">Type</label>

                          <div class="col-sm-8">
                            <input type="checkbox" name="type[]" value="hsc" checked> HSC
                            <input type="checkbox" name="type[]" value="diploma" checked> Diploma
                            </div>
                        </div>
                         <div class="form-group">
                          <label for="inputPassword3" class="col-sm-4 control-label">SSC Percentage (>=)</label>

                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="sscpercentage" value="0" >
                        </div>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">Degree CGPI (>=)</label>
                             <div class="col-sm-4">
                            	<input type="text" class="form-control col-sm-6" name="degree" value="0" >
                             </div>
                             <div class="col-sm-4">
                             	<input type="text" class="form-control col-sm-6" name="degree1" value="10" >
                             </div>
                         </div>
                         <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">Sem 3 Onwards CGPI (>=)</label>
                             <div class="col-sm-4">
                            <input type="text" class="form-control" name="sem3onward" value="0">
                             </div>
                             <div class="col-sm-4">
                            <input type="text" class="form-control" name="sem3onward1" value="10">
                             </div>
                         </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">Live KT (<=)</label>
                             <div class="col-sm-8">
                            <input type="text" class="form-control" name="livekt" value="0" id="livekt" >
                             </div>
                         </div>
                        <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label"> No Of Attempts(<=)</label>
                                 <div class="col-sm-8">
                                <input type="text" class="form-control" name="attempts" id="attempt" value="0">
                                 </div>
                             </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">IS Placed</label>
                             <div class="col-sm-8">
                                 Not Placed <Input type = "Radio" name="isplaced" value="n"> &nbsp; &nbsp;
                                 Placed <Input type = "Radio" name="isplaced" value="y"> &nbsp; &nbsp;
                                 Any <Input type = "Radio" name="isplaced" value="b" checked>
                             </div>
                         </div>
                      <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">IS Defaulter</label>
                         <div class="col-sm-8">
                             yes <Input type="Radio" name="isdefaulter" value="y"> &nbsp; &nbsp;
                             no <Input type="Radio" name ="isdefaulter" value="n" checked>

                         </div>
                     </div>
                     <div class="form-group">
                         <div class="col-sm-8">	<input type="checkbox" id="not" /> Kt's Not Applicable</div>
                         </div>
                    </div>





                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">Gender</label>

                          <div class="col-sm-8">
                            <input type="checkbox" name="gender[]" value="Male" checked> Male &nbsp;
                            <input type="checkbox" name="gender[]" value="Female" checked> Female &nbsp;
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-4 control-label">Passing year</label>

                          <div class="col-sm-8">
                             <select class="form-control" name="passyear" required>
                                <option value="2016">2016</option>
                                 </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-4 control-label">HSC Percentage (>=)</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" name="hscpercentage" value="0" >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">Diploma Percentage (>=)</label>
                             <div class="col-sm-8">
                            <input type="text" class="form-control" name="diplomapercentage" value="0">
                             </div>
                         </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">drop (<=)</label>
                             <div class="col-sm-8">
                            <input type="text" class="form-control" name="drop" id="drop" value="0" >
                             </div>
                         </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">Dead KT (<=)</label>
                             <div class="col-sm-8">
                            <input type="text" class="form-control" name="deadkt" id="deadkt" value="0" >
                             </div>
                         </div>

                    </div>
                </div>
            </div>
             <div class="box-footer">
                 <input type="reset" class="btn btn-danger pull-right" value="Reset" style="margin-left:10px" />
                <input type="submit" class="btn btn-info pull-right" name="search" id="search" value="Search">
              </div>
              </form>

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
	$("#not").click(function(){
		if (this.checked) {
			$("#drop").val('100');
			$("#attempt").val('100');
			$("#livekt").val('100');
			$("#deadkt").val('100');
			$("#drop").attr('readonly','true');
			$("#attempt").attr('readonly','true');
			$("#livekt").attr('readonly','true');
			$("#deadkt").attr('readonly','true');
		}
		else{
			$("#drop").val('0');
			$("#attempt").val('0');
			$("#livekt").val('0');
			$("#deadkt").val('0');
			$("#drop").removeAttr('readonly');
			$("#attempt").removeAttr('readonly');
			$("#livekt").removeAttr('readonly');
			$("#deadkt").removeAttr('readonly');
		}
	})
})
</script>
</body>
</html>
