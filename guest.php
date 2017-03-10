

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sakec placement | Guest Registration Page</title>
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
    
     <script language="javascript" type="text/javascript">
function checkform(form)
{
	
    apos=form.gemail.value.indexOf("@");
    dotpos=form.gemail.vale.lastindexof(".");
    if(apos<1 || dotpos-apos<2)
    {
        alert("wrong email id")
        form.gemail.focus();
        return false;
    }
}
</script>
    
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index.php"><b>SAKEC</b> Placement</a>
      <br>Guest Registration
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="guestdb.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Full name" name="gname" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="gemail" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Company name" name="cname" required>
        <span class="glyphicon glyphicon-briefcase form-control-feedback"></span>
      </div>
      
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="register">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
   <div class="modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Message</h4>
              </div>
              <div class="modal-body">
                <p>  Your Company has been Registered Successfully</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-right" id="close" data-dismiss="modal">Close</button>
                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>   

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
     $("#register").click(function(){
        $(".modal").modal('show');
     });
}) 
</script>
</body>
</html>
