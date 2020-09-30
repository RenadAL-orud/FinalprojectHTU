<?php
session_start();
ob_start();
  

if (!isset($_SESSION['love'])) {
     $_SESSION['love']=array();
      $_SESSION['size2']=array();
}
if (!isset($_SESSION['size2'])) {
    
      $_SESSION['size2']=array();
}
if (isset($_GET['idz'])) {

    array_push($_SESSION['cart2'],$_GET['idz']);
     array_push($_SESSION['size1'],$_GET['idw']);
     header("location:love.php");
    // print_r($_SESSION['size2']);
   

      
 }
 
  if (isset($_GET['id'])){
  
   unset($_SESSION['love']);

 }
  if (isset($_GET['id1'])){
  $a=$_GET['id1'];
   unset($_SESSION['love'][$a]);
 }


//print_r($_SESSION['size2']);
//die();



    ?>





<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

<!-- Menu -->


<div class="menu">

 
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
          <li><a href="#">Women</a></li>
          <li><a href="#">Men</a></li>
          <li><a href="#">Kids</a></li>
          <li><a href="#">Home Deco</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
       
        <!-- User -->
        <div class="user"><a href="a.php"><div><img src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div><?php 
         if (isset($_SESSION['cart2'])) {
           # code...
        
        echo  count($_SESSION['cart2']);}?></div></div></a></div>
        <div class="user"><a href="love.php"><div><img src="images/heart_2.svg" alt="https://www.flaticon.com/authors/freepik"><div><?php 
         if (isset($_SESSION['love'])) {
           # code...
        
        echo  count($_SESSION['love']);}
         ?></div></div></a></div>
         
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
          <div class="home_title">Shopping  Favorite</div>
          <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
            <ul class="d-flex flex-row align-items-start justify-content-start text-center">
              <li><a href="index.php">Home</a></li>
              <li>Your 
            Favorite </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Cart -->

    <div class="cart_section">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="cart_container">
              
              <!-- Cart Bar -->
                <div class="cart_bar">
                <ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
                <li class="mr-auto">Product</li>
                 
                 
                  <li>Size</li>
                   <li>Cart(+)</li>
                  <li>Price</li>
                  <li></li>
                  
                  
                 </ul>
                 </div>

              <!-- Cart Items -->
              <div class="cart_items">
                <ul class="cart_items_list">
                <?php 

            if (isset($_SESSION['love'])) {
               $conn=mysqli_connect("localhost","root","","electronictrade");
                                             if (!$conn) {
                                                die();
                                                }
                        $num=1;                  
                        $count = 0;
                        $total=0;
                   foreach ($_SESSION['love'] as $x=> $code) {
                  $qure4="SELECT * FROM prodect WHERE idprodect='$code'";
                  $result4= mysqli_query($conn,$qure4);
                  $product =mysqli_fetch_assoc($result4);
                  $total=$total+$product['priceprodect'];
                  $a=$product['idprodect'];
                     
                            $qure3="SELECT  vendor.namevendore 
                               FROM  vendor
                               INNER JOIN  prodect 
                               ON  vendor.idvendore =prodect.vendorname 
                               WHERE prodect.idprodect='$a'";
                                 $result3= mysqli_query($conn,$qure3);
                                 $vendor =mysqli_fetch_assoc($result3);
                    
                    
                 
                   echo"  <li class='cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start'>
                    <div class='product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto'>
                      <div><div class='product_number'>$num";?><?php $num++ ?><?php echo"</div></div>
                      <div><div class='product_image'><img src='sufee-admin-dashboard-master/image/prodect/{$product['imageprodect']}' alt='' style='width: 100%;'></div></div>
                      <div class='product_name_container'>
                        <div class='product_name'><a href='product.html'>{$product['nameprodect']}</a></div>
                        <div class='product_text'>{$vendor['namevendore']}</div>
                      </div>
                        
                      
                      
                    </div>
                    ";
                    ?>
                    
                    
                   <?php echo '<div>'.$_SESSION['size2'][$count] . '</span></div>';
                    $b=''.$_SESSION['size2'][$count] . '';
                   $count++;
                   echo " <div class='product_name_container'>
                        <div class='product_name'><form method='post'><a href='love.php?idz=$a&idw=$b' style='color: green;
    font-size: 13px;
    font-family: cursive;
}'>Add to Cart</a></form></div>
                        
                      </div>";
                   ?>
                   <?php
                     echo "<div class='product_price product_text'><span></span>{$product['priceprodect']}.00JOD</div>

                     <div class='product_price product_text'><span></span>
                      
                    
                     <a href='love.php?id1=$x'><i class='fa fa-close'style='color:red'></i></a>
                    </div>

                    
                   
                  </li>


                   

                    
                   
                 
                  
";

}
                 echo " <div class='product_total product_text'>Total:<span></span>$total</div>";

 
}
  
                  ?>
                </ul>
              </div>

            
                <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
                <div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                <div class="button button_clear trans_200"><a href="love.php?id">clear Favorite</a></div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 

            if (isset($_SESSION['love'])) {
               $conn=mysqli_connect("localhost","root","","electronictrade");
                                             if (!$conn) {
                                                die();
                                                }
                                      
                        $count = 0;
                        $total=0;
                  foreach ($_SESSION['love'] as $code) {
                  $qure4="SELECT * FROM prodect WHERE idprodect='$code'";
                  $result4= mysqli_query($conn,$qure4);
                   $product =mysqli_fetch_assoc($result4);
                    $total=$total+$product['priceprodect'];
                  }}?>
           <div class="row cart_extra_row">
       
           <div class="col-lg-6 cart_extra_col">
            <div class="cart_extra cart_extra_2">
            <div class="cart_extra_content cart_extra_total">
            <div class="cart_extra_title">  
              Favorite Total</div>
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
                
              </div>
            </div>
          </div>
      
        </div>

      </div>
    </div>
 
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  
   <script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/cart.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>