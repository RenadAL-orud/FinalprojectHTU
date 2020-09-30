<?php
if (!isset($_COOKIE['visits'])) 
	$_COOKIE['visits'] = 0;
$visits = $_COOKIE['visits'] + 1;
setcookie('visits',$visits);
 $_COOKIE['visits'] = 0;
if ($visits > 1) {
  //echo("This is visit number $visits.");
} else { // First visit
 // echo('Welcome to my Website! Click here for a tour!');

}

?>
<?php
session_start();
ob_start();


if (!isset($_SESSION['cart2'])) {
     $_SESSION['cart2']=array();
      $_SESSION['size1']=array();
}
if (!isset($_SESSION['size1'])) {
    
      $_SESSION['size1']=array();
}
 if (isset($_POST['addtocart'])) {

    array_push($_SESSION['cart2'],$_POST['addtocart']);
     array_push($_SESSION['size1'],$_POST['radio']);


}
?>
<?php



if (!isset($_SESSION['love'])) {
     $_SESSION['love']=array();
      $_SESSION['size2']=array();
}
if (!isset($_SESSION['size2'])) {
    
      $_SESSION['size2']=array();
}
 if (isset($_POST['addtocart'])) {

    array_push($_SESSION['love'],$_POST['addtocart']);
     array_push($_SESSION['size2'],$_POST['radio']);


}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Little Closet</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles11.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
 
<style type="text/css">
 

.zoom {




   animation-name: example;
  animation-duration: 4s;
   transform: scale(0);
     animation-iteration-count: infinite;
}

@keyframes example {
  from { transform: scale(0);}
  to { transform: scale(1);}
}


</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
             $(document).ready(function()
            {
                $("#headerSearch").keyup(function(event)
                {
                   event.preventDefault();
                	//alert("dd");

                    //get selected parent option 
                    var admin_id = $("#headerSearch").val();
                   // alert(admin_id);
                    
                    

                  
                                      $.ajax(
                            {

                                type: "GET",
                                url:"sarch.php?admin_id=" + admin_id,
                                success: function(data)
                                {
                                     $("#old").hide();
                                        $("#dd").show();
                                       console.log(data);
                                       var data1=JSON.parse(data);
                                       console.log(data1);
                                        if (data1.length==0) {
                        //alert("errr");
                    }
                                  
                                     
                                     else  {
                                       
                                          $.each(data1, function( index, value ) {
                                           var admin_id=data1[index]['idprodect'];
                                        

                               

                                             $("#dd").append("<div class='col-4'><div class='product'><div class='product_image'><img src='sufee-admin-dashboard-master/image/prodect/"+data1[index]['imageprodect']+"'></div><div class='product_content'><div class='product_info d-flex flex-row align-items-start justify-content-start'><div><div><div class='product_name'> <a href='product.php?id="+data1[index]['idprodect']+"'>"+data1[index]['nameprodect']+"</a></div><div class='product_category'> <a href=''></a></div></div></div><div class='ml-auto text-right'><div class='rating_r rating_r_4 home_item_rating'><i></i><i></i><i></i><i></i><i></i></div><div class='product_price text-right'>JOD"+data1[index]['priceprodect']+"<span>.00</span></div></div></div><div class='product_buttons'><div class='text-right d-flex flex-row align-items-start justify-content-start'><div class='product_button product_fav text-center d-flex flex-column align-items-center justify-content-center'><div><div> <a href='product.php?id="+data1[index]['idprodect']+"'><img src='images/heart_2.svg' class='svg'><div></a>+</div></div></div></div><div class='product_button product_cart text-center d-flex flex-column align-items-center justify-content-center'>	<div><div><a href='product.php?id="+data1[index]['idprodect']+"'><img src='images/cart.svg' class='svg' ><div></a>+</div></div></div></div></div></div></div></div>");
											
									
										
									
										
								
						
								
								
										
									
										
								
									
										
											
											
                                        

                            
                                        var nameprodect=data1[index]['nameprodect']; 
                                        var imageprodect=data1[index]['imageprodect']; 
                                        var priceprodect=data1[index]['priceprodect']; 
                                        var decprodect=data1[index]['decprodect']; 
                                      console.log(imageprodect);
                                       
                                          
                                       



                                      });
                                        }
                                     
      
               
            
                                     

                                    
                                    
                                }


                            });
                                   
                });

            });

       
        </script>











</head>
<body>

<!-- Menu -->

<div class="menu">

  <!-- Search -->
  <div class="menu_search">
    <form action="#" id="menu_search_form" class="menu_search_form">
      <input type="text" class="search_input" placeholder="Search Item" required="required">
      <button class="menu_search_button"><img src="images/search.png" alt=""></button>
    </form>
  </div>
  <!-- Navigation -->
  <div class="menu_nav">
    <ul>
    <?php 
      $conn=mysqli_connect("localhost","root","","electronictrade");
                                                 if (!$conn) {
                                                    die();
                                                    }
                                                     $qure="SELECT * FROM  category ";
                                                     $result= mysqli_query($conn,$qure);
                                                   while($category =mysqli_fetch_assoc($result)){
                                                   echo "<li><a href='categoryall.php?id={$category['idcategory']}'>
                                                   {$category['namecategory']}</a></li>";}
    ?>
      <li><a href="index.php">Contact</a></li>
    </ul>
  </div>
  <!-- Contact Info -->
  <div class="menu_contact">
    <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
      <div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
      <div>+962 79-456-200</div>
    </div>
    <div class="menu_social">
      <ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
</div>

<div class="super_container">

  <!-- Header -->

  <header class="header">
    <div class="header_overlay"></div>
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
      <div class="logo">
        <a href="#">
          <div class="d-flex flex-row align-items-center justify-content-start">
            <div><img src="images/logo_1.png" alt=""></div>
            <div style="color: #37947f;
                         FONT-FAMILY: cursive;
                          "> Naya Cosmetics</div>

          </div>
        </a>  
      </div>
      <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
      <nav class="main_nav">
        <ul class="d-flex flex-row align-items-start justify-content-start">
          <li class="active"><a href="#">Beautify the Body</a></li>
          <li><a href="#">
                      Beautification of the Face</a></li>
          <li><a href="#">Beautify Hair</a></li>
          <li><a href="#">Home Deco</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
        <!-- Search -->
        <div class="header_search">
          <form action="#" id="header_search_form">
            <input type="text" class="search_input" placeholder="Search Item" required="required"id="headerSearch">
            <button class="header_search_button"><img src="images/search.png" alt=""></button>
          </form>
        </div>
        <!-- User -->
        <div class="user"><a href="#"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div><?php
if (isset($visits)) {
   echo $visits;
}

?></div></div></a></div>
        <!-- Cart -->
             <div class="user"><a href="a.php"><div><img src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div><?php 
                   if (isset($_SESSION['cart2'])) {
           # code...
        
                echo  count($_SESSION['cart2']);}?></div></div></a></div>
        <!-- Phone -->
        <div class="header_phone d-flex flex-row align-items-center justify-content-start">
          <div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
          <div>+962 79-456-200</div>
        </div>
      </div>
    </div>
  </header>










	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<!-- Home Slider -->
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">
					
					
                      <?php
                      $conn=mysqli_connect("localhost","root","","electronictrade");
                                                 if (!$conn) {
                                                    die();
                                                    }                         
                     $qure="SELECT * FROM  category ";
                     $result= mysqli_query($conn,$qure);
                    while($category =mysqli_fetch_assoc($result)){




                    echo "<div class='owl-item'>
						<div class='background_image' style='background-image:
						url(sufee-admin-dashboard-master/image/{$category['imagecatgory']}'></div>
						<div class='container fill_height'>
							<div class='row fill_height'>
								<div class='col fill_height'>
									<div class='home_container d-flex flex-column align-items-center justify-content-start'>
										<div class='home_content'>
									

											
										</div>

									</div>
								</div>
							</div>
						</div>	
						
						<div class='container fill_height'>
							<div class='row fill_height'>
								<div class='col fill_height'>
									<div class='home_container d-flex flex-column align-items-center justify-content-start'>
										<div class='home_content'>
											
											<div class='home_items'>
											
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

				
";
}


                        ?>

										

					<!-- Slide -->
					
			

				</div>
				<div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
				<div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

				<!-- Home Slider Dots -->
				
				<div class="home_slider_dots_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_slider_dots">
									<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
										<li class="home_slider_custom_dot active">01</li>
										<li class="home_slider_custom_dot">02</li>
										<li class="home_slider_custom_dot">03</li>
										<li class="home_slider_custom_dot">04</li>
									</ul>
								</div>
							</div>
						</div>
					</div>	
				</div>

			</div>
		</div>

		<!-- Products -->

		<div class="products"id="old">
			<div class="container" >
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section_title text-center  zoom" style="color:blue; FONT-FAMILY: cursive;">New on Naya  Cosmetics 2020</div>
					</div>
				</div>
				<div class="row page_nav_row">
					<div class="col">
						<div class="page_nav">
							<ul class="d-flex flex-row align-items-start justify-content-center">
								
									<?php

									           $conn=mysqli_connect("localhost","root","","electronictrade");
                                                 if (!$conn) {
                                                    die();
                                                    }                         
                     $qure="SELECT * FROM  category ";
                     $result= mysqli_query($conn,$qure);
                    while($category =mysqli_fetch_assoc($result)){
									 echo"<li>
									 <a href='categoryall.php?id={$category['idcategory']}'>{$category['namecategory']}</a></li>" ;}
								                 ?>
								
								<li class='active'> <a href="index.php">Home Deco</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row products_row">
					
					<?php $conn=mysqli_connect("localhost","root","","electronictrade");
                                                 if (!$conn) {
                                                    die();
                                                    }
                                                     $qure="SELECT * FROM  prodect WHERE statuss='allowed' AND HS='new' ORDER BY idprodect DESC LIMIT 0, 6";
                                          $result= mysqli_query($conn,$qure);
                                          while($prodect =mysqli_fetch_assoc($result)){
                                          	  $a=$prodect['idprodect'];

                                          	 $qure2="SELECT  category.namecategory 
                               FROM  category
                               INNER JOIN  prodect 
                               ON  category.idcategory=prodect.catid 
                               WHERE prodect.idprodect='$a'";
                          
                                            
                            $result2= mysqli_query($conn,$qure2);
                           $catname =mysqli_fetch_assoc($result2);
                            $qure3="SELECT  vendor.namevendore 
                               FROM  vendor
                               INNER JOIN  prodect 
                               ON  vendor.idvendore =prodect.vendorname 
                               WHERE prodect.idprodect='$a'";
                          
                                            
                            $result3= mysqli_query($conn,$qure3);
                           $vendor =mysqli_fetch_assoc($result3);
                                          	echo "<div class='col-xl-4 col-md-6'>
						<div class='product'>
							<div class='product_image'><img src='sufee-admin-dashboard-master/image/prodect/{$prodect['imageprodect']}' alt='' style='width: 100%;'></div>
							<div class='product_content'>
								<div class='product_info d-flex flex-row align-items-start justify-content-start'>
									<div>
										<div>
											<div class='product_name'><a href='product.php?id={$prodect['idprodect']}'>{$prodect['nameprodect']}</a></div>
											<div class='product_category'>In <a href='product.php?id={$prodect['idprodect']}'>{$catname['namecategory']}</a></div>
											<div class='product_category'style='color: #70b9b9;'>Brand: <a href='category.html'style='color: #70b9b9;'>{$vendor['namevendore']}</a></div>
										</div>
									</div>";
									?>
									<?php
									echo"<div class='ml-auto text-right'>
										<div class='rating_r rating_r_4 home_item_rating'><i></i><i></i><i></i><i></i><i></i></div>
										<div class='product_price text-right'>JOD{$prodect['priceprodect']}<span>.00</span></div>
										<div class='product_price text-right'>";?><?php if ($prodect['HS']=='hot'){
											echo"<span style='color:red'>{$prodect['HS']}</span>";
											
							                }
							                elseif($prodect['HS']=='sale') {
							                	echo"<span style='color:green'>{$prodect['HS']}</span>";
							                }
                              else {
                                  echo"<span style='color:blue'>{$prodect['HS']}</span>";
                              }
																					?>
																						
																					</div>
									</div>
								
									<?php 
								 echo"</div>
								<div class='product_buttons'>
									<div class='text-right d-flex flex-row align-items-start justify-content-start'>
										<div class='product_button product_fav text-center d-flex flex-column align-items-center justify-content-center'>
											<div><div><img src='images/heart_2.svg' class='svg' alt=''><div>+</div></div></div>
										</div>
										<div class='product_button product_cart text-center d-flex flex-column align-items-center justify-content-center'>
											<div><div><a href='product.php?id={$prodect['idprodect']}'><img src='images/cart.svg' class='svg' alt=''></a><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
";

                                          } ?>
					
			

			

					
					
				</div>


				
			</div>
		</div>
    <div class='container' >
             <div class='row' id="dd">
            
                   

                  
               
             </div></div>

		<!-- Boxes -->

		<div class="boxes">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">

							<!-- Box -->

									
					<?php $conn=mysqli_connect("localhost","root","","electronictrade");
                                                 if (!$conn) {
                                                    die();
                                                    }
                                                     $qure="SELECT * FROM  category ";
                                          $result= mysqli_query($conn,$qure);
                                          while($category =mysqli_fetch_assoc($result)){
							echo"<div class='box'>
								<div class='background_image' style='background-image:url(sufee-admin-dashboard-master/image/{$category['imagecatgory']}'></div>
								<div class='box_content d-flex flex-row align-items-center justify-content-start'>
									<div class='box_left'>
										<div class='box_image'>
											<a href='categoryall.php?id={$category['idcategory']}'></a>
												<div class='background_image' style='background-image:url(sufee-admin-dashboard-master/image/{$category['imagecatgory']}'></div>
											</a>
										</div>
									</div>
									<div class='box_right text-center'>
										<div class='box_title' style='color:#0e0202;'>{$category['namecategory']}</div>
									</div>
								</div>
							</div>";}


						?>
							

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Features -->

		<div class="features">
			<div class="container">
				<div class="row">
					
					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon"><img src="images/icon_1.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Fast Secure Payments</div>
							</div>
						</div>
					</div>

					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon ml-auto mr-auto"><img src="images/icon_2.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Premium Products</div>
							</div>
						</div>
					</div>

					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon"><img src="images/icon_3.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Free Delivery</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<?php include_once('include/footer.php'); 
  ?>