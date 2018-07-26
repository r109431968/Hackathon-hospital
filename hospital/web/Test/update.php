<?php
include 'db.php';
$edit_record=$_GET['id'];
$que="select * from valid where id='$edit_record'";
$run=mysql_query($que);

while($row=mysql_fetch_array($run)){
    
	$name = $row['name'];
	$age = $row['age'];
	$height = $row['height'];
}
?>

<form method="post">
	User Name <input type="text" name="name"  value="<?php echo "$name";?>">
	 age<input type="text" name="age" required="" value="<?php echo "$age";?>">
	
	User height <input type="text" name="height" required="" value="<?php echo "$height";?>">
	<input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$age=$_POST['age'];
	$height=$_POST['height'];

$quer="update valid set name='$name',age='$age',height='$height' where id='$edit_record'";


if(mysql_query($quer)){
		
		echo "<script>alert('Successfully Complete');</script>";
		echo "<script>window.open('view.php','_self')</script>";
	}
	

}
?>


