<?php

include("config.php");
if(isset($_REQUEST["did"]))

{


  $did=$_REQUEST["did"];

  $del="delete from cart where cart_id='$did'";

  $ex=$con->query($del);

  echo  "<script>
    
    
      alert('Product Deleted from Cart')
  
  
      window.location='index.php';
  
  
       </script>";

}



?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="width:85%">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title" style="color:orangered">Your Shopping Bags</h2>

        <div class="w3ls_logo_products_left pull-right">
            <h1><a href="index.php"><span>Dessert</span> Hub</a></h1>
          </div>
      </div>



     
          
      <div class="modal-body">



<table align="center" class="table-responsive table-bordered table-striped" style="width: 100%">

  <tr>

    <th>Cartid</th>
    
    <th>Product Image</td>
      
    <th>Pname</td>
      
    <th>price</td>
      
    <th>Quantity</td>
      
    <th>Subtotal</td>
      
    <th>Action</td>
      
    </tr>

    <?php

include("config.php");

$sel="select cart.*,pro_img from cart join addproduct on addproduct.pro_id=cart.pro_id";

$ex=$con->query($sel);

while($fet=$ex->fetch_array())

{

  ?>

    
    <tr>


        <td><?php echo $fet["cart_id"];?></td>
       

        <td><img src="admin/<?php echo $fet["pro_img"];?>" style="width: 120px; height: 100px;"></td>
        

        <td><?php echo $fet["pro_name"];?></td>
        

        <td>Rs.<?php echo $fet["price"];?></td>
        

        <td><?php echo $fet["quantity"];?></td>
        

        <td>Rs.<?php echo $fet["subtotal"];?></td>


        

        <td><a href="viewcart.php?did=<?php echo $fet["cart_id"];?>" onclick="return confirm('Are you sure to Delete Cart')"><span class="glyphicon glyphicon-trash" style="color: red; font-size:30px"></span></td>
  
      </tr>
  <?php
    }
    

    ?>




    <tr>

    <td colspan="7" align="right"><h3 style="color:orangered">SubTotal of Products :Rs. 
    
    <?php
    $sel="select sum(subtotal) as total from cart";
				  
    $ex=$con->query($sel);


    $fet=$ex->fetch_array();


    echo $fet["total"] ."<b>-/</b>";



    ?>
    
    
    
    </h3></td>

    </tr>



  
  </table>

  <br>  <br>

  <center>

  <button type="button" class="btn btn-default" data-dismiss="modal"><img src="images/payumoney-logo.png" style="width:220px; height: 45px;"></button>--OR--



<?php
if(!isset($_SESSION["uid"]))

{
?>
  <button type="button" class="btn btn-default" style="width:220px; height: 63px; background-color: midnightblue; color: white; font-size: 20px" onclick="return ll('this.value')">Go for checkout</button>


<?php

}

else

{

?>


  <a href="checkout.php"><button type="button" class="btn btn-default" style="width:220px; height: 63px; background-color: midnightblue; color: white; font-size: 20px">Go for checkout</button></a>

<?php
}

?>
  </center>

      </div>
      <div class="modal-footer">

         

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script>
function ll()

{

  alert('Please Login First For Securely  Checkout The Products')


  window.location='login.php';



}

</script>