    <?php 
               
     mysql_connect("localhost","root","");
     mysql_select_db("admin");






$edit_record=$_GET['id'];
$que="select * from ambu where id='$edit_record'";
$run=mysql_query($que);

while($row=mysql_fetch_array($run)){
    
	$ambu = $row['ambu'];
	$ola = $row['ola'];
	

}
?>
<!DOCTYPE html>
							<html>

							<head>
							<title>Doctor Update_Details</title>
							<!--/tags -->
							<meta name="viewport" content="width=device-width, initial-scale=1">
							<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
							<meta name="keywords" content="New Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
							Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
				
							<!--//tags -->
							<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
							<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
							<link href="css/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
							<link href="css/font-awesome.css" rel="stylesheet">
							<!-- //for bootstrap working -->
							
							</head>

							<body>




 <div class="container">
 <!---heading---->
     <header class="heading">Update Docotor  Details</header><hr></hr>
	<!---Form starting----> 
	<div class="row ">

<form action="" method="post">
		 
         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">Amubulence  Avilable OR not :</label></div>






				<div class ="col-xs-8">	 
		             <input type="text" name="ambu" value="<?php echo "$ambu";?>"  placeholder="Enter your Last Name" class="form-control last">
                </div>
		     </div>
		 </div>

		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">OLA CAB IS Or Not Avilable :</label></div>






				<div class ="col-xs-8">	 
		             <input type="text" name="ola" value="<?php echo "$ola";?>"  placeholder="Enter your Last Name" class="form-control last">
                </div>
		     </div>
		 </div>



		 <input type="submit" name="submit">
		</form>
		<?php
if(isset($_POST['submit'])){

	$ambu=$_POST['ambu'];
    $ola=$_POST['ola'];
           


              
$quer="update ambu set ambu='$ambu',ola='$ola' where id='$edit_record'";


if(mysql_query($quer)){
		
		echo "<script>alert('Successfully Complete');</script>";
		echo "<script>window.open('ambu_list.php','_self')</script>";
	}
	

}
?>

