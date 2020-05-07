<?php
	include "$_SERVER[DOCUMENT_ROOT]/web2019/header.php"	
?>



<?php


		echo "<h1>VIEWING MY BOOKINGS</h1>";
	
//mysqli_close($conn0);

		include "$_SERVER[DOCUMENT_ROOT]/web2019/dbh.inc.php";
		

/*
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "web2019a5";

$conn0 = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
*/

		$sql0 = "   SELECT

					fname

				 	FROM account 	 
				" ;

		//mysqli_query($conn, $sql);
		$result0=mysqli_query($conn,$sql0);
		$row0=mysqli_fetch_row($result0);

		echo "<br><br>HELLO, USER";
		echo $row0[0];


/*
		echo "<br><br>YOUR DESTINATION IS : ";
		echo $row0[1];
		
		echo "<br><br>YOUR DEPARTURE LOCATION IS : ";
		echo $row0[2];
		
		echo "<br><br>THE DATE IS : ";
		echo $row0[3];
	*/

?>


			<br>
			<a href="../web2019/booking.php">
				LET ME BOOK A FLIGHT
			</a>

		
<?php  

//mysqli_close($conn0);
		exit();



?>