<?php
	include "$_SERVER[DOCUMENT_ROOT]/web2019/header.php"	
?>

<?php

session_start();

	if (isset($_POST['login']))
	{

		include "$_SERVER[DOCUMENT_ROOT]/web2019/dbh.inc.php";

		$uname = mysqli_real_escape_string($conn, $_POST["username"]);

		$pw = mysqli_real_escape_string($conn, $_POST["password"]);


		$sql = "   	SELECT
					account.uname,
					account.pw
				 	FROM account 	
				 	WHERE uname='$uname' "    ;

		//mysqli_query($conn, $sql);
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_row($result);

		if ( $row[0]!=$uname or $row[1] != $pw)
		{
			
			header("Location: ../web2019/login.php?uname&pw_dont_match");
			
mysqli_close($conn);	
			exit();
		}	
		else
		{
			header(	"Location: ../web2019/mymain.php");
		}

		
mysqli_close($conn);
		exit();

	}
	else
	{
		header("Location: ../web2019/index.php?connection_error&");
		
mysqli_close($conn);
		exit();
	}

?>