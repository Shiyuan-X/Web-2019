<?php
	include "$_SERVER[DOCUMENT_ROOT]/web2019/header.php"	
?>

	<h1 style="color: black" align="center">
		REGISTER NEW ACCOUNT
	</h1>
	
	<form 	class="signup_form" 
			action="signup.inc.php" 
			method="POST" 
			style="text-align: center;">
		
		<br>
		<br>
		
		<input 	type="text" 
				name="key" 
				placeholder="insert first name here" 
				style="height: 100px; width: 600px; font-size: 40pt;">
			<br>
		
		<input 	type="text" 
				name="lname" 
				placeholder="insert last name here" 
				style="	height: 100px; 
						width: 600px; 
						font-size: 40pt;">
			<br>
		
		<input 	type="text" 
				name="uname" 
				placeholder="insert user name here" 
				style="height: 100px; width: 600px; font-size: 40pt;">
			<br>
		
		<input 	type="password" 
				name="password" 
				placeholder="insert password here" 
				style="	height: 100px; 
						width: 600px; 
						font-size: 40pt;">
			<br>

		<input 	type="text" 
				name="email" 
				placeholder="insert email here" 
				style="	height: 100px; 
						width: 600px; 
						font-size: 40pt;">
			<br>

		<input 	type="text" 
				name="address" 
				placeholder="insert your address here" 
				style="	height: 100px; 
						width: 600px; 
						font-size: 40pt;">
			<br>

		<button type="submit" 
				name="submit" 
				style="	height: 50px; 
						width: 200px;">
			
			<b>Sign up</b>	
		</button>


		<a id="back_to_login"
				style="	display: inline-block;
						color: white;
						background-color: green;
						margin-top: 10px;
						margin-right: none;
						border-right: 0px;
						padding: 10px;
						font-size: 30px;"
				href = "../../web2019/index.php">
			BACK TO LOGIN
		</a>

	</form>