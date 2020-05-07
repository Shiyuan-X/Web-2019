<?php
	include "$_SERVER[DOCUMENT_ROOT]/web2019/header.php"	
?>


	<form name="booking"
			action="/web2019/book.inc.php"
			method="post">

		<style type="text/css">
			#login
			{
				margin: auto;
				padding: 0px;
				border: 0px;
			}
		</style>

		departure city:
		<br>
		<input 	type="text" 
				name="dep_city"
				placeholder="departure city"> </input>

		<br><br>

		destination city:
		<br>
		<input 	type="text" 
				name="destination"
				placeholder="destination">	</input>

		<br><br>

		departure date:
		<br>
		<input 	type="text" 
				name="dep_date"
				placeholder="departure date"> </input>

		<br><br>

		<button type="submit"
				name="book"
				value="book" 
				style="	display: inline-block;
						color: white;
						background-color: green;
						margin-right: none;
						border-right: 0px;
						padding: 10px;
						font-size: 30px;">
				book this flight
		</button>
	
	</form>		

		<a id="book"
				style="	display: inline-block;
						color: white;
						background-color: green;
						margin-right: none;
						border-right: 0px;
						padding: 10px;
						font-size: 30px;"
				href = "../../web2019/booking.php">
			book another flight
		</a>

</body>
</html>