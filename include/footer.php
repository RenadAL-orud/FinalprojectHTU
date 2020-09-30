<!-- Footer -->

		<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row">
						
						<!-- About -->
						<div class="col-lg-8 footer_col">
							<div class="footer_about">
								<div class="footer_logo">
									<a href="#">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<div class="footer_logo_icon"><img src="images/logo_2.png" alt=""></div>
											<div>Naya Cosmetics</div>
										</div>
									</a>		
								</div>
								<div class="footer_about_text">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3391.856737571614!2d35.905925376029515!3d31.774393125704364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca9dd16959321%3A0x82f6fb9c2089ba2c!2zTmF5YSBGYXJtIC0g2YXYstix2LnYqSDZhtin2YrYpw!5e0!3m2!1sen!2sjo!4v1600717038910!5m2!1sen!2sjo" width="600" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
								</div>
							</div>
						</div>

						

						<!-- Footer Contact -->
						<div class="col-lg-4 footer_col">
							<div class="footer_contact">
								
								
								<div class="footer_social">
									<div class="footer_title">Social</div>
									<ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
									<div class="container ">
  
  <p>
Hello Customer, you have Options to contact Us <span class="a"><img src="images/face.png"></span></p>
  
  <input type="submit" name="Send" id="WorkingHours" value="WorkingHours" onclick="WorkingHours()"> 

  <input type="submit" name="Send" id="Phone" value="Phone"onclick="Phone()"> 
  <input type="submit" name="Send" id="Email" value="Email" onclick="Email()"> 
  <input type="submit" name="Send" id="Location" value="Location" onclick="Location()"> 
  <p id="demo"></p>
</div>

								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Naya Cosmetics</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
								<nav class="footer_nav ml-md-auto order-md-2 order-1">
									<ul class="d-flex flex-row align-items-center justify-content-start">
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<?php 

?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>




.container .a img {

  max-width: 60px;
  width: 6%;
  margin-right: 20px;
  border-radius: 50%;
  margin-left: 12px;
}

p{
        font-family: cursive
}
input {
    border: solid;
    border-radius: 23px;
     font-family: cursive
}
}
</style>
    <title></title>



</head>
<body>





















</body>
</html>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
       <script>
function Phone() {
  var greeting;
 var Phone= $("#Phone").val();

      $.ajax(
                            {
                                type: "POST",
                                url: "chat.php",
                                data :
                                {
                                     "Phone":Phone,
                                     
                                },
                                  success: function(response)
                                {
                               console.log(response);
                                  document.getElementById("demo").innerHTML = response;
                              

                            
                                } 


                            });

}

function Email() {
  var greeting;
 var Email= $("#Email").val();

      $.ajax(
                            {
                                type: "POST",
                                url: "chat.php",
                                data :
                                {
                                     "Email":Email,
                                     
                                },
                                  success: function(response)
                                {
                               console.log(response);
                                  document.getElementById("demo").innerHTML = response;
                              

                            
                                } 


                            });

}


function Location() {
  var greeting;
 var Location= $("#Location").val();

      $.ajax(
                            {
                                type: "POST",
                                url: "chat.php",
                                data :
                                {
                                     "Location":Location,
                                     
                                },
                                  success: function(response)
                                {
                               console.log(response);
                                  document.getElementById("demo").innerHTML = response;
                              

                            
                                } 


                            });

}

function WorkingHours() {
  var greeting;
 var WorkingHours= $("#WorkingHours").val();
   console.log(WorkingHours);
      $.ajax(
                            {
                                type: "POST",
                                url: "chat.php",
                                data :
                                {
                                     "WorkingHours":WorkingHours,
                                     
                                },
                                  success: function(response)
                                {
                               console.log(response);
                                  document.getElementById("demo").innerHTML = response;
                              

                            
                                } 


                            });

}




</script>

	</div>
		
</div>


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
<script src="js/custom.js"></script>
</body>
</html>