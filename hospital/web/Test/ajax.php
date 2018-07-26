<?php

$id=$_GET['id'];

include("db.php");

$qry="select * from valid1 ";

$result=mysql_query($qry) or die(mysql_error());

while($row=mysql_fetch_array($result)){



$id=$row['id'];
$name=$row['name'];
$age=$row['age'];
$height=$row['height'];






echo $name ."|?|".$age."|?|".$height;

}

?>