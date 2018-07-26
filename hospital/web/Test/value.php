<?php
		mysql_connect("localhost","root","");
		mysql_select_db("admin");

		if (isset($_REQUEST["submit"])) {
 $name1=$_POST['patient_name'];
  $age1 = $_POST['mobile_number'];
 



 $quer="insert into valid11 (patient_name,mobile_number)values('$name1','$age1')";


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

	 name<input type="text" name="patient_name"  value="">
	 age<input type="text" name="mobile_number"   value="">
	
	<input type="submit" name="submit">
</form>



</body>
</html>


