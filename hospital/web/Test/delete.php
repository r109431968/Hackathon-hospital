<?php
include 'db.php';
$delete=$_GET['id'];
$query="DELETE FROM `valid` WHERE id=$delete";
if (mysql_query($query)) {
	echo "<script>window.open('view.php','_self')</script>";
	# code...
}
 ?>