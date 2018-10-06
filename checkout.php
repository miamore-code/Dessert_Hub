<?php

include("config.php");
if(isset($_REQUEST["place"]))

{

     date_default_timezone_set("Asia/Calcutta");
    $uid=$_SESSION["uid"];
    $cartid=$_REQUEST["cartid"];
    $price=$_REQUEST["price"];
    $qty=$_REQUEST["qty"];
    $em=$_REQUEST["em"];
    $uname=$_REQUEST["uname"];
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $mob=$_REQUEST["mob"];
    $add=$_REQUEST["add"];
    $order=rand(999,99999999);
    $odate=date("d/m/y");
    $otime=date("H:i:s a");
    $subtot=$price*$qty;
    $status="Placed";


 $ins="insert into product_order(cart_id,uid,email,username,firstname,lastname,mobile,address,ordercode,orderdate,ordertime,subtotal,status)values('$cartid','$uid','$em','$uname','$fname','$lname','$mob','$add','$order','$odate','$otime','$subtot','$status')";

     $ex=$con->query($ins);


     if($ex)

     {

     echo "<script>
     alert('Your Order Placed Succesfully')

     window.location='vieworder.php';
     
     
     
     </script>";

     }


     else

     {

        echo "<script>
        alert('Your Order Not placed Succesfully Try again')
   
        window.location='checkout.php';
        
        
        
        </script>";
   

     }
    



    

}



?>



<?php
include("config.php");


?>
<!DOCTYPE html>
<html>
<head>
<title>Desert Hub | Provide Diffrent category of choclates and Cakes Bakery shoping :: checkout products</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" content="Desert Hub | Provide Diffrent category of choclates and Cakes Bakery shoping"/>
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	
    <?php
	include("header.php");
	
	?>
    
<!--heder clossed here-->




<!-- menu start here -->
	
    <?php
	include("menu.php");
	
	?>
    
    
<!--menu clossed here-->    
    
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>



<div class="container-fluid">

<hr>
<h3>Checkout </h3>

<hr>

<div class="col-md-12 col-xs-12">

  
  <div class="col-md-7 col-xs-12">


  <h3>Enter Customer Details :</h3>

  <form method="post">


   <div class="form-group">
  
    <label>Enter Email :</label>
    <input type="text" name="em" placeholder="Enter email" required class="form-control">


   </div>

   <div class="form-group">
  
  <label>Enter Username :</label>
  <input type="text" name="uname" placeholder="Enter Username" required class="form-control">


 </div>

 <div class="form-group">
  
  <label>Enter Firstname :</label>
  <input type="text" name="fname" placeholder="Enter Firstname" required class="form-control">


 </div>
 <div class="form-group">
  
  <label>Enter Lastname :</label>
  <input type="text" name="lname" placeholder="Enter Lastname" required class="form-control">


 </div>
 
 <div class="form-group">
  
  <label>Enter Mobile :</label>
  <input type="text" name="mob" placeholder="Enter Mobile" required class="form-control">


 </div>


 
 <div class="form-group">
  
  <label>Enter Address :</label>
  <textarea name="add" placeholder="Enter Address" required class="form-control"></textarea>


 </div>

   </div>
<div class="col-md-5 col-xs-12 pull-right">

 <h3 align="center" style="color:orange"> Order Summury</h3>
 <?php

include("config.php");

$sel="select cart.*,pro_img from cart join addproduct on addproduct.pro_id=cart.pro_id";

$ex=$con->query($sel);

while($fet=$ex->fetch_array())

{

  ?>
<div class="jumbotron">
<table align="center" class="table-responsive" style="width: 100% ; height:350px; padding:8px">

  <tr>

<td><input type="text" name="cartid" value="<?php echo $fet["cart_id"];?>" readonly style="display:none; border:none"></td>
</tr>

<tr>

<td><input type="text" name="price" value="<?php echo $fet["price"];?>" readonly style="display:none; border:none"></td>
</tr>

<tr>

<td><input type="text" name="qty" value="<?php echo $fet["quantity"];?>" readonly style="display:none; border:none"></td>
</tr>
    
    <th>Pname</th>

        <td><?php echo $fet["pro_name"];?></td>
    </tr>


     <tr>

    
<th>Quantity</th>

    <td><?php echo $fet["quantity"];?></td>
</tr>
<tr>

<th>Order Subtotal :</th>
<td>
Rs. 
<?php
$sel="select sum(subtotal) as total from cart";
              
$ex=$con->query($sel);


$fet=$ex->fetch_array();


echo $fet["total"];



?>
</td>
</tr>

<tr>

    <th>Shipment</th>

    <td><b style="color:green">FREE</b></td>
    </tr>

   
   <tr>

<td colspan="2" align="right"><h3 style="color:orangered">SubTotal of Products :Rs. 

<?php
$sel="select sum(subtotal) as total from cart";
              
$ex=$con->query($sel);


$fet=$ex->fetch_array();


echo $fet["total"] ."<b>-/</b>";



?>



</h3></td>

</tr>
<?php
}


?>
     

<tr>


<td align="center" colspan="7">
 <input type="submit" class="btn btn-block" name="place" value="Place Your Order" style="height: 40px; background-color:red; color: white; font-size: 20px">



</td>


</tr>

  </table>

  </div>



</div>

</div>
</form>

</div>

    <?php
	include("footer.php");
	
	?>
    
    
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>
