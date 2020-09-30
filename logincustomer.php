<style type="text/css">
    body {
    padding-top: 90px;
}
.panel-login {
    border-color: #ccc;
    -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
    -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
    box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
    color: #00415d;
    background-color: #fff;
    border-color: #fff;
    text-align:center;
}
.panel-login>.panel-heading a{
    text-decoration: none;
    color: #666;
    font-weight: bold;
    font-size: 15px;
    -webkit-transition: all 0.1s linear;
    -moz-transition: all 0.1s linear;
    transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
    color: #029f5b;
    font-size: 18px;
}
.panel-login>.panel-heading hr{
    margin-top: 10px;
    margin-bottom: 0px;
    clear: both;
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
    background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
    height: 45px;
    border: 1px solid #ddd;
    font-size: 16px;
    -webkit-transition: all 0.1s linear;
    -moz-transition: all 0.1s linear;
    transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
    outline:none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border-color: #ccc;
}
.btn-login {
    background-color: #59B2E0;
    outline: none;
    color: #fff;
    font-size: 14px;
    height: auto;
    font-weight: normal;
    padding: 14px 0;
    text-transform: uppercase;
    border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
    color: #fff;
    background-color: #53A3CD;
    border-color: #53A3CD;
}
.forgot-password {
    text-decoration: underline;
    color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
    text-decoration: underline;
    color: #666;
}

.btn-register {
    background-color: #1CB94E;
    outline: none;
    color: #fff;
    font-size: 14px;
    height: auto;
    font-weight: normal;
    padding: 14px 0;
    text-transform: uppercase;
    border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
    color: #fff;
    background-color: #1CA347;
    border-color: #1CA347;
}

</style>


<?php 
ob_start();

 $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }
   if (isset($_POST['Submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $Address=$_POST['address'];
     $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);


  
    if (!preg_match('/^[a-z]+$/i',$name)) {
                $error="Name Incorrect";

            }
            elseif (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
             $error1 = "You Entered An Invalid Email Format"; 
            }
          elseif (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8){
            $error2='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
          }
         elseif(!preg_match("/^[0-9]{3}[0-9]{4}[0-9]{3}$/", $phone)) {
              $error3= "Phone is  Not valid";
            }

          else{ 
            $password=md5($password);
            $qure="INSERT INTO customer(name,email,password,phone, address )
              VALUES('$name','$email','$password','$phone','$Address')";
               mysqli_query($conn,$qure);
     
           
                 
               $note= "
                  You have been registered with success ,You can log in 
                   using your Email and Password
                  Thank you.
                   ";
              
             
}}
?>
<?php
session_start();
 $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }
if (isset($_POST['submitlogin'])) {
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password);
   $qure="SELECT * FROM customer WHERE email='$email' AND  password='$password'";

   $result= mysqli_query($conn,$qure);
   $customer=mysqli_fetch_assoc($result);
if (!empty($customer['idcostumer'])) {
    $_SESSION['idcostumer']= $customer['idcostumer'];
    header("location:recent.php");

    }
 else{
    $err= "User Not Found";
    }
   }
?>





<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
        <div class="row">
            
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                             <?php if (isset($note)) {
                                echo "<div class='alert alert-success' role='alert'>$note</div>";
                            }
                            ?>

                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form"  method="post" role="form" style="display: block;">
                                     <?php if (isset($err)) {
                                echo "<div class='alert alert-danger' role='alert'>$err</div>";
                            }
                            ?>
                                    <div class="form-group">
                                        <input type="email" name="email" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required="required">

                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="required">
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="submitlogin" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form id="register-form"  method="post" role="form" style="display: none;">
                                   
                           
                                    <div class="form-group">
                                        <input type="text" name="name" tabindex="1" class="form-control" placeholder="Username" value="" required="required">
                                             <p class="help-block" style="color:red" > 
                                                                    <?php if(isset($error)) {
                                                                       echo $error;
                                                                    } ?>
                                                                     </p>
                                           
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email"  tabindex="1" class="form-control" placeholder="Email Address" value=""required="required">
                                            <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error1)) {
                                                                       echo $error1;
                                                                    } ?>
                                                                     </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password"  tabindex="2" class="form-control" placeholder="Password"required="required">
                                            <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error2)) {
                                                                       echo $error2;
                                                                    } ?>
                                                                     </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" tabindex="2" class="form-control" placeholder="Phone" required="required">
                                            <p class="help-block" style="color:red" > 
                                                                    <?php if(isset($error3)) {
                                                                       echo $error3;
                                                                    } ?>
                                                                     </p>
                                    </div>
                                    <div class="form-group">
                                       <select name="address"  class="form-control">
                                                                            
                                                                            <option value="Amman">Amman</option>
                                                                            <option value="Karak">Karak</option>
                                                                            <option value="Irbid">Irbid</option>
                                                                            <option value="Jerash">Jerash</option>
                                                                          
                                                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="Submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});
</script>