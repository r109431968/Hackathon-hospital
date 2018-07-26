<?php
  error_reporting(0);
                 mysql_connect("localhost","root","");
                   mysql_select_db("admin");

$delete=$_GET['id'];
$query="DELETE FROM `doctor` WHERE id=$delete";
if (mysql_query($query)) {
	echo "<script>window.open('usernew.php','_self')</script>";
	# code...
}
 ?>