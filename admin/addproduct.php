<?php

include("config.php");

//insert product..


if(isset($_POST["addproduct"]))

{

	date_default_timezone_set("asia/calcutta");
	
	$catnm=$_POST["catnm"];
	
	$subcatnm=$_POST["subcatnm"];

	//image upload here...

	$tmp=$_FILES["pimage"]["tmp_name"]; 
	$path="product_img/".$_FILES["pimage"]["name"];
	$type=$_FILES["pimage"]["type"];
	$size=$_FILES["pimage"]["size"]/1024;
	move_uploaded_file($tmp,$path);
	
	//image uplode1 here...

	$tmp1=$_FILES["pimage1"]["tmp_name"]; 
	$path1="product_img/".$_FILES["pimage1"]["name"];
	$type=$_FILES["pimage1"]["type"];
	$size=$_FILES["pimage1"]["size"]/1024;
	move_uploaded_file($tmp1,$path1);

    //image uplode2 here..
	$tmp2=$_FILES["pimage2"]["tmp_name"]; 
	$path2="product_img/".$_FILES["pimage2"]["name"];
	$type=$_FILES["pimage2"]["type"];
	$size=$_FILES["pimage2"]["size"]/1024;
	move_uploaded_file($tmp2,$path2);

	$pname=$_POST["pname"];

	$psize=$_POST["sizenm"];

	
	$price=$_POST["price"];

	$qty=$_POST["qty"];

	$pdesc=$_POST["pdescription"];
	$cdate=date("d/m/y");
    $ctime=date("H:i:s a");


    $ins="insert into addproduct(cat_id,subcat_id,pro_img,pro_img1,pro_img2,pro_name,size_id,price,quantity,description,created_date,created_time)values('$catnm','$subcatnm','$path','$path1','$path2','$pname','$psize','$price','$qty','$pdesc','$cdate','$ctime')"; 

	 $ex=$con->query($ins);

	 if($ex)
	 {
	 echo "<script>
	 alert('Product Added succefully')

	 window.location='showproduct.php';
	 
	 </script>";
	 }

	 else
	 {
      
	 echo "<script>
	 alert('Product Not Added succefully')

	 window.location='addproduct.php';
	 
	 </script>";
	 }
	
	
	  
}




?>
<!DOCTYPE HTML>
<html>
<head>
<title>Add Product</title>
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

				
					<h2 class="title1">Add Product here!</h2>
					


					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							
							<h4>Add Product Forms :</h4>

						


						</div>
							<div class="form-body">
								<form method="post" enctype="multipart/form-data">

									
									<div class="form-group"> 
                            <label for="exampleInputEmail1">Select category</label> 
                            
                            
                            <select name="catnm"  class="form-control" id="exampleInputEmail1" required>
                            
                            <option value="">-select Category-</option>
                            
                          <?php

                    $sel="select * from addcategory";

                    $ex=$con->query($sel);

                    while($fet=$ex->fetch_array())

                    {


                          ?>  
                          
                            
                     <option value="<?php echo $fet["cat_id"];?>"><?php echo $fet["cat_name"];?></option>
                            
                     <?php
                     }

                     ?>      
                            
                            
                            
                            
                            </select> 
                            
                             </div>    

 <div class="form-group"> 
                            <label for="exampleInputEmail1">Select category</label> 
                            
                            
                            <select name="subcatnm"  class="form-control" id="exampleInputEmail1" required>
                            
                            <option value="">-select SubCategory-</option>
                            
                          <?php

                    $sel="select * from addsubcategory";

                    $ex=$con->query($sel);

                    while($fet=$ex->fetch_array())

                    {


                          ?>  
                          
                            
                     <option value="<?php echo $fet["subcat_id"];?>"><?php echo $fet["subcat_name"];?></option>
                            
                     <?php
                     }

                     ?>      
                            
                            
                            
                            
                            </select> 
                            
                             </div>    






									<div class="form-group"> 

<label>Product Image :<span class="fa fa-image"></span></label> 

<input type="file" name="pimage"  required=""><br>

</div>
<div class="form-group"> 

<label>Product Image1 :<span class="fa fa-image"></span></label> 

<input type="file" name="pimage1"  required=""><br>

</div>
<div class="form-group"> 

<label>Product Image2 :<span class="fa fa-image"></span></label> 

<input type="file" name="pimage2"  required=""><br>

</div>



<div class="form-group"> 
										<label for="exampleInputEmail1">Enter Product Name</label> 


										<input type="text" name="pname" value="" class="form-control" id="exampleInputEmail1" placeholder="Product name" required>

									</div> 

								<div class="form-group"> 
                            <label for="exampleInputEmail1">Select Size</label> 
                            
                            
                            <select name="sizenm"  class="form-control" id="exampleInputEmail1" required>
                            
                            <option value="">-select Size-</option>
                            
                          <?php

                    $sel="select * from addsize";

                    $ex=$con->query($sel);

                    while($fet=$ex->fetch_array())

                    {


                          ?>  
                          
                            
                     <option value="<?php echo $fet["size_id"];?>"><?php echo $fet["sizename"];?></option>
                            
                     <?php
                     }

                     ?>      
                            
                            
                            
                            
                            </select> 
                            
                             </div>    





									
                            
                             
									

									<div class="form-group"> 
										<label for="exampleInputEmail1">Enter Product Price</label> 


										<input type="text" name="price" value="" class="form-control" id="exampleInputEmail1" placeholder="Product Price" required>

									</div>  


									
									<div class="form-group"> 
										<label for="exampleInputEmail1">Enter Product Quantity</label> 


										<input type="text" name="qty" value="" class="form-control" id="exampleInputEmail1" placeholder="Product Qty" required>

									</div>  


									<div class="form-group"> 
										<label for="exampleInputEmail1">Enter Product Discription</label> 


										<textarea name="pdescription"  class="form-control" id="exampleInputEmail1" placeholder="Product Description" required>
</textarea>
									</div>                        
                            
                            
                   
	                            
	 <input type="submit" name="addproduct"  value="addproduct" class="btn btn-success">
	



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