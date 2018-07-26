
<table border="2px;" cellpadding="2px;" cellspacing="2px;">
	<tr>
		<th>Id</th>
	<th>Name</th>
	<th>Age</th>
	<th>Height</th>	
	
	<th>Delete</th>
	<th>Edit</th>
  </tr>
<?php
include ("db.php");
   $que="SELECT * FROM valid ORDER by age Desc";
        $run=mysql_query($que) or die(mysql_error());
       
        while($row=mysql_fetch_array($run)){
        $id=$row['id'];
        $name=$row['name'];
        $age=$row['age'];
        
        $height=$row['height'];

        
        
        ?>

                <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        
        <td><?php echo $age; ?></td>
        <td><?php echo $height; ?></td>  
        <td> <a href='delete.php?id=<?php echo $id; ?>'>Delet</td>
        	 <td> <a href='update.php?id=<?php echo $id; ?>'>Update Details</td>
         <?php } ?>


</table>