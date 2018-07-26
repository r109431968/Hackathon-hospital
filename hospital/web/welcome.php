<?php 
session_start();
if ($_SESSION["name"]==true){ ?>
	<h4> <?php echo $_SESSION["name"];?> </h4>
	
	<?php

}
else
{
	echo header('location:index.php');
}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello This Is Admin Page</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


</head>

<style>
body{
background-image: url("images/images.png");
     height: 100%; 

    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	
}</style>
<body>
	 

 <h4>Admin IS Now Login   <a href="logout.php">Logout</a></h4>

 <div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-4 col-xs-6"><a href="information.php"> <img class="img-responsive" src="user.png" />
			<a href="information.php"><button type="button" class="btn btn-primary">Petient_List</button></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><a href="doc.php"><img class="img-responsive" src="images/doc.png" />
        	<a href="usernew.php"><button type="button" class="btn btn-success">Doctor List</button></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><a href="usernew.php"><img class="img-responsive" src="images/icon2.png" >
        	<a href="avil.php"><button type="button" class="btn btn-warning">Docotr Avilabity</button>        </div>
        <div class="col-md-3 col-sm-4 col-xs-6"><a href="ambu_list.php"><img class="img-responsive" src="images/ambu.png" />
        	<a href="ambu_list.php"><button type="button" class="btn btn-danger">Ambulence</button></div>
    	
    </div>
</div>

