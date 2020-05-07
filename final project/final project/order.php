<?php
	  include "$_SERVER[DOCUMENT_ROOT]/web2019/header.php";
?>

	


	<br>
	<br>
          <b>
					<a href="index.php">Home</a>
					  >
					<a href="order.php">MY ORDERS</a>
					</b>
	<br>
	<br>

		<p>
			<table width="100%" border="0" cellspacing="0" cellpadding="8">
				<tbody>


					<style type="text/css"></style>
          	<tr>

<?php

  $total = 0;

  $con=mysqli_connect("localhost","root","","web2019a5");
	// Check connection
	if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


	$sql="  SELECT 	list.kartororder,	
					list.quantity,		
					product.pid,
					product.pname,
					product.pimg,
					product.pprice,
					product.seller,
					product.pfile,
					list.buyer
					FROM list inner join product on list.product_pid=product.pid 		
					WHERE kartororder='order' and quantity !=0 and buyer='buyer'  ";

	if ($result=mysqli_query($con,$sql))
  {
  	// Fetch one and one row
  	while ($row=mysqli_fetch_row($result))
    {
      $total = $total+$row[1]* $row[5];
?>

                <td>
					
					<img src="<?php echo $row[4] ?>"
                height = "100px">
					
                    <br>
                </td>

				<td>
					
					<?php echo $row[3] ?>
					
					<br>
                 </td>

                <td>
                	Price:<?php echo $row[5] ?>
                   	<br>
                </td>

                <td>
               	    Quantity:<?php echo $row[1] ?>
  					<br>
                </td>

                <td>
  					Seller:<?php echo $row[6] ?>
                    <br>
				</td>

                <td>
                	<form action="/web2019/writecomment.inc.php" method="POST">
                		
                			<input 
                				style=" visibility: hidden;
                                width: 20px"
                				    type="text"
                     	       name="index"
                   	         value="<?php echo $row[2] ?>"
                 	           placeholder="<?php echo $row[2] ?>">

                            comment:

                			<input type="textarea" name="comment0">

                      <br>
                		  score:

                			<select name="score">
                				<option value="1">1 STAR</option>
                				<option value="2">2 STAR</option>
                				<option value="3">3 STAR</option>
                				<option value="4">4 STAR</option>
                				<option value="5">5 STAR</option>
                			</select>



                			<input 	type="text" 
                					name="comment0_time0"
                					value="<?php  
                						date_default_timezone_set("america/chicago");
                						echo date("Y-m-d h:i:s"); ?>"
                					style="visibility: hidden;"
                					>
                			
								

                		<button type="submit" name="comment" >
                			POST 
                      THIS 
                      COMMENT
                		</button>

                	</form>
                    <br>
				</td>

			</tr>

			
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






<br>


<?php
include "$_SERVER[DOCUMENT_ROOT]/final/include/footer.php"
?>
