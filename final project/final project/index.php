<?php
	include "$_SERVER[DOCUMENT_ROOT]/web2019/header.php"	
?>

<!DOCTYPE html>
<html>


<head>
	<title>
		main page
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

	<h1>NEWEST PRODUCT</h1>
	<H5>sorted by latest posted items first</H5>

<?php  
	include "$_SERVER[DOCUMENT_ROOT]/web2019/new_product.inc.php"	
?>

		<br>
		<br>

	<!--

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
	-->

</body>
</html>