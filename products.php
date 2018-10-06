<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Desert Hub | Provide Diffrent category of choclates and Cakes Bakery shoping :: Products</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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



    <?php
	include("header.php");
	
    ?>
    

    
    <?php
	include("menu.php");
	
	?>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li>Branded Foods</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
    





			<div class="w3l_banner_nav_right_banner3">
				<h3>Best Deals For New Products<span class="blink_me"></span></h3>
			</div>
			
				<div class="clearfix"> </div>
			</div>
            
            
            
            
            
            <div class="w3ls_w3l_banner_nav_right_grid">
				<h3>Popular Brands</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
                <h6>Choclates</h6>
                    
                <?php

                            $sel="select * from addproduct where cat_id=1";
                                
                                $ex=$con->query($sel);
                            
                                while($fet=$ex->fetch_array())
                                {
                            
                            
                            ?>

                    
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
						
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
                                       <center> 
                                    <div class="snipcart-thumb">
                                    <a href="productdetails.php?pid=<?php echo $fet["pro_id"];?>"><img src="admin/<?php  echo $fet["pro_img1"];?>" alt=" " class="img-responsive" style="width:100%; height:200px" /></a>
											<p><?php echo $fet["pro_name"];?></p>
											<h4>Rs.<?php echo $fet["price"];?></h4>
                                        </div>
                                        
                                </center>
										<div class="snipcart-details">
											
                                        <a href="productdetails.php?pid=<?php echo $fet["pro_id"];?>"><button type="button"  value="" class="btn btn-lg btn-success">View More Details</button></a>
                                            
                                    
                                    
										</div>
									</div>
								</figure>
							</div>
                        </div>
                        
                     
                        </div>
                        
                         
					</div>
                    
                    <?php
                                }
                        ?>

					<div class="clearfix"> </div>
				</div>
                
                
                
                






            
				<div class="w3ls_w3l_banner_nav_right_grid1">
                <h6>Cake</h6>
                    
                <?php

                            $sel="select * from addproduct where cat_id=2";
                                
                                $ex=$con->query($sel);
                            
                                while($fet=$ex->fetch_array())
                                {
                            
                            
                            ?>

                    
                    <div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
						
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
                                       <center> 
                                    <div class="snipcart-thumb">
                                    <a href="productdetails.php?pid=<?php echo $fet["pid"];?>"><img src="admin/<?php  echo $fet["pro_img1"];?>" alt=" " class="img-responsive" style="width:100%; height:200px" /></a>
											<p><?php echo $fet["pro_name"];?></p>
											<h4>Rs.<?php echo $fet["price"];?></h4>
                                        </div>
                                        
                                </center>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="knorr instant soup" />
													<input type="hidden" name="amount" value="3.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
                        </div>
                        
                     
                        </div>
                        
                         
					</div>
                    
                    
                    <?php
                                }
                        ?>

					<div class="clearfix"> </div>
				</div>
                










            
            <div class="w3ls_w3l_banner_nav_right_grid1">
                <h6>Desert Cups</h6>
                    
                <?php

                            $sel="select * from addproduct where cat_id=3";
                                
                                $ex=$con->query($sel);
                            
                                while($fet=$ex->fetch_array())
                                {
                            
                            
                            ?>

                    
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
						
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
                                       <center> 
                                    <div class="snipcart-thumb">
											<a href="productdetails.php?pid=<?php echo $fet["pid"];?>"><img src="admin/<?php  echo $fet["pro_img1"];?>" alt=" " class="img-responsive" style="width:100%; height:200px" /></a>
											<p><?php echo $fet["pro_name"];?></p>
											<h4>Rs.<?php echo $fet["price"];?></h4>
                                        </div>
                                        
                                </center>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="knorr instant soup" />
													<input type="hidden" name="amount" value="3.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
                        </div>
                        
                     
                        </div>
                        
                         
					</div>
                    
                    
                    <?php
                                }
                        ?>

					<div class="clearfix"> </div>
				</div>


<!-- //banner -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="w3agile_newsletter_left">
				<h3>sign up for our newsletter</h3>
			</div>
			<div class="w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="subscribe now">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
    



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