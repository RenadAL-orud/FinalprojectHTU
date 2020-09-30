<?php 
session_start();
  if (isset($_POST['placeorder'])) {

 $_SESSION['idcostumer'];
if (isset($_SESSION['cart2'])) {
	
  $idprdect=array();
  $conn=mysqli_connect("localhost","root","","electronictrade");
                                             if (!$conn) {
                                                die();
                                                }
   $total=0;
   foreach ($_SESSION['cart2'] as $key => $value) {

     $qure4="SELECT * FROM prodect WHERE idprodect=$value";
       $result4= mysqli_query($conn,$qure4);
       $product =mysqli_fetch_assoc($result4);
        $total=$total+$product['priceprodect'];
        array_push($idprdect,$product['idprodect']);
                          
                       }
                       $a=array_count_values($idprdect);
                      
                    
                      $idprdect = implode(" , ",$idprdect);
                         echo $idprdect;
                      
                        $m=array_count_values($_SESSION['cart2']);
                         $m = implode(" , ",$m);
                        $_SESSION['m']=$m;
                       echo $m;
                      
                      $ar=array(); 
   foreach ($a as $key => $value) {
   array_push($ar,$key);

   }
   $idprdect= implode(" , ",$ar);
   $_SESSION['idprdect']=$idprdect;
        
      if ( isset($_POST['placeorder'])){
      	 $qure="INSERT INTO `order` ( `costumerid`, `prodectid`, `qtyorder`, `paymethed`, `total`) 
       VALUES ('{$_SESSION['idcostumer']}', '".$idprdect."', '".$m."', 'cache', '$total')"; 
       echo $qure;
         mysqli_query($conn,$qure);
         header("location:success.php");
         $note= "<div class='alert alert-warning' role='alert'>
                   <h4 class='alert-heading'>Well done!</h4>
                   <p>
                  
You have been registered with success. We will communicate with you to help you deliver the product successfully
Product delivery takes from 3 to five days.</p>
                   <hr>
   
                  </div>";
                   }
   
                     
                        }
        
        }

     


 if (isset($_POST['LOGOUT'])) {
 	session_start();
unset($_SESSION['cart2']);
header("location:index.php");
 }
                      /*   $qure="SELECT * FROM `order`";
                         $result= mysqli_query($conn,$qure);
                        while ($order =mysqli_fetch_assoc($result))
                        {
                          $order_id=$order['order_id'];
                      
                        $order_id=$order['order_id'];
                        $_SESSION['id']=$order_id;
                       
                        }
     */
                       ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Checkout</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
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
						<div> Naya Cosmetics</div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="#">Women</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Kids</a></li>
					<li><a href="#">Home Deco</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				
				 <!-- User -->
        <div class="user"><a href="a.php"><div><img src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div><?php 
         if (isset($_SESSION['cart2'])) {
           # code...
        
        echo  count($_SESSION['cart2']);}?></div></div></a></div>
         
        <!-- Cart -->
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
					<div class="home_title">Checkout</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="index.php">Home</a></li>
							<li>Checkout</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Checkout -->

		<div class="checkout">
			<div class="container">
				<div class="row">
					
					<!-- Billing -->
					<div class="col-lg-6">
						<div class="billing">
							<div class="checkout_title">Billing</div>
							<div class="checkout_form_container">
								<?php
								  $conn=mysqli_connect("localhost","root","","electronictrade");
                                             if (!$conn) {
                                                die();
                                                }
                        $qure="select * from    customer  where idcostumer  = {$_SESSION['idcostumer']} ";
                        $result= mysqli_query($conn,$qure);
                        while($user =mysqli_fetch_assoc($result)){
                       
								echo"<form id='checkout_form' class='checkout_form' method='post'>
									<div class='row'>
										<div class='col-lg-12'>
											
											<input type='text' id='checkout_name' class='checkout_input' placeholder='First Name'
											 required='required' value='{$user['name']}'>
										</div>
										
									</div>
									<div>
									
										<input type='text' id='checkout_company' placeholder='Email' class='checkout_input'
										 value='{$user['email']}'>
									</div>
									<div>
										<!-- Address -->
										<input type='text' id='checkout_company' placeholder='Address' class='checkout_input' 
										 value='{$user['address']}'>
									</div>
									
									
									
									<div>
										
										<input type='phone' id='checkout_phone' class='checkout_input' placeholder='Phone No.' 
										required='required'  value='{$user['phone']}'>
									</div>
									
									
								</form>";
							}
							?>
							<br>
							<form method="post">
								<button type="submit" class="btn btn-info"name="LOGOUT" style="color: #ffff;
                                  FONT-FAMILY: cursive;
                                  font-size: 20px; ">LOGOUT</button>
							</form>
							</div>
						</div>
					</div>
                    <?php 

            if (isset($_SESSION['cart2'])) {
               $conn=mysqli_connect("localhost","root","","electronictrade");
                                             if (!$conn) {
                                                die();
                                                }
                                      
                        $count = 0;
                        $total=0;
                  foreach ($_SESSION['cart2'] as $code) {
                  $qure4="SELECT * FROM prodect WHERE idprodect='$code'";
                  $result4= mysqli_query($conn,$qure4);
                   $product =mysqli_fetch_assoc($result4);
                    $total=$total+$product['priceprodect'];
                  }}?>
					<!-- Cart Total -->
					<div class="col-lg-6 cart_col">
						
						<div class="cart_total">
							<div class="cart_extra_content cart_extra_total">
								<div class="checkout_title">Cart Total</div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Subtotal</div>
										<div class="cart_extra_total_value ml-auto"><?php  if(isset($total)){
                    echo $total;   echo"JOD";}
                      else {
                        echo "0" ;echo"JOD";
                      }?></div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Shipping</div>
										<div class="cart_extra_total_value ml-auto">Free</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto"><?php  if(isset($total)){
                    echo $total;   echo"JOD";}
                      else {
                        echo "0" ;echo"JOD";
                      }?></div>
									</li>
								</ul>
								<div class="payment_options">
									<div class="checkout_title">Payment</div>
									<ul>
										
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="payment_radio" class="payment_radio">
												<span class="radio_mark"></span>
												<span class="radio_text">Cash on Delivery</span>
											</label>
										</li>
										
									</ul>
								</div>
								<div class="cart_text">
									<p><?php if(isset($note)){
										echo $note;
									}?></p>
								</div>
								<form method="post">
								<button type="submit" class="checkout_button trans_200"name="placeorder" style="color: #ffff;
                         FONT-FAMILY: cursive;
                         font-size: 20px; ">place order</button>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include_once('include/footer.php'); 
  ?>