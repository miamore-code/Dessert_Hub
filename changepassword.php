<?php
include("config.php");

if(!isset($_SESSION["uid"]))

{


    echo "<script>
    
     window.location='index.php';
    
    
    </script>";
}


//change user password.

if(isset($_REQUEST["chng"]))

{

    $uid=$_SESSION["uid"];

    $opass=$_REQUEST["opass"];
    
    $npass=$_REQUEST["npass"];
    
    $cpass=$_REQUEST["cpass"];


    $sel="select password from registration where uid='$uid'";

    $ex=$con->query($sel);

    $fet=$ex->fetch_array();

    $p=$fet["password"];


    if($opass==$p && $npass==$cpass)

    {

     $upd="update registration set password='$npass' where uid='$uid'";

     $ex=$con->query($upd);


      
    echo "<script>
    alert('Change Password are succefully')
    window.location='home.php';
   
   
   </script>";

    }


    else
    {


        echo "<script>
        alert('Your opass,cpass and New password does not Matched')
        window.location='changepassword.php';
       
       
       </script>";


    }
}







?>
<!DOCTYPE html>
<html>
<head>
<title>Desert Hub | Provide Diffrent category of choclates and Cakes Bakery shoping :: Home</title>
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
<!-- //script-for sticky-nav -->
	
    
    
    
    
<!-- //header -->
<!-- banner -->

		
        <!--sidebar start here---->
        
        
    <?php
	include("sidebar.php");
	
	?>
        
        
        
        <!--sidebar closed here---->
        
        
        
         <!--slider start here---->
        
   
        
        <!--slider closed here---->
        
        
        
        
        	<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		
	
<!-- banner -->


<?php

 //view profile of user..

$uid=$_SESSION["uid"];
 $sel="select * from registration where uid='$uid'";
$ex=$con->query($sel);

$fet=$ex->fetch_array();


?>
     
       <div class="col-md-7 col-xs-12 col-md-offset-2">
           <div class="row">

            <h3 align="center">Change Your Password</h3>
            <br><br>
			
				  
                    <form  method="post" enctype="multipart/form-data">
                    
                         <center>
                    
             <div class="form-group"> 
                        <input type="password" name="opass" placeholder="Enter Old Password" required=" " class="form-control">
                        
            </div>

             
             <div class="form-group"> 
                        <input type="password" name="npass" placeholder="Enter New Password" required=" " class="form-control">
                        
            </div>


                <div class="form-group"> 
                        <input type="password" name="cpass" placeholder="Enter Confirm Password" required=" " class="form-control">
                        
            </div>

                   
                       <div class="form-group"> 
					  <input type="submit" name="chng" value="Submit" class="btn btn-block btn-danger" style="font-size:24px">
					</form>
				  </div>
            </div>
            </div>







				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
	</div>
<!-- top-brands -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //top-brands -->
<!-- fresh-vegetables -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //fresh-vegetables -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="w3agile_newsletter_left">
				<h3>sign up for our newsletter</h3>
			</div>
			<div class="w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
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
