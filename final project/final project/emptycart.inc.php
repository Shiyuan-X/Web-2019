<?php  


if (isset($_POST['empty']))
	{
		include "$_SERVER[DOCUMENT_ROOT]/web2019/dbh.inc.php";

		$sql = "   UPDATE `list` SET `kartororder`= 'deleted' WHERE kartororder = 'kart'    ";
		
		if (mysqli_query($conn, $sql)) 
		{
    		header("Location: ../web2019/kart.php");
    		//echo "Record deleted successfully";	
		} 	
		else 
		{
    		echo "Error deleting record: " . mysqli_error($conn);
		}

		//header("Location: ../kart.php?kartemptied");
		exit();

	}
	else
	{
		header("Location: ../index.php");
		exit();
	}






?>