<?php
include("config.php");
//show all subcategory
$sel="select  state.*,c_name from state join country on state.c_id=country.c_id";
$ex=$con->query($sel);


//delete category here..


if(isset($_REQUEST["did"]))


{

    $did=$_REQUEST["did"];



    $del="delete from state where s_id='$did'";

    $ex=$con->query($del);

    echo "<script>

   alert('State Deleted successfully')


   window.location='showstate.php';

    </script>";

}

?>



<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Show All State</title>
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
					<h2 class="title1">Show State here!</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Show State Forms :</h4>
						</div>
						<div class="form-body">
							

				<table class="table table-responsive table-bordered table-hover">

				<tr>
				<th>State id</th>
                <th>State Name</th>
                <th>Country Name</th>
                <th>Action</th>
				</tr>
            

               <?php
             
              while($fet=$ex->fetch_array())
              {


               ?> 

				<tr>
				<td><?php echo $fet["s_id"];?> </td>
                
				<td><?php echo $fet["s_name"];?> </td>
                 
				<td><?php echo $fet["c_name"];?> </td>
 
				
                 
				<td><a href="showstate.php?did=<?php echo $fet["s_id"];?>" onclick="return confirm('Are you sure to Delete')"><span class="fa fa-remove" style="color: red; font-size: 25px"></span>

&nbsp; &nbsp; &nbsp; &nbsp;  

<a href="editstate.php?eid=<?php echo $fet["s_id"];?>"onclick="return confirm('Are you sure to Edit State')"><span class="fa fa-edit" style="color: green; font-size: 25px"></span>

				 </td>
				</tr>	
			   

			   <?php

			}
			   ?>		


				</table>			
							 
                            
                            
                            



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