<?php

include("config.php");
?>

<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">


					 <!-- <?php

					 $sel="select * from addcategory";
					 
					 $ex=$con->query($sel);

					 while($fet=$ex->fetch_array())
					 {


               ?>
						<li><a href=""><?php echo $fet["cat_name"];?></a></li>
					
					<?php
					 }

					 ?> -->






					  <?php

$sel="select * from addsubcategory";

$ex=$con->query($sel);

while($fet=$ex->fetch_array())
{


?>
   <li><a href=""><?php echo $fet["subcat_name"];?></a></li>

<?php
}

?>





						<!-- <li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="vegetables.html">Vegetables</a></li>
										<li><a href="vegetables.html">Fruits</a></li>
									</ul>
								</div>                  
							</div>				
						</li> -->
					
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		
        
        
        
        
        
  