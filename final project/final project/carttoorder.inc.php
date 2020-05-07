<?php  


if (isset($_POST['order']))
	{
		include "$_SERVER[DOCUMENT_ROOT]/web2019/dbh.inc.php";

		$address = mysqli_real_escape_string($conn, $_POST["address"]);

		$sql = "   UPDATE list SET kartororder='order',address='$address';    ";
		
		if (mysqli_query($conn, $sql)) 
		{
    		header("Location: ../web2019/order.php");
    		//echo "Record deleted successfully";	
		} 	
		else 
		{
    		echo "Error updating record: " . mysqli_error($conn);
		}

		exit();

	}
	else
	{
		header("Location: ../index.php");
		exit();
	}






?>