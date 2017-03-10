<?php
include'config.php';
require_once'session_guest.php';
$reg_id=$_SESSION['guest_user'];
$out='';
$i=1;
$start=$_GET['start'];
$end=$_GET['end'];
?>
 <table  class="table table-bordered table-striped">
      <thead>
           <tr>
             <th>Sr no.</th>
             <th>name</th>
             <th>degree pointer</th>
       </thead>
 </tr>
<?php
$sql=mysql_query("select * from hscmark where degreepointer between ".$start." and ".$end." ");
$count=mysql_num_rows($sql);
if($count>1){
	while ($x=mysql_fetch_array($sql)) {
		$reg_id=$x['reg_id'];
		$l=mysql_fetch_array(mysql_query("select * from student_details where reg_id='$reg_id'"));
?>
<tr>
	<td><?php echo $i ?></td>
	<td><?php echo $l['stname'] ?></td>
	<td><?php echo $x['degreepointer'] ?></td>
</tr>
<?php		
$i++;
	}
}


$sql=mysql_query("select * from dipmarks where degreepointer between ".$start." and ".$end." ");
$count=mysql_num_rows($sql);
if($count>1){
	while ($x=mysql_fetch_array($sql)) {
		$reg_id=$x['reg_id'];
		$l=mysql_fetch_array(mysql_query("select * from student_details where reg_id='$reg_id'"));
?>
<tr>
	<td><?php echo $i ?></td>
	<td><?php echo $l['stname'] ?></td>
	<td><?php echo $x['degreepointer'] ?></td>
</tr>
<?php		
$i++;
	}
}

?>
</table>

<?php


?>