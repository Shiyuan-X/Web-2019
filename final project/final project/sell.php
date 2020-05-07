<?php
  include "$_SERVER[DOCUMENT_ROOT]/web2019/header.php";
?>

  <h1>NEW ITEM INFORMATION</h1>
  <h3>
    <form action="/web2019/addproduct.inc.php" method="POST" enctype="multipart/form-data">
      <br> 
            update a picture of the item:
            <br>
            <input  type="file" 
                    name="file"
                    id="file"
                    size="50">
            <br>

            Name of the item you want to sale:
            <br>
            <input  type="textarea" 
                    name="pname"
                    size="50">
      <br> 
    <!--       
            <input  type="textarea" 
                    name="pic"
                    size="50">
      -->    
      <br> 
            Priced at? :
            <br>
            <input  type="number" 
                    name="price"
                    size="50">
      <br> 
            Some description makes it better :
            <br>
            <input  type="textarea" 
                    name="description"
                    size="50">
      <br> 
            You, as the seller, is :
            <br>
            <input  type="textarea" 
                    name="seller"
                    size="50">
      <br>  
            Im all done !!!
            <br>
            <button type="submit" 
                    name="submit"
                    value="Upload Image">
                POST!!!
            </button>  

<?php 
  //echo readfile("description.txt") ;
 ?>

      
    </form>
</h3>




<?php
include "$_SERVER[DOCUMENT_ROOT]/web2019/footer.php"
?>
