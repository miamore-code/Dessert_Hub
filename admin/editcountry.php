<?php
include("config.php");


//edit category..

if(isset($_REQUEST["eid"]))

{


$eid=$_REQUEST["eid"];

$sel="select * from country where c_id='$eid'";


$ex=$con->query($sel);


$fet=$ex->fetch_array();




}


//update category here...


if(isset($_REQUEST["updcountry"]))

{


$eid=$_REQUEST["eid"];
$countrynm=$_REQUEST["countrynm"];
	


$upd="update country set c_name='$countrynm' where c_id='$eid'";


$ex=$con->query($upd);

if($ex)

{


 
 echo "<script>
 
 alert('Country Updated Succefully')
 
 
 window.location='showcountry.php';
 
 </script>";

}

else

{


 
 echo "<script>
 
 alert('Country not Updated Succefully try again')
 
 
 window.location='editcountry.php';
 
 </script>";
}



}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Add Country</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">


            <?php
            include("include/header.php");
            
            include("include/sidebar.php");
            
            ?>        
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">

					
					<h2 class="title1" style="color: red">Update Country here!</h2>
					
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
						
							<h4 style="color: red">Update Country Here :</h4>

						
						
						</div>
						<div class="form-body">
							<form method="post">
							 <div class="form-group"> 
                            <label for="exampleInputEmail1">Enter country Name(*):</label> 

                          
                            
                            <input type="text" name="countrynm"  value="<?php echo $fet["c_name"];?>" class="form-control" id="exampleInputEmail1" placeholder="Country name" required>
                            
                             </div>                        
                            



                                    
                  
                       
                            
 <input type="submit" name="updcountry"  value="UpdateCountry" class="btn btn-danger">


                   

                         </form> 
						</div>
					</div>
					
                    
                    
                    
            <?php
            include("include/footer.php");
            
            ?>        
                    
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>




   
</body>
</html>