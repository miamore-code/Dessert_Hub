<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php"><span>Dessert</span> Hub</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				

					<?php
					
				 if(!isset($_SESSION["uid"]))
				 
				 {


					?>

					<ul class="special_items">

					<li><a href="index.php">Home</a><i>/</i></li>
					<li><a href="about.php">About Us</a><i>/</i></li>
					<li class="dropdown"><a class="navbar-dropdown" data-toggle="dropdown" href="#">Chocolates<span class="caret"></span></a><i>/</i>
					

					<ul class="dropdown-menu">

                  


				   <?php

				 $sel="select * from addsubcategory where cat_id=1";
					 
					 $ex=$con->query($sel);

					 while($fet=$ex->fetch_array())
					 {


               ?>
						<li><a href="product.php?subid=<?php echo $fet["subcat_id"];?>"><?php echo $fet["subcat_name"];?></a></li>
					
					<?php
					 }

					 ?>

				   
				   
				   
				   </li>

					</ul>					
					</li>

					<li class="dropdown"><a class="navbar-dropdown" data-toggle="dropdown" href="#">Cake<span class="caret"></span></a><i>/</i>
					

					<ul class="dropdown-menu">

				   <?php

$sel="select * from addsubcategory where cat_id=2";
	
	$ex=$con->query($sel);

	while($fet=$ex->fetch_array())
	{


?>
	   <li><a href="product.php?subid=<?php echo $fet["subcat_id"];?>"><?php echo $fet["subcat_name"];?></a></li>
   
   <?php
	}

	?>

					</ul>					
					</li>
			


                <li class="dropdown"><a class="navbar-dropdown" data-toggle="dropdown" href="products.php">Dessert Cups<span class="caret"></span></a><i>/</i>
					

					<ul class="dropdown-menu">

                  
				   <?php

$sel="select * from addsubcategory where cat_id=3";
	
	$ex=$con->query($sel);

	while($fet=$ex->fetch_array())
	{


?>
	   <li><a href="product.php?subid=<?php echo $fet["subcat_id"];?>"><?php echo $fet["subcat_name"];?></a></li>
   
   <?php
	}

	?>

					</ul>					
					</li>


					 <li><a href="feedback.php">Feedback</a></li>
					


				 
				


				<?php
				 }

				 else
				 {

				 ?>

					<ul class="special_items">

<li><a href="home.php">Profile</a><i>/</i></li>
<li><a href="changepassword.php">ChangePassword</a><i>/</i></li>
<li><a href="viewcart.php">ViewCart</a><i>/</i></li>
<li><a href="vieworder.php">View Order</a></li>



</ul>


<?php
				 }
				 ?>

			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+91)253562</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:desert@grocery.com">dessert@gmial.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>