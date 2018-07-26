                 <?php 
                 error_reporting(0);
                 mysql_connect("localhost","root","");
                   mysql_select_db("admin");





		if (isset($_REQUEST["submit"])) {
        
     $patient_name=$_POST['patient_name'];
     $gender=$_POST['gender'];
      $mobile_number=$_POST['mobile_number'];
       $dob=$_POST['dob'];
        $address=$_POST['address'];
         $email=$_POST['email'];
         $dept=$_POST['dept'];
          $heart=$_POST['heart'];
           $eye=$_POST['eye'];
            $hearing=$_POST['hearing'];
             $blood_test=$_POST['blood_test'];
              $normal=$_POST['normal'];
               $skin_care=$_POST['skin_care'];	
               $query="insert into appointment(patient_name,gender,mobile_number,dob,address,email,dept,heart,eye,hearing,blood_test,normal,skin_care) value('$patient_name','$gender','$mobile_number','$dob','$address','$email','$dept','$heart','$eye','$hearing','$blood_test','$normal','$skin_care')";  
              if (mysql_query($query)) {
              	echo "<script>alert('User Registration File is submit')</script>";
              	
              	              }
                  }

                 ?>



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
							<?php include 'header.php';?>
							<!-- banner -->
		
	




 <div class="container">
 <!---heading---->
     <header class="heading">User Appointment</header><hr></hr>
	<!---Form starting----> 
	<div class="row ">
	 <!--- For Name---->
         
		 <form action="" method="post">
		 
         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">Full Name :</label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="patient_name" id="lname" placeholder="Enter your Full Name" class="form-control last">
                </div>
		     </div>
		 </div>
		  <div class="col-xs-4 ">
			       <label class="gender">Gender:</label>
				 </div>
			 
			     <div class="col-xs-4 male">	 
				     <input type="radio" name="gender"  required="" value="boy">Male</input>
				 </div>
				 
				 <div class="col-xs-4 female">
				     <input type="radio"  name="gender" required="" value="girl" >Female</input>
			     </div>

<div><br>
			     <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">Moible Number :</label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="mobile_number" required="" placeholder="Enter your mobile number" class="form-control last">
                </div>
		     </div>




		      <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">Date of Birth :</label></div>
				<div class ="col-xs-8">	 
		             <input type="date" name="dob" required="" placeholder="Enter your date of birth" class="form-control last">
                </div>
		     </div>



		     <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">User Address :</label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="address" required="" placeholder="Enter your Full address" class="form-control last">
                </div>
		     </div>


		 </div>
     <!-----For email---->
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Email :</label></div>
			     <div class="col-xs-8"	>	 
			          <input type="email" name="email" required="" placeholder="Enter your email" class="form-control" >
		         </div>
		     </div>
		 </div>


		  <div class="col-xs-4 ">
			       <label class="dept">Department:</label></div>
			       <div class ="col-xs-8">	 
			       <select name="dept">
			       	<option value="Eye_Department">Eye_Department</option>
                     <option value="Nurology_Department">Nurology_Department</option>
                      <option value="Brain_Treatmenet">Brain_Treatmenet</option>
                      <option value="Physician">Physician</option>
                       <option value="PULMONARY">PULMONARY</option>
                        <option value="DENTAL">DENTAL</option>
                      



			       </select>
				 </div>


		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Heart Checkup :</label></div>
			     <div class="col-xs-8"	>	 
			          <input type="checkbox" name="heart"  placeholder="Enter your email" class="form-control" >
		         </div>
		     </div>
		 </div>

		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Eye Checkup :</label></div>
			     <div class="col-xs-8"	>	 
			          <input type="checkbox" name="eye"   placeholder="Enter your email" class="form-control" >
		         </div>
		     </div>
		 </div>
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Hearing Checkup :</label></div>
			     <div class="col-xs-8"	>	 
			          <input type="checkbox" name="hearing"   placeholder="Enter your email" class="form-control" >
		         </div>
		     </div>
		 </div>


		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Blood Test :</label></div>
			     <div class="col-xs-8"	>	 
			          <input type="checkbox" name="blood_test"   placeholder="Enter your email" class="form-control" >
		         </div>
		     </div>
		 </div>
		  <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Normal Conuslting :</label></div>
			     <div class="col-xs-8"	>	 
			          <input type="checkbox" name="normal"   placeholder="Enter your email" class="form-control" >
		         </div>
		     </div>
		 </div>
		  <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Skin Care :</label></div>
			     <div class="col-xs-8"	>	 
			          <input type="checkbox" name="skin_care"  placeholder="Enter your email" class="form-control" >
		         </div>
		     </div>
		 </div>
	 <!-----For Password and confirm password---->
         
		  
     <!-----------For Phone number-------->
         <div class="col-sm-12">
		     <div class ="row">
                
			
		  	 </div>
		     <div class="col-sm-12">
		        <input type="submit" name="submit">
		   </div>
		 </div>
	 </div>	 
		 		 
		</form> 
</div>


</div>
<?php include 'footer.php';?>


</body>
</html>






							