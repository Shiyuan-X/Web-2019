<?php

session_start();

	if (isset($_POST['book']))
	{


		include "$_SERVER[DOCUMENT_ROOT]/web2019/dbh.inc.php";

		$departure = mysqli_real_escape_string($conn, $_POST["dep_city"]);

		$destination = mysqli_real_escape_string($conn, $_POST["destination"]);

		$ddate = mysqli_real_escape_string($conn, $_POST["dep_date"]);
/*
		$sql = "   	INSERT INTO 
					booking (
						departure,
						destination, 
						ddate )
					VALUES (
						'$departure',
						'$destination', 
						'$ddate');			";
*/
		$sql = "   	UPDATE 	`booking` 
					SET 	
							`destination`='$departure',
							`departure`= '$destination',
							`ddate`= '$ddate' 
					WHERE 	`destination` != 'shit'		";



		mysqli_query($conn, $sql);

		header(	"Location: ../web2019/booking.php?add_1booking=success".
				"?departure=$departure".
				"?destination=$destination".
				"?date=$ddate");

mysqli_close($conn);
		
		exit();

	}
	else
	{
		header("Location: ../web2019/index.php?booking_was_unsuccessful");
		
mysqli_close($conn);
		exit();
	}

?>