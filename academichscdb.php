<?php
 include'config.php';
require_once'session.php';


if(isset($_POST['submit']))
   {
$reg_id=$_SESSION['login_user'];       
    
        $sscmarks=$_POST['sscmarks'];
        $sscoutoff=$_POST['sscoutoff'];
        $sscpercentage=(($sscmarks)/($sscoutoff)*100);   
    $sscpercentage=sprintf('%0.2f', $sscpercentage);
        $hscmarks=$_POST['hscmarks'];
        $hscoutoff=$_POST['hscoutoff'];
        $hscpercentage=(($hscmarks)/($hscoutoff)*100);
    $hscpercentage=sprintf('%0.2f', $hscpercentage);
        $sem1marks=$_POST['sem1marks'];
        $sem1outoff=$_POST['sem1outoff'];
        $sem2marks=$_POST['sem2marks'];
        $sem2outoff=$_POST['sem2outoff'];
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
        $py1=$_POST['py1'];
        $py2=$_POST['py2'];
        $py3=$_POST['py3'];
        $sy=$_POST['sy'];
    $totalmarks=(($sem1marks)+($sem2marks)+($sem3marks)+($sem4marks)+($sem5marks)+($sem6marks)+($sem7marks)+($sem8marks));
    $totaloutoff=(($sem1outoff)+($sem2outoff)+($sem3outoff)+($sem4outoff)+($sem5outoff)+($sem6outoff)+($sem7outoff)+($sem8outoff));
    $degreepointer=(($totalmarks)/($totaloutoff));
     $degreepointer=sprintf('%0.2f', $degreepointer);
    echo $degreepointer;
        $livekt=$_POST['livekt'];
        $deadkt=$_POST['deadkt'];
        $attempts=$_POST['attempts'];
        $drops=(($py3-$sy)-4);
    
        $sql=mysql_query("select * from hscmark where reg_id='$reg_id'");
	    $count=mysql_num_rows($sql);
	    if($count==0)
        {
        mysql_query("insert into hscmark set sscmarks='$sscmarks',sscoutoff='$sscoutoff',sscpercentage='$sscpercentage',hscmarks='$hscmarks',hscoutoff='$hscoutoff',hscpercentage='$hscpercentage',sem1marks='$sem1marks',sem1outoff='$sem1outoff',sem2marks='$sem2marks',sem2outoff='$sem2outoff',sem3marks='$sem3marks',sem3outoff='$sem3outoff',sem4marks='$sem4marks',sem4outoff='$sem4outoff',sem5marks='$sem5marks',sem5outoff='$sem5outoff',sem6marks='$sem6marks',sem6outoff='$sem6outoff',sem7marks='$sem7marks',sem7outoff='$sem7outoff',sem8marks='$sem8marks',sem8outoff='$sem8outoff',py1='$py1',py2='$py2',py3='$py3',sy='$sy',livekt='$livekt',deadkt='$deadkt',attempts='$attempts',drops='$drops',totalmarks='$totalmarks',totaloutoff='$totaloutoff',degreepointer='$degreepointer',reg_id='$reg_id'");
      
            mysql_error();
           
          
       }
    header('location:welcome.php');   
   }

?>
