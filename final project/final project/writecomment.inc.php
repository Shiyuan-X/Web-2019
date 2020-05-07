<?php

	if (isset($_POST['comment']))
	{
		include "$_SERVER[DOCUMENT_ROOT]/web2019/dbh.inc.php";

		$comment0=mysqli_real_escape_string($conn, $_POST["comment0"]);

		$score = mysqli_real_escape_string($conn, $_POST["score"]);

		$index = mysqli_real_escape_string($conn, $_POST["index"]);

		$c_time0 = mysqli_real_escape_string($conn, $_POST["comment0_time0"]);

		$sql = "	INSERT INTO 
						comment
					 	(
					 		p_pid,
					 		ctext,
					 		cscore,
					 		ctime
					 	)
					VALUES 
						(
							'$index',
							'$comment0',
							'$score',
							'$c_time0'
						);    
				";

		mysqli_query($conn, $sql);
		header("Location: ../web2019/order.php?writecomment=success");
		exit();

	}
	else
	{
		header("Location: ../index.php");
		exit();
	}


	








?>
