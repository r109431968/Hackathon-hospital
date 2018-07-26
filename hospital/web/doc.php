        <?php 
               
                 mysql_connect("localhost","root","");
                   mysql_select_db("admin");





		if (isset($_REQUEST["submit"])) {
        
     $name=$_POST['name'];
     $dob=$_POST['dob'];
      $dept=$_POST['dept'];
       $adress=$_POST['adress'];
        $phone=$_POST['phone'];
         $email=$_POST['email'];
          $pass=$_POST['pass'];
           
           


               $query="insert into doctor(name,dob,dept,adress,phone,email,pass) value('$name','$dob','$dept','$adress','$phone','$email','$pass')";  
              if (mysql_query($query)) {
              	echo "<script>alert('Docotr File is submit')</script>";
              	echo "<script>window.open('usernew.php','_self')</script>";
              	
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




 <div class="container">
 <!---heading---->
     <header class="heading">Doctor Details</header><hr></hr>
	<!---Form starting----> 
	<div class="row ">
	 <!--- For Name---->
         
		 <form action="" method="post">
		 
         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">Full Name :</label></div>






				<div class ="col-xs-8">	 
		             <input type="text" name="name"  placeholder="Enter your Last Name" class="form-control last">
                </div>
		     </div>
		 </div>


<div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">Date of Birth :</label></div>
				<div class ="col-xs-8">	 
		             <input type="date" name="dob"  placeholder="Enter your Last Name" class="form-control last">
                </div>
		     </div>

  
		  <div class="col-xs-4 ">
			       <label class="gender">Department:</label></div>
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
                     <label class="lastname"> Adresss:</label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="adress"  placeholder="Enter your Last Name" class="form-control last">
                </div>
		     </div>
</div>

			     <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">Moible Number :</label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="phone" placeholder="Enter your Last Name" class="form-control last">
                </div>
		     </div>
</div>


		 </div>
     <!-----For email---->
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Email :</label></div>
			     <div class="col-xs-8"	>	 
			          <input type="email" name="email" placeholder="Enter your email" class="form-control" >
		         </div>
		     </div>
		 </div>


		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Password :</label></div>
			     <div class="col-xs-8"	>	 
			          <input type="password" name="pass" required="" placeholder="Enter your email" class="form-control" >
		         </div>
		     </div>
		 </div>
		 <input type="submit" name="submit">
		</form>
		<a href="usernew.php">Doctor List</a></div></div></body></html>


