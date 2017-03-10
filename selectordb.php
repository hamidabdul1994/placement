<?php 
include'config.php';
require_once'session.php';
$reg_id=$_SESSION['login_user'];


if(isset($_POST['submit']))
   {
    require_once'session.php';
$reg_id=$_SESSION['login_user'];

        $type=$_POST['selector'];
        
        mysql_query("update student_details set type='$type' where reg_id='$reg_id'");
    
      $sql=mysql_query("select * from student_details where reg_id='$reg_id'");
      $count=mysql_num_rows($sql);
     
    if($count==1)
    {
        if($type=='hsc')
           {
            
            header('location:academichsc_details.php');
           }
           if($type=='diploma')
           {
            
            header('location:academicdip_details.php');
           }
    
        
   }

}
?>
