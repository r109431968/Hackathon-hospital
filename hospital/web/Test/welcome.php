<?php 
session_start();
if ($_SESSION["name"]==true){
	echo $_SESSION["name"];
}
else
{
	echo header('location:index.php');
}




?>
<a href="logout.php">Logout</a>