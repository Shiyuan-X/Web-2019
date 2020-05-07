<?php

	if (isset($_GET['buy']))
	{
		include "$_SERVER[DOCUMENT_ROOT]/web2019/dbh.inc.php";

		$id=mysqli_real_escape_string($conn, $_GET["index"]);

		$quantity = mysqli_real_escape_string($conn, $_GET["quantity"]);

		$message = mysqli_real_escape_string($conn, $_GET["message"]);

		$buyer = mysqli_real_escape_string($conn, $_GET["buyername"]);


		$sql = "   
					INSERT INTO list 
						(
							buyer,
							product_pid,
							quantity, 
							kartororder, 
							message
						)
					VALUES 
						(
							'buyer',
							'$id',
							'$quantity', 
							'kart', 
							'$message'
						);     
				";

		mysqli_query($conn, $sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit();

	}
	else
	{
		header("Location: ../index.php");
		exit();
	}


?>
