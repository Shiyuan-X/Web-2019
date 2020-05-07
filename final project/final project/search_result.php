
<?php
  include "$_SERVER[DOCUMENT_ROOT]/web2019/header.php";

  if (isset($_POST['searchbox']))
	{
		$search_keyword = $_POST['searchbox'];
?>

	<br>
	
	<br>
	<h5>
		<p>
			<table width="100%" border="0" cellspacing="0" cellpadding="8">
				<tbody>



					<style type="text/css"></style>


	<h1>
		DISPLAYING SEARCH RESULT OF 
		<?php echo $_POST['searchbox']; ?>
	</h1>



<?php

	}


	$con=mysqli_connect("localhost","root","","web2019a5");
	// Check connection
	if (mysqli_connect_errno())
	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql="	SELECT 	product.pimg,
					product.pid,
					product.pname,
					product.pprice,
					product.seller,
					product.pfile,
					product.pdescription 
			FROM product 
			WHERE (product.pname) LIKE '%{$search_keyword}%';";


	if ($result=mysqli_query($con,$sql))
  	{
  	// Fetch one and one row
  	while ($row=mysqli_fetch_row($result))
    {
?>
							<td>
								<div class="v-product__inner">
									<form action="/web2019/product.php" method="GET">
										
                    					<button type="submit"
                          						name="view" 
                            					value="<?php echo $row[1] ?>"

                            					style="	height = 200px;
                            							width = 5rem;		
                            							background-color: white;">

										<img src="<?php echo $row[0] ?>"
												width = "150px">
									</form>
									
									<br>
									
											<?php echo $row[2] ?>
									
									<br>
									Price: $<?php echo $row[3] ?>
									<br>
									<!--
									Description:<?php //echo $row[6] ?>
									-->
									<br>
									Seller:<?php echo $row[4] ?>
									<br>
									<br>
									
								</div>
							</td>
<?php
		 }
			// Free result set
			mysqli_free_result($result);
	}
mysqli_close($con);
?>

			</tbody>
		</table>
	</p>
</h5>

<br>


<?php
include "$_SERVER[DOCUMENT_ROOT]/final/include/footer.php"
?>
