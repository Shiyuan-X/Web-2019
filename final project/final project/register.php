<?php
	include "$_SERVER[DOCUMENT_ROOT]/web2019/header.php"	
?>

<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>
		register
	</title>
</head>
<body>
	
	<form 	name="register"
			action="/web2019/register.inc.php"
			method="post">
		
		<style type="text/css">
			#login
			{
				margin: auto;
				padding: 0px;
				border: 0px;
			}
		</style>

		<h1>REGISTER NEW ACCOUNT</h1>

		insert first name:
		<br>
		<input name="first_name"></textarea>

		<br><br>

		insert last name:
		<br>
		<input name="last_name"></textarea>

		<br><br>

		insert user name:
		<br>
		<input name="user_name"></textarea>

		<br><br>

		insert password:
		<br>
		<input name="password"></textarea>

		<br><br>

		insert email:
		<br>
		<input name="email"></textarea>

		<br><br>

		insert address:
		<br>
		<input name="address"></textarea>

		<br><br>

		<button name="register"
				style="	display: inline-block;
						color: white;
						background-color: green;
						margin-right: none;
						border-right: 0px;
						padding: 10px;
						font-size: 30px;"
				type="SUBMIT">
			SUBMIT
		</button>

	</form>

		<BR><BR>

		<a id="back_to_index"
				style="	display: inline-block;
						color: white;
						background-color: green;
						margin-right: none;
						border-right: 0px;
						padding: 10px;
						font-size: 30px;"
				href = "/web2019/login.php">
			BACK TO LOGIN
		</a>

		

</body>
</html>