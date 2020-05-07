<?php



// Check if image file is a actual image or fake image
	if (isset($_POST['submit']))
	{

		$file = $_FILES['file'];

		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg');

		if(in_array($fileActualExt,$allowed))
		{
			#code...
			if ($fileError === 0 ) 
			{
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = 'product_img/'.$fileNameNew;
		
				move_uploaded_file($fileTmpName, $fileDestination);
				//header("Location: sell.php?upload_success");
			}
			else
			{
				echo "there was an error uploading your file!";
			}
		}
		else
		{
			echo "you cannot uplaod files of this type(jpg only)";
		}



/*
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

*/
		include "$_SERVER[DOCUMENT_ROOT]/web2019/dbh.inc.php";

		$name=mysqli_real_escape_string($conn, $_POST["pname"]);

		$pic = mysqli_real_escape_string($conn, $fileDestination);

		$price = mysqli_real_escape_string($conn, $_POST["price"]);

		$description = mysqli_real_escape_string($conn, $_POST["description"]);
		
		$seller = mysqli_real_escape_string($conn, $_POST["seller"]);
		
		//$message = mysqli_real_escape_string($conn, $_POST["price"]);


		$sql = "   	INSERT INTO 
					product (
						pname,
						pimg, 
						pprice, 
						pdescription,
						seller)
					VALUES (
						'$name',
						'$pic', 
						'$price', 
						'$description',
						'$seller');     ";

		if (mysqli_query($conn, $sql)) 
		{
			header("Location: ../web2019/sell.php?addproduct=success");
    		//echo "Record deleted successfully";	
		}
		else
		{
			echo "Error adding record: " . mysqli_error($conn);
		}
		exit();

	}
	else
	{
		header("Location: ../index.php");
		exit();

		
	}

	

?>
