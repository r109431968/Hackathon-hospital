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

<div class="container">
             
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Id</th>
	<th>Amubulence</th>
	 <th>OLA CAB Facility</th>
	 <th>Edit</th>
	
      </tr>
    </thead>

		<center><h4>Ambulence</h4></center>



 
	
  </tr>
<?php
 
                 error_reporting(0);
                 mysql_connect("localhost","root","");
                   mysql_select_db("admin");

   $que="SELECT * FROM ambu";
        $run=mysql_query($que) or die(mysql_error());
       
        while($row=mysql_fetch_array($run)){
        $id=$row['id'];
        $ambu=$row['ambu'];
         $ola=$row['ola'];
        
        
        ?>

                <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $ambu; ?></td>
         <td><?php echo $ola; ?></td>
        
       

  

       
        <td> <a href='ambu.php?id=<?php echo $id; ?>'>Edit_Details</td>	 
         <?php } ?>


</table>


                          
</body>
</html>