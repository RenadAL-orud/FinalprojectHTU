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
 //print_r($_SESSION['size1']);
 //die();

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
 if (isset($_POST['love'])) {

    array_push($_SESSION['love'],$_POST['love']);
    array_push($_SESSION['size2'],$_POST['radio']);


}
//print_r($_SESSION['size2']);
//die();
//echo $_POST['radio'];
//die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/flexslider/flexslider.css">
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">

<style>
/* The container */

</style>
</head>
<body>

<!-- Menu -->

<div class="menu">

<!-- Search -->

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
						<div>Naya Cosmetics

</div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				
				<!-- User -->
				   <div class="user"><a href="a.php"><div><img src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div><?php 
                   if (isset($_SESSION['cart2'])) {
           # code...
        
                echo  count($_SESSION['cart2']);}?></div></div></a></div>
          <div class="user"><a href="love.php"><div><img src="images/heart_2.svg" alt="https://www.flaticon.com/authors/freepik"><div><?php 
                   if (isset($_SESSION['love'])) {
           # code...
        
                echo  count($_SESSION['love']);}?></div></div></a></div>
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
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Product Page</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="index.php">Home</a></li>
							<?php 
							 $conn=mysqli_connect("localhost","root","","electronictrade");
                                                 if (!$conn) {
                                                    die();
                                                    }
                                                     $qure="SELECT * FROM  prodect WHERE idprodect ={$_GET['id']} ";
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
							 echo"<li>{$catname['namecategory']}</li>
							      <li>{$prodect['HS']}</li>";}?>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Product -->

		<div class="product">
			<div class="container">
				<div class="row">











<?php
				$conn=mysqli_connect("localhost","root","","electronictrade");
                                             if (!$conn) {
                                                die();
                                                }    
				 $qure="SELECT * FROM   prodect WHERE idprodect ={$_GET['id']} ";
                 $result= mysqli_query($conn,$qure);
                while($prodect =mysqli_fetch_assoc($result)){


                	echo "			<div class='col-lg-6'>
						<div class='product_image_slider_container'>
							<div id='slider' class='flexslider'>
								<ul class='slides'>
									<li>
										<img src='sufee-admin-dashboard-master/image/prodect/{$prodect['imageprodect']}' />
									</li>
									
							
								</ul>
							</div>
							<div class='carousel_container'>
								<div id='carousel' class='flexslider'>
									<ul class='slides'>
										<li>
									<div><img src='sufee-admin-dashboard-master/image/prodect/{$prodect['imageprodect']}' /></div>
									</li>
										
										
									</ul>
								</div>
								<div class='fs_prev fs_nav disabled'><i class='fa fa-chevron-up' aria-hidden='true'></i></div>
								<div class='fs_next fs_nav'><i class='fa fa-chevron-down' aria-hidden='true'></i></div>
							</div>
						</div>
					</div>

					<!-- Product Info -->
					<div class='col-lg-6 product_col'>
						<div class='product_info'>
							<div class='product_name'>{$prodect['nameprodect']}</div>
							<div class='product_category'>In <a href='category.html'>Category</a></div>
							<div class='product_rating_container d-flex flex-row align-items-center justify-content-start'>
								<div class='rating_r rating_r_4 product_rating'><i></i><i></i><i></i><i></i><i></i></div>
								<div class='product_reviews'>4.7 out of (3514)</div>
								<div class='product_reviews_link'><a href='#'>Reviews</a></div>
							</div>
							<div class='product_price'>JOD{$prodect['priceprodect']}<span>.00</span></div>";}
							?>
                          
                           
                     
			                <form method="post">

							    <div class="product_size">
								<div class="product_size_title">Select Size</div>
								
								<ul class="d-flex flex-row align-items-start justify-content-start">
									
									
								<?php	  $conn=mysqli_connect("localhost","root","","electronictrade");
                                             if (!$conn) {
                                                die();
                                                } 
                                            
         $qure="SELECT * FROM   prodect WHERE idprodect ={$_GET['id']} ";
                 $result= mysqli_query($conn,$qure);
                  while($prodect =mysqli_fetch_assoc($result)){
                        $links = $prodect['size'];
                        $links=explode(',',$links);
                            	 foreach($links as $key => $value){
                          	      	 echo"
                      <li>
                      <div class='form-check'>
                     <input type='radio' class='form-check-input' id='materialChecked2' name='radio'  value='$value'checked>
                     <label class='form-check-label' for='materialChecked2'>$value</label>
                     </div>
										
									     </li>


									";  
								
							
								
								}       
                         
							

							}
									?>
								
								</ul>
							</div>


                   

						<?php 

							$conn=mysqli_connect("localhost","root","","electronictrade");
                                             if (!$conn) {
                                                die();
                                                }    
				         $qure="SELECT * FROM   prodect WHERE idprodect ={$_GET['id']} ";
                         $result= mysqli_query($conn,$qure);
                         while($prodect =mysqli_fetch_assoc($result)){

						 echo"<div class='product_text'>
								<p>{$prodect['decprodect']}.</p>
							</div>
							<div class='product_buttons'>
								<div class='text-right d-flex flex-row align-items-start justify-content-start'>
									<div class='product_button product_fav text-center d-flex flex-column align-items-center justify-content-center'>
										<div><div> <button type='submit' name='love' value='{$prodect['idprodect']}' class='menu_search_button'><img src='images/heart_2.svg' class='svg' alt=''>
										</button><div>+</div></div></div>
									</div>
									<div class='product_button product_cart text-center d-flex flex-column align-items-center justify-content-center' >
										<div><div><button type='submit' name='addtocart' value='{$prodect['idprodect']}' class='menu_search_button'> <img src='images/cart.svg' class='svg'></button><div>+</div></div></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
";}



                ?>
                



			
					<!-- Product Image -->
		


















  
				</div>
			</div>
		</div>
		
		</form>



	

		<!-- Footer -->

<?php include_once('include/footer.php'); 
  ?>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
<script src="js/product.js"></script>
</body>
</html>