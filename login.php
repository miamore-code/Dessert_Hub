<?php
//register user

include('config.php');

if(isset($_POST["sub"]))

{

    $tmp=$_FILES["img"]["tmp_name"];

    $path="upload/".$_FILES["img"]["name"];


    move_uploaded_file($tmp,$path);

    $unm=$_POST["uname"];
    $pass=$_POST["pass"];
    $em=$_POST["em"];
    $mob=$_POST["mob"];
    $add=$_POST["add"];
    



    $ins="insert into registration(photo,username,password,email,mobile,address)values('$path','$unm','$pass','$em','$mob','$add')";


    $ex=$con->query($ins);


    if($ex)
    {

    echo  "<script>
    
    
    alert('Thanks for registration with us')


    window.location='login.php';


     </script>";
}


else

{

    echo  "<script>
    
    
    alert('sory registration is not completed Try again')


    window.location='login.php';


     </script>";
}

}


//login for users...


if(isset($_POST["log"]))

{

   $unm=$_POST["uname"];

   
   $pass=$_POST["pass"];
   
   
   $sel="select * from registration where username='$unm' and password='$pass'";

   $ex=$con->query($sel);

   $fet=$ex->fetch_array();

   $no=$ex->num_rows;


   if($no > 0)

   {


    $_SESSION["uid"]=$fet["uid"];

    $_SESSION["uname"]=$fet["username"];

    
    echo  "<script>
    
    
    alert('You are LoggedIn Succefully')


    window.location='home.php';


     </script>";


   }

   else
   {


    
    echo  "<script>
    
    
    alert('Username and password are Incorect')


    window.location='login.php';


     </script>";
   }


}

?>


<!DOCTYPE html>
<html>
<head>
<title>Desert Hub | Provide Diffrent category of choclates and Cakes Bakery shoping :: Crreate An Account</title>
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
<!-- header -->
	
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




<!-- header -->
<?php
include("header.php");


include("menu.php");
?>



<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li>Create Your Account</li>
			</ul>
		</div>
	</div>




    
   


<!-- login -->
		<div class="w3_login">
			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>



				  
				  <div class="form">
					<h2>Login to your account</h2>
					<form method="post">
					  <input type="text" name="uname" placeholder="Username" required=" ">
					  <input type="password" name="pass" placeholder="Password" required=" ">
					  <input type="submit" name="log" value="Login">
					</form>
				  </div>



				  <div class="form">
					<h2>Create an account</h2>
					<form  method="post" enctype="multipart/form-data">
						<input type="file" name="img" placeholder="Username" required=" "><bR>
					 
						<input type="text" name="uname" placeholder="Username" required=" ">
					  <input type="password" name="pass" placeholder="Password" required=" ">
					  <input type="email" name="em" placeholder="Email Address" required=" ">
                      <input type="text" name="mob" placeholder="Phone Number" required=" ">
                      <textarea name="add" placeholder="Enter full  address" required=" " class="form-control"></textarea><br>
					  <input type="submit" name="sub" value="Register">
					</form>
				  </div>
				  <div class="cta"><a href="#">Forgot your password?</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter-top-serv-btm -->
	
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