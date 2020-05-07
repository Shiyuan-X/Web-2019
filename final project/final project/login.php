<?php
	include "$_SERVER[DOCUMENT_ROOT]/web2019/header.php";	
?>

<!DOCTYPE html>
<html>


<head>
	<title>
		login
	</title>

	
</head>

<body>
	<style type="text/css">
		.body
		{
			font-size: 25px;
			background-color: black;
		}
	</style>

	<h1>login page</h1>

	<form 	name="login"
			action="/web2019/login.inc.php"
			method="post">

		<style type="text/css">
			#login
			{
				margin: auto;
				padding: 0px;
				border: 0px;
			}
		</style>

		insert User name:
		<br>
		<input name="username"></input>

		<br><br>

		insert pasword:
		<br>
		<input name="password"></input>

		<br><br>

		<button 	name="login"
					type="submit"
					style="	display: inline-block;
						color: white;
						background-color: green;
						margin-right: none;
						border-right: 0px;
						padding: 10px;
						font-size: 30px;";
						 >
			I have an account
			<br>
			log me in
		</button>

	</form>

		<br>
		<br>

		<a id="register"
				style="	display: inline-block;
						color: white;
						background-color: green;
						margin-right: none;
						border-right: 0px;
						padding: 10px;
						font-size: 30px;"
				href = "../../web2019/register.php">
			SIGN UP
			<br>
			NEW ACCOUNT
		</a>


</body>
</html>