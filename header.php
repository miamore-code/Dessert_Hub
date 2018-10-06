<div class="agileits_header">
		<div class="w3l_offers">
			<a href="products.php">Today's special Offers !</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required>
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">  
			
					<input type="submit" name="submit" value="View your cart" class="button"  data-toggle="modal" data-target="#myModal"  />
					
					<span class="badge badge-lg" style="color:red; font-size:14px; position:absolute; margin-top:-10px; margin-left:-15px">
				
				
				 <?php
				  $sel="select count(cart_id) as total from cart";
				  
				  $ex=$con->query($sel);


				  $fet=$ex->fetch_array();


				  echo $fet["total"];
				 ?>
				
				
				
				
				
				
				
				</span>
				
                </fieldset>
        
		</div>
		<div class="w3l_header_right">
			<ul>


			<?php
			 if(!isset($_SESSION["uid"]))
			 { 



			?>
			  
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">User<i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="login.php"><span class="fa fa-user"></span> Sign In</a></li> 
								<li><a href="login.php"> <span class="fa fa-user"></span>Sign Up</a></li>
							</ul>
						</div>                  
					</div>	
				</li>


				<?php
			 }

			 else

			 {

				?>




					<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>Welcome To:<?php echo "<b style='color:red'>".$_SESSION["uname"]."</b>";?><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="home.php">Profile</a></li> 
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</div>                  
					</div>	
				</li>

				<?php

			 }

			 ?>
			 
			</ul>
		</div>
        <?php
			 if(!isset($_SESSION["uid"]))
			 { 



			?>

		<div class="w3l_header_right1">


			<h2><a href="contact.php">Contact Us</a></h2>
		</div>

		<?php
			 }

			 ?>
		<div class="clearfix"> </div>
	</div>


	<?php
	include("viewcart.php");

	?>