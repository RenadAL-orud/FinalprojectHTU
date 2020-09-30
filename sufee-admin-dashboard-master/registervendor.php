<?php
ob_start();

 $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }
   if(isset($_POST['Submit'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
 
  
       if (!preg_match('/^[a-z]+$/i',$name)) {
                $error="Name Incorrect";

            }
        else {
             if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
               $error1 = "You Entered An Invalid Email Format";}
               else {
                  $uppercase = preg_match('@[A-Z]@', $password);
                 $lowercase = preg_match('@[a-z]@', $password);
                 $number    = preg_match('@[0-9]@', $password);
               $specialChars = preg_match('@[^\w]@', $password);

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        $error2='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
          }
          else {
            if(!preg_match("/((079)|(078)|(077)){1}[0-9]{7}/",$phone)) {
            $phonerror = "You Entered An Invalid Phone of Jorden"; 
            }
            else{ 
            $password=md5($password);
            $qure="INSERT INTO vendor(namevendore,emailvendor,passwordvendore,statuss,phone)
              VALUES('$name','$email','$password','block','$phone')";
               mysqli_query($conn,$qure);

               $note= "<div class='alert alert-success' role='alert'>
                   <h4 class='alert-heading'>Well done!</h4>
                   <p>
                  You have been registered with success ,and will contact you shortly by the responsible authority in order to activate your account
                  Thank you.</p>
                   <hr>
   
                  </div>";
                  // header("location:registervendor.php");

}

        }
        


           
       
         
           
          

         

}

}}
?>

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                     <!--  <img class="align-content" src="images/logo.png" alt="">-->
                    </a>
                </div>
                <div class="login-form">
                    <form method="post">
                        <?php if (isset($note)) {
                            echo $note;
                        } 
                        ?>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name" name="name" required="required">
                               <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error)) {
                                                                       echo $error;
                                                                    } ?>
                                                                     </p>
                        </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" required="required">
                                   <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error1)) {
                                                                       echo $error1;
                                                                    } ?>
                                                                     </p>
                        </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password"required="required">
                                       <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error2)) {
                                                                       echo $error2;
                                                                    } ?>
                                                                     </p>
                        </div>

                                    <div class="form-group">
                                    <label>Phone</label>
                                    <input  type="tel" id="phone" name="phone" class="form-control" placeholder="+962-79-765-321" required="required">
                                       <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($phonerror)) {
                                                                       echo $phonerror;
                                                                    } ?>
                                                                     </p>
                        </div>
                                    <div class="checkbox">
                                        <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="Submit">Register</button>
                                    
                                    <div class="register-link m-t-15 text-center">
                                        <p>Already have account ? <a href="loginvendor.php"> Sign in</a></p>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


 <?php include_once('include/footer.php')?>