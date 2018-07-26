		<?php
		session_start();

		mysql_connect("localhost","root","");
		mysql_select_db("admin");

		if (isset($_REQUEST["submit"])) {
		$name=$_REQUEST["name"];
		$pass=$_REQUEST["pass"];
		 echo $query=mysql_query("select * from user where name='$name' && pass='$pass'");
		$rowcount=mysql_num_rows($query);
		echo $rowcount;
		if ($rowcount==1) {

		$_SESSION["name"]=$name;
		header('location:welcome.php');

		
		}
		else{
		echo "Not Correct";
		# code...
		}
		}
		?>



		<form method="post">
		<input type="text "name="name" placeholder="enter name">
		<input type="password" name="pass" placeholder="enter password">
		<input type="submit" name="submit">


		</form>