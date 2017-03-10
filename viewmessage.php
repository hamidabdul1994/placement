<?php
include'config.php';
require_once'session.php';
$reg_id=$_SESSION['login_user'];
$mail_id=$_GET['id'];
$sql=mysql_query("select * from message where mail_id='$mail_id'");
$x=mysql_fetch_array($sql);
$cout='';
$company=$x['company_id'];
if($company!="" || $company!=null){
	$cout='<a href="registerc.php?id='.$mail_id.'" target="_blank"><b><u>Click here</b></u></a> to register.';
}
else {
	$cout='';
}
?>
<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $x['subject'] ?></h4>
      </div>
      <div class="modal-body">
        <p><?php echo $x['message'] ?></p>
        <?php echo $cout ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>