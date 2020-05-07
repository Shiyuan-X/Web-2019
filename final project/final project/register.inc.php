<?php
	include "$_SERVER[DOCUMENT_ROOT]/web2019/header.php"	
?>

<?php

session_start();

	if (isset($_POST['register']))
	{

		include "$_SERVER[DOCUMENT_ROOT]/web2019/dbh.inc.php";

		$uname = mysqli_real_escape_string($conn, $_POST["user_name"]);

		$pw = mysqli_real_escape_string($conn, $_POST["password"]);

		$fname = mysqli_real_escape_string($conn, $_POST["first_name"]);

		$lname = mysqli_real_escape_string($conn, $_POST["last_name"]);

		$email = mysqli_real_escape_string($conn, $_POST["email"]);

		$address = mysqli_real_escape_string($conn, $_POST["address"]);

		$sql = "   	INSERT INTO 
					account (
						uname,
						pw, 
						fname,
						lname,
						email,
						address )
					VALUES (
						'$uname',
						'$pw', 
						'$fname',
						'$lname',
						'$email',
						'$address');			";

		mysqli_query($conn, $sql);

		header(	"Location: ../web2019/register.php?add_1account=success".
				"?user_name=$uname".
				"?password=$pw".
				"?first_name=$fname".
				"?last_name=$lname".
				"?email=$email".
				"?address=$address");

		
mysqli_close($conn);
		exit();

	}
	else
	{
		header("Location: ../web2019/register.php?registration_was_unsuccessful");
mysqli_close($conn);
		exit();
	}

?>