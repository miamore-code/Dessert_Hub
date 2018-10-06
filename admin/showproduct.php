<?php
include("config.php");


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
<title>show All Category</title>
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
					<h2 class="title1">Show Product here!</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Show Product Forms :</h4>
						</div>
						<div class="form-body" style="overflow:auto" >
							

				<table class="table table-responsive table-bordered table-hover" >

				<tr>
				<th>Pid</th>
				<th>Catname</th>
                <th>Subcatname</th> 
				<th>Pimage</th>
				<th>Pimage1</th>
				<th>Pimage2</th>
				<th>Pname</th>
                <th>size</th>
                <th>price</th>
				<th>Qty</th>
				<th>Pdescription</th>
				<th>Created_Date</th>
				<th>Created_Time</th>
				<th>Action</th>

				</tr>
              <?php
			  $sel="select addproduct.*,cat_name,subcat_name,sizename from addproduct join addcategory on addproduct.cat_id=addcategory.cat_id join addsubcategory on addproduct.subcat_id=addsubcategory.subcat_id join addsize on addproduct.size_id=addsize.size_id";
			 
			 $ex=$con->query($sel);
			 
			 while($fet=$ex->fetch_array())

			 {


              ?>
				<tr>
			
				<td><?php echo $fet["pro_id"];?> </td>
				<td><?php echo $fet["cat_name"];?> </td>
				<td><?php echo $fet["subcat_name"];?> </td>
				<td><img src="<?php echo $fet["pro_img"];?>" style="width:100px; height:100px"> </td>
				<td><img src="<?php echo $fet["pro_img1"];?>" style="width:100px; height:100px"> </td>
		
				<td><img src="<?php echo $fet["pro_img2"];?>" style="width:100px; height:100px"> </td>
		        <td><?php echo $fet["pro_name"];?> </td>
				<td><?php echo $fet["sizename"];?> </td>
				<td><?php echo $fet["price"];?> </td>
				<td><?php echo $fet["quantity"];?> </td>
				<td><div style="overflow:auto !important; width:120px; height:100px"><?php echo $fet["description"];?> </div></td>
				<td><?php echo $fet["created_date"];?> </td>
				<td><?php echo $fet["created_time"];?> </td>
				<td><a href="showproduct.php?did=<?php echo $fet["pro_id"];?>" onclick="return confirm('Are you sure to Delete')"><span class="fa fa-remove" style="color: red; font-size: 25px"></span>
        
				&nbsp; &nbsp; &nbsp; &nbsp;  

				<a href="editproduct.php?eid=<?php echo $fet["pro_id"];?>"><span class="fa fa-edit" style="color: green; font-size: 25px"></span>

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