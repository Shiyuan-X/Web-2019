
	
	<br>
	<h5>
		<p>
			
			<table width="100%" border="0" cellspacing="0" cellpadding="8" >
				


					<style type="text/css"></style>

<?php
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
			 WHERE seller !='developer_himself'	
			 ORDER BY pid  DESC ";

	if ($result=mysqli_query($con,$sql))
  	{
	  	// Fetch one and one row
	  	while ($row=mysqli_fetch_row($result))
	    {
?>
							
								<div class="v-product__inner"	
										style="  display: inline-grid;
													width: 450px; height: 400px;">
									<form action="/web2019/product.php" method="GET">
										
                    					<button type="submit"
                          						name="view" 
                            					value="<?php echo $row[1] ?>"
                            					style="		
                            						width: 400px; height: 350px; margin: 10px;
                            							background-color: white;"
                            					>
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
									
								</div>
							
<?php
		}
			// Free result set
			mysqli_free_result($result);
	}
mysqli_close($con);
?>

			
		</table> 
	</p>
</h5>

<br>

