<?php
    include "$_SERVER[DOCUMENT_ROOT]/web2019/header.php";
?>

 <br>
          <b>
          You are at:
          <a href="index.php">Home</a>
           > 
          <a href="/web2019/index.php" title="PRODUCTS">PRODUCTS</a>
          </b>
  <br>

  <h3>
    <p>
      <table width="100%" border="0" cellspacing="0" cellpadding="8">
          <style type="text/css"></style>

<?php

if (isset($_GET['view']))
  {
    $con=mysqli_connect("localhost","root","","web2019a5");
    $view = mysqli_real_escape_string($con, $_GET["view"]);


  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql="
          SELECT  
            product.pname,
            product.pname,
            product.pimg,
            product.pprice,
            product.pdescription,
            product.seller,
            product.pname,
            product.pfile
          FROM product WHERE pid='$view'";

  if ($result=mysqli_query($con,$sql))
  {
    // Fetch one and one row
    if ($row=mysqli_fetch_row($result))
    {
?>
        <tr>  
          <td align="right">
                  <a href="<?php echo $row[7] ?>">
                    <img src="<?php echo $row[2] ?>"
                        width = "300px">
                  </a>
                  <br>
              </td>

              <td align="left">
                  Item name: <?php echo $row[1] ?>
                  <br>
                  Price: $<?php echo $row[3] ?>
                  <br>
                  Description:
                  <br>
                  <?php echo $row[4] ?>
                  <br>
                  Seller:<?php echo $row[5] ?>
                  <br>
                  <br>

                  <form action="/web2019/addcart.inc.php" method="GET">
                    Qty:
                    <input  type="text"
                            name="quantity"
                            size="3"
                            maxlength="8"
                            placeholder="1"
                            value="1"  >
                    <br>
                    <br> 
                    Leave the seller a message:
                    <br>
                    <input  type="textarea" 
                            name="message"
                            size="50">
                    <br>
                    You are buyign for:
                    <input  type="textarea" 
                            name="buyername"
                            size="50">
                    <br>
                    <input  type="hidden"
                            name="index"
                            value="<?php echo $view ?>"
                            placeholder="<?php echo $view ?>">
                    <button type="submit"
                            name="buy" 
                            value="buy">
                    ADD TO CART
                    </button> 
                    
                  </form>
              </td>
        </tr>
           
<?php
     }
      // Free result set
      mysqli_free_result($result);
  }
mysqli_close($con);
?>

    </table>
  </p>
</h3>
        
        <h2 style="text-align: center; background-color: yellow">Comments:</h2> 
        <br>
        <br>


<?php

echo "<br><h1>comment to be added</h1><br>";



  $total=0;$count = 0;

  $con2=mysqli_connect("localhost","root","","web2019a5");
  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql2="
          SELECT
            comment.ctime,
            comment.ctext,
            comment.cscore
          FROM 
            comment 
          WHERE p_pid = '$view' 
          ORDER BY ctime  DESC
        ";

  if ($result=mysqli_query($con2,$sql2))
  {
    // Fetch one and one row
    while ($row=mysqli_fetch_row($result))
    {
      $total = $total+$row[2];
      $count = $count+1;
?>
      <br>
      time commented: <?php echo $row[0] ?>
      <br>
      Score: <?php echo $row[2] ?>
      <br>
      Says: <?php echo $row[1] ?>
      <br><br><br>
           
<?php
     }
     $average=$total/$count;
?>
  
  <h1>
    Average stars given: <?php echo $average ?>  out of  5
    <br>
    </h1>
 <?php    
      // Free result set
      mysqli_free_result($result);
  }
mysqli_close($con2);

  }
  else
  {
    header("Location: ../index.php");

    exit();
  }

include "$_SERVER[DOCUMENT_ROOT]/final/include/footer.php"



?>

