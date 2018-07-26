              




							<!DOCTYPE html>
							<html>

							<head>
							<title>New Clinic a Medical Category Bootstrap Responsive Web Template | Appointment :: W3layouts </title>
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
							<!-- header -->
							


 <?php 
session_start();
if ($_SESSION["name"]==true){ ?>
	<center><h4 style="color: red; padding-top: 30px; padding-left: 1150px;"> <?php echo $_SESSION["name"];?> Online</h4></center>  
	
	<?php

}
else
{
	echo header('location:index.php');
}




?>
		
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="">
             
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Id</th>
	<th>Name</th>
	<th>Gender</th>
	<th>Mobile_Number</th>
	<th>Date of Birth</th>
	<th>Address</th>


	
	<th>Email</th>
  <th>DepartMent</th>
	<th>Heart</th>
	<th>Hearing</th>
	<th>Blood </th>
	<th>Normal </th>
	<th>Skin Check up</th>
	
	<th>Delete</th>
      </tr>
    </thead>

		<center><h4>Appointment List Patient</h4></center>



 
	
  </tr>
<?php
 
                 error_reporting(0);
                 mysql_connect("localhost","root","");
                   mysql_select_db("admin");

   $que="SELECT * FROM appointment ORDER by id Desc";
        $run=mysql_query($que) or die(mysql_error());
       
        while($row=mysql_fetch_array($run)){
        $id=$row['id'];
        $patient_name=$row['patient_name'];
        $gender=$row['gender'];
        
        $mobile_number=$row['mobile_number'];
        $dob=$row['dob'];
        $address=$row['address'];
        $email=$row['email'];
        $dept=$row['dept'];
        $heart=$row['heart'];
        $hearing=$row['hearing'];
        $blood_test=$row['blood_test'];
        $normal=$row['normal'];
        $skin_care=$row['skin_care'];

        
        
        ?>

                <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $patient_name; ?></td>
        
        <td><?php echo $gender; ?></td>
        <td><?php echo $mobile_number; ?></td> 
       <td><?php echo $dob; ?></td>
        <td><?php echo $address; ?></td>
        
        <td><?php echo $email; ?></td>
        <td><?php echo $dept; ?></td>
        <td><?php echo $heart; ?></td>  
        <td><?php echo $hearing; ?></td>
        
        <td><?php echo $blood_test; ?></td>
        <td><?php echo $normal; ?></td>  
           <td><?php echo $skin_care; ?></td>  


  

        <td> <a href='delete.php?id=<?php echo $id; ?>'>Delet</td>
        	 
         <?php } ?>


</table>


                          
</body>
</html>






							