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




<html lang="en">
<head>
<title>Category</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/category.css">
<link rel="stylesheet" type="text/css" href="styles/category_responsive.css">
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
">Naya Cosmetics </div>
				</div>
			</a>	
		</div>
		<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
		<nav class="main_nav">
			<ul class="d-flex flex-row align-items-start justify-content-start">
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
		</nav>
		<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
			<!-- Search -->
			<div class="header_search">
				<form action="#" id="header_search_form">
					<input type="text" class="search_input" placeholder="Search Item" required="required">
					<button class="header_search_button"><img src="images/search.png" alt=""></button>
				</form>
			</div>
			<!-- User -->
			
			<!-- Cart -->
				   <div class="user"><a href="a.php"><div><img src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div><?php 
                   if (isset($_SESSION['cart2'])) {
           # code...
        
                echo  count($_SESSION['cart2']);}?></div></div></a></div>
                 <div class="user"><a href="love.php"><div><img src="images/heart_2.svg" alt="https://www.flaticon.com/authors/freepik"><div><?php 
                   if (isset($_SESSION['love'])) {
           # code...
        
                echo  count($_SESSION['love']);}?></div></div></a></div>
				<!-- Phone -->
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
				<?php
				$conn=mysqli_connect("localhost","root","","electronictrade");
                                             if (!$conn) {
                                                die();
                                                }    
				 $qure="SELECT * FROM  category WHERE idcategory={$_GET['id']} ";
                 $result= mysqli_query($conn,$qure);
                while($category =mysqli_fetch_assoc($result)){
                	echo"<div class='home_title'>{$category['namecategory']}</div>";
                } ?>
				
				<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
					<ul class="d-flex flex-row align-items-start justify-content-start text-center">
						<li><a href="#">Home</a></li>
							<?php
				$conn=mysqli_connect("localhost","root","","electronictrade");
                                             if (!$conn) {
                                                die();
                                                }    
				 $qure="SELECT * FROM  category WHERE idcategory={$_GET['id']} ";
                 $result= mysqli_query($conn,$qure);
                while($category =mysqli_fetch_assoc($result)){
                	echo"<li><a href='#'>{$category['namecategory']}</a></li></div>";
                } ?>
						
						
					</ul>
				</div>
			</div>
		</div>
	</div>

         
		<div class="products" id="four">
		<div class="container">
			<div class="row products_bar_row">
				<div class="col">
					
				</div>
			</div>

			<div class="row products_row products_container grid">
				<?php
				if (isset($_GET['id'])) {
				
				$conn=mysqli_connect("localhost","root","","electronictrade");
                                             if (!$conn) {
                                                die();
                                                }    
				 $qure="SELECT * FROM   prodect WHERE catid={$_GET['id']} AND statuss='allowed' ORDER BY priceprodect DESC  LIMIT 6, 12";
                 $result= mysqli_query($conn,$qure);
                while($prodect =mysqli_fetch_assoc($result)){
				
				
				echo"<div class='col-xl-4 col-md-6 grid-item new'>
			     		<div class='product'>
						<div class='product_image'><img src='sufee-admin-dashboard-master/image/prodect/{$prodect['imageprodect']}' alt='' style='width: 100%;'></div>
				 		<div class='product_content'>
						<div class='product_info d-flex flex-row align-items-start justify-content-start'>
								<div>
									<div>
										<div class='product_name'><a href='product.php?id={$prodect['idprodect']}'>{$prodect['nameprodect']}</a></div>
										
									</div>
								</div>
								<div class='ml-auto text-right'>
									<div class='rating_r rating_r_4 home_item_rating'><i></i><i></i><i></i><i></i><i></i></div>
									<div class='product_price text-right'>JOD{$prodect['priceprodect']}<span>.00</span></div>
									<div class='product_price text-right'>";?><?php if ($prodect['HS']=='hot'){
										echo"<span style='color:red'>{$prodect['HS']}</span>";
									}
                                      elseif($prodect['HS']=='sale') {
							                	echo"<span style='color:green'>{$prodect['HS']}</span>";
							                }
                              else {
                                  echo"<span style='color:blue;'>{$prodect['HS']}</span>";
                              }
									?>
										
									</div>
								</div>

							<?php echo"</div>
							<br><br><br>
							<div class='product_buttons'>
								<div class='text-right d-flex flex-row align-items-start justify-content-start'>
									<div class='product_button product_fav text-center d-flex flex-column align-items-center justify-content-center'>
										<div><div><a href='product.php?id={$prodect['idprodect']}'><img src='images/heart_2.svg' class='svg' alt=''></a><div>+</div></div></div>
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
                }

				} ?>

			</div>

		</div>
	</div>
</body>

				<?php include_once('include/footer.php'); 
  ?>