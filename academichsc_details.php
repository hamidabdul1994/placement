<?php
include'config.php';
require_once'session.php';
$reg_id=$_SESSION['login_user'];
$sql=mysql_query("select * from user where reg_id='$reg_id'");
while($x=mysql_fetch_array($sql)){
    $name=$x['uname'];
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sakec Placement| Academic details</title>
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
        Kindly fill all your details properly. HSC and SSC details once filled cannot be updated.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    
    
<div class="register-box" style='width: 825px;'>
  <div class="register-logo">
    <a href="index.php"><b>SAKEC</b>Placement</a>
  </div>

  <div class="register-box-body" >
    <h3><p class="login-box-msg">Fill in your Academic details</p></h3>
<form action="academichscdb.php" method="post">
   <div class="box-header with-border">
              <h1 class="box-title">SSC</h1>
            </div>
    
              <div class="box-body">
              	<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Marks obtained</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="marks obtained" name="sscmarks" required>
                     </div>
                 </div>
                </div>          
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Out off marks</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Out off" name="sscoutoff" required>
                        </div>
                    </div>    
                </div>
                  <div class="col-md-6">
                        <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Passing year</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="py1" required>
                            </div>
                        </div>  
                  </div>
                
           </div>
      <div class="box-header with-border">
              <h1 class="box-title">HSC</h1>
            </div>
                    <div class="box-body">
              	<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Marks obtained</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="marks obtained" name="hscmarks" required>
                     </div>
                 </div>
                </div>          
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Out off marks</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="Out off" name="hscoutoff" required>
                        </div>
                    </div>    
                </div>
                        <div class="col-md-6">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Passing year</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" name="py2"  required>
                  </div>
                 </div>  
                        </div>
              </div>
            
<div class="box-header with-border">
              <h1 class="box-title">DEGREE</h1>
            </div>
              <div class="box-body">
              	<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">SEM1</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="C*G" name="sem1marks" required>
                     </div>
                 </div>
                </div>          
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="C" name="sem1outoff" required>
                        </div>
                    </div>    
                </div>
                 <div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">SEM2</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="C*G" name="sem2marks" required>
                     </div>
                 </div>
                </div>          
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="C" name="sem2outoff" required>
                        </div>
                    </div>    
                </div>
<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">SEM3</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="C*G" name="sem3marks" required>
                     </div>
                 </div>
                </div>          
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="C" name="sem3outoff" required>
                        </div>
                    </div>    
                </div>
<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">SEM4</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="C*G" name="sem4marks" required>
                     </div>
                 </div>
                </div>          
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="C" name="sem4outoff" required>
                        </div>
                    </div>    
                </div>
<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">SEM5</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="C*G" name="sem5marks" >
                     </div>
                 </div>
                </div>          
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="C" name="sem5outoff" >
                        </div>
                    </div>    
                </div>
<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">SEM6</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="C*G" name="sem6marks" >
                     </div>
                 </div>
                </div>          
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="C" name="sem6outoff" >
                        </div>
                    </div>    
                </div>
<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">SEM7</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="C*G" name="sem7marks" >
                     </div>
                 </div>
                </div>          
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="C" name="sem7outoff" >
                        </div>
                    </div>    
                </div>
<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">SEM8</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="C*G" name="sem8marks" >
                     </div>
                 </div>
                </div>          
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  placeholder="C" name="sem8outoff" >
                        </div>
                    </div>    
                </div>
                  <div class="col-md-6">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Starting year</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" name="sy"  required>
                  </div>
                 </div> 
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Passing year</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" name="py3"  required>
                  </div>
                 </div> 
                  </div>
    </div>
       
              <div class="box-body">
              	<div class="col-md-6">
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Live KT</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" name="livekt" required>
                     
                     <div class="col-sm-5 no-padding tools" ><a href="#" data-toggle="tooltip" title="Subjects you have not cleared.If result pending then also it is live kt. Each subject 1 only.">?</a></div>
                 </div></div>
                    </div>
    </div><div class="box-body">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-4 control-label">Dead KT</label>
                          <div class="col-sm-8">
                              <input type="text" class="form-control" name="deadkt" required>
                              <div class="col-sm-5 no-padding tools" ><a href="#" data-toggle="tooltip" title="Subjects you have cleared in past after getting kt. Each subject 1 only. ">?</a></div>
                          </div>
                        </div>
                </div> 
    </div><div class="box-body">
                  
                  <div class="col-md-6">
                      <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">No. of Attempts</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" name="attempts" required>
                         <div class="col-sm-5 no-padding tools" ><a href="#" data-toggle="tooltip" title="Attempts you made to clear a subject. Each subject can have more than one attempts.">?</a></div>
                     </div>
                 </div>
                </div> 
                 <br>
    </div>
          <div>
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Submit</button>
        </div> 
      
    </form>


         </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

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
