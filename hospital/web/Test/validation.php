

<?php 
include ("db.php");
if(isset($_POST['submit'])){
 $name1=$_POST['name'];
  $age1 = $_POST['age'];
  if ($age1>18) {
  $_POST['age']=$age1;
  	# code...
  }
  else
  {
  	echo "False Age";
  }

   $height1=$_POST['height'];
   if ($height1>100) {
   	echo "True";
   	# code...
   }
else
{
	echo "False Height";
}



 $quer="insert into valid(name,age,height)values('$name1','$age1','$height1')";


if (mysql_query($quer)) {

echo "<script>alert('Insert Sucess')</script>";	# code...
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Validtion</title>
</head>
<body>
	<form method="post">
	User Name <input type="text" name="name" >
	 age<input type="text" name="age" required="" value="">
	
	User height <input type="text" name="height" required="">
	<input type="submit" name="submit">
</form>



</body>
</html>