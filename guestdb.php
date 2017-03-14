<?php
include'config.php';

if(isset($_POST['register']))
   {
        $gname=$_POST['gname'];
        $gemail=$_POST['gemail'];
        $cname=$_POST['cname'];


      //   $sql=mysql_query("select * from guest where g_id='$g_id'");
	    // $count=mysql_num_rows($sql);
	    // if($count==0)
        // {
        mysql_query("insert into guest set gname='$gname',gemail='$gemail',cname='$cname'") or die(mysql_error());


      // }
    header('location:guest.php');
   }

?>
