<?php
include'config.php';
require_once'session.php';
$project1='';
$miniproject1='';
$certification1='';
$address1='';
$sy11='';
$py11='';
$Hname1='';
$py21='';
$sname1='';
$py31='';
$obj1='';
$lang='';
$reg_id=$_SESSION['login_user'];
$sql=mysql_query("select * from user where reg_id='$reg_id'");
while($x=mysql_fetch_array($sql)){
    $name=$x['uname'];
}
$sql=mysql_query("select * from resume where reg_id='$reg_id'");
while ($a=mysql_fetch_array($sql)) {
	$project1= ucfirst($a['project']);
	$miniproject1=ucfirst($a['miniproject']);
	$certification1=ucfirst($a['certification']);
    $sy11=$a['sy1'];
    $py11=$a['py1'];
    $Hname1=ucfirst($a['Hname']);
    $py21=$a['py2'];
    $sname1=ucfirst($a['sname']);
    $py31=$a['py3'];
	$address1=ucfirst($a['address']);
    $obj1=ucfirst($a['obj']);
    $lang=ucfirst($a['langu']);
    $publication=ucfirst($a['publication']);
}
if(isset($_POST['update']))
{
	    $address=ucfirst($_POST['address']);
        $project=ucfirst($_POST['project']);
        $miniproject=ucfirst($_POST['miniproject']);
        $certification=ucfirst($_POST['certification']);
        $publication=ucfirst($_POST['publication']);
        $sy1=$_POST['sy1'];
        $py1=$_POST['py1'];
        $Hname=ucfirst($_POST['Hname']);
        $py2=$_POST['py2'];
        $sname=ucfirst($_POST['sname']);
        $py3=$_POST['py3'];
        $langu=ucfirst($_POST['langu']);
        $obj=ucfirst($_POST['obj']);
        $sql=mysql_query("select * from resume where reg_id='$reg_id'");
	    $count=mysql_num_rows($sql);
	    if($count==1)
        {
        mysql_query("update resume set address='$address',project='$project',miniproject='$miniproject',certification='$certification',sy1='$sy1',py1='$py1',Hname='$Hname',py2='$py2',sname='$sname',py3='$py3',langu='$langu',obj='$obj',publication='$publication' where reg_id='$reg_id' ");
            mysql_error();
        }
    else
    {
        mysql_query("insert into resume set address='$address',project='$project',miniproject='$miniproject',certification='$certification',sy1='$sy1',py1='$py1',Hname='$Hname',py2='$py2',sname='$sname',py3='$py3',langu=$langu,obj='$obj',publication='$publication' reg_id='$reg_id'");
        mysql_error();
    }
    header('location:selector.php');

}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sakec Placement| Personal details</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href=" bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href=" css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href=" plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Notice</h4>
      </div>
      <div class="modal-body">
        Kindly fill all your details properly.Your SSC, HSC and Degree details cannot be updated later.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="register-box" style='width: 825px;'>
  <div class="register-logo">
    <a href="index.php"><b></b>Placement</a>
  </div>

  <div class="register-box-body" style='width: 825px;'>
      <h3><p class="login-box-msg">Fill in your Resume details</p></h3>
<form class="form-horizontal" method="post" action="" >
              <div class="box-body">
              	<div class="col-md-12">
                <div class="form-group">
                   <legend>SSC</legend>
                    <div class="form-group"><label for="inputEmail3" class="col-sm-4 control-label">School Name</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" name="sname" value="<?php echo $sname1 ?>" required>
                  </div>
                 </div>
                     <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Passing year</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" name="py3" value="<?php echo $py31 ?>" required>
                  </div>
                 </div>

                <legend>HSC/Diploma</legend>
                <div class="form-group"><label for="inputEmail3" class="col-sm-4 control-label">College Name</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="Hname" value="<?php echo $Hname1 ?>" required>
                  </div>
                 </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Passing year</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="py2" value="<?php echo $py21 ?>" required>
                  </div>
                 </div>
                    <legend>Degree</legend><label for="inputEmail3" class="col-sm-4 control-label">College Name</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" name="dname" value="SHAH AND ANCHOR KUTCHHI ENGINEERING COLLEGE"readonly>
                  </div>
                 </div>
                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Starting year</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="sy1" value="<?php echo $sy11 ?>" required>
                  </div>
                 </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Passing year</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="py1" value="<?php echo $py11 ?>" required>
                  </div>
                 </div>




                 <legend>Project Details</legend>
                    <div class="form-group"><label for="inputEmail3" class="col-sm-4 control-label">Career Objective</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" name="obj" value="<?php echo $obj1 ?>" >
                  </div>
                        </div>

				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Project Details(Final year)</label>
                  <div class="col-sm-8">
                      <textarea rows='3' class="form-control" name="project" ><?php echo $project1 ?> </textarea>
                  </div>
                 </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Any other Projects</label>
                  <div class="col-sm-8">
                      <textarea rows='3' class="form-control" id="inputEmail3" name="miniproject" ><?php echo $miniproject1 ?></textarea>
                  </div>
                </div>
                     <legend>Personal Details</legend>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Permanent Address</label>
                  <div class="col-sm-8">
                      <textarea rows='3' class="form-control" id="inputEmail3" name="address"><?php echo $address1 ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Technical Skills</label>
                  <div class="col-sm-8">
                      <textarea rows='3' class="form-control" id="inputEmail3" name="langu"><?php echo $lang ?></textarea>
                  </div>
                </div>
                    <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Publications</label>
                  <div class="col-sm-8">
                      <textarea rows='3' class="form-control" id="inputEmail3" name="langu"><?php echo $publication ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Certifications if any</label>
                  <div class="col-sm-8">
                      <textarea rows='3' class="form-control" id="inputEmail3" name="certification"><?php echo $certification1 ?></textarea>
                  </div>
                </div>

              	<div class="box-footer">
                <input type="submit" class="btn btn-info pull-right" name="update" id="update" value="Next">
              </div>
                </div>
                </div>

              </div>

              <!-- /.box-body -->

              <!-- /.box-footer -->
            </form>

         </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.1.4 -->
<script src=" plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src=" bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src=" plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
    <script>
$(document).ready(function(){
	 $('#myModal').modal({
    show: true,
   })
	$('.messagec').click(function(){
		var id=$(this).attr('id');
		var dis=$('#m'+id).css('display');
		if(dis=="block")
		{
			$('#m'+id).slideUp("fast");
		}
		else{
		$('.mcontent').slideUp("fast");
		$('#m'+id).slideDown();
		}
	});
})
</script>
</body>
</html>
