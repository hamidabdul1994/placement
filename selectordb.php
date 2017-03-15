<?php
include'config.php';
require_once'session.php';
$u_id=$_SESSION['login_user'];


if(isset($_POST['submit']))
   {
    require_once'session.php';
$u_id=$_SESSION['login_user'];

        $type=$_POST['selector'];

        mysql_query("update student_details set type='$type' where u_id='$u_id'");

      $sql=mysql_query("select * from student_details where u_id='$u_id'");
      $count=mysql_num_rows($sql);

    if($count==1)
    {
        if($type=='hsc')
           {

            header('location:academichsc_details.php');
          }else
           if($type=='diploma')
           {

            header('location:academicdip_details.php');
          }else {
            header('location:index.php?error');          
        }
   }

}
?>
