    <?php 
               
     mysql_connect("localhost","root","");
     mysql_select_db("admin");


$edit_record=$_GET['id'];
$que="select * from doctor where id='$edit_record'";
$run=mysql_query($que);

while($row=mysql_fetch_array($run)){
    
  $name = $row['name'];
  $dept=$row['dept'];
  $avilable=$row['avilable'];


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
                     <label class="lastname">Name:</label></div>
        <div class ="col-xs-8">  
                 <input type="text" name="name" value="<?php echo "$name";?>" placeholder="Enter your Last Name" class="form-control last">
                </div>
         </div>
</div>
         
          

 <div class="col-sm-12">
         <div class="row">
           <div class="col-xs-4">
                     <label class="lastname"> Avilable Of yes Or no:</label></div>
        <div class ="col-xs-8">  
                 <input type="text" name="avilable" value="<?php echo "$avilable";?>" placeholder="Enter your Last Name" class="form-control last">
                </div>
         </div>
</div>
<div class="col-sm-12">
         <div class="row">
           <div class="col-xs-4">
                     <label class="lastname"> DepartMent:</label></div>
        <div class ="col-xs-8">  
                 <input type="text" name="dept" value="<?php echo "$dept";?>" placeholder="Enter your Last Name" class="form-control last">
                </div>  
         </div>
</div>
<?php } ?>
     
     <input type="submit" name="submit">
    </form>
    <?php
if(isset($_POST['submit'])){

  $name=$_POST['name'];
     
      $dept=$_POST['dept'];
       $avilable=$_POST['avilable'];
        
           


              
$quer="update doctor set name='$name',avilable='$avilable' where id='$edit_record'";


if(mysql_query($quer)){
    
    echo "<script>alert('Successfully Complete');</script>";
    echo "<script>window.open('present.php','_self')</script>";
  }
  

}
?>

