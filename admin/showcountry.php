<?php
include("config.php");

$sel="select * from country";

$ex=$con->query($sel);



//delete category here..


if(isset($_REQUEST["did"]))


{

    $did=$_REQUEST["did"];



    $del="delete from country where c_id='$did'";

    $ex=$con->query($del);

    echo "<script>

   alert('Country Deleted successfully')


   window.location='showcountry.php';

    </script>";

}

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>show All Country</title>
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
				<h2 class="title1">Show Country here!</h2>
				<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
					<div class="form-title">
						<h4>Show All Country :</h4>
					</div>
					<div class="form-body">
						

						<table class="table table-responsive table-bordered table-hover">

							<tr>
								<th>Countryid</th>
                                <th>Country Name</th>
                                <th>Action</th>
							</tr>
							
                           <?php
						   while($fet=$ex->fetch_array())
						   
						   {
						   
						   
						   ?>
								
								<tr>
									<td><?php echo $fet["c_id"];?></td>
                                    
                                    <td><?php echo $fet["c_name"];?></td>

                                    
									

									<td>
                                    <a href="showcountry.php?did=<?php echo $fet["c_id"];?>" onclick="return confirm('Are you sure to Delete country')"><span class="fa fa-close" style="color:red; font-size:35px"></span>
                                   
                                   &nbsp; 

                                    <a href="editcountry.php?eid=<?php echo $fet["c_id"];?>" onclick="return confirm('Are you sure to Edit country')"><span class="fa fa-edit" style="color:green; font-size:35px"></span>
                                    
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