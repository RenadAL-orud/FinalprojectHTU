<?php
session_start();
 $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }
if (isset($_POST['submit'])) {
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password);
   $qure="SELECT * FROM vendor WHERE  emailvendor='$email' AND passwordvendore='$password'AND statuss='allowed'";
   $result= mysqli_query($conn,$qure);
   $vendor=mysqli_fetch_assoc($result);
if (!empty($vendor['idvendore'])) {
    $_SESSION['id']=$vendor['idvendore'];
    header("location:prodect.php");

    }
 else{
    $error= "User Not Found";
    }
   }
?>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#ok").hide();
                 $("#no").hide();
                 $("#yes").hide();
                 $("#not").hide();
                $("#c_email").blur(function(){
                    var email=$("#c_email").val();
                   //alert(email);
                   $.ajax(
                            {
                                type: "POST",
                                url: "emailfound.php",
                                data :
                                {
                                    "email": email,
                                },  
                                success: function(response)
                                {
                               console.log(response);
                                if(response=="email founded")
                                {
                                  $("#ok").show();
                                  $("#no").hide(); 
                                 //  $("#yes").show(); 
                                }
                                

                            else
                            {
                                 $("#ok").hide();
                                 $("#no").show();
                                //  $("#not").show();

                            }
                                }
                            });
                });

            });

        </script>

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
                        <!--<img class="align-content" src="images/logo.png" alt="">-->
                    </a>
                </div>
                <div class="login-form">
                    <form method="post">
                            <?php if (isset($error)) {
                                echo "<div class='alert alert-danger' role='alert'>$error</div>";
                            }
                            ?>



                        <div class="form-group">
                            <label>Email address</label>
                              <i  class="fa fa-check" style="color: #0cc30c;" id="ok"></i>
                          <i class='fa fa-close'style='color:red;'id="no"></i></div>  
                            <input type="email" class="form-control" placeholder="Email" name="email" id="c_email">
                           <p style="color: #0cc30c;font-family: cursive;"id="yes">Email Founded</p>
                           <p style="color: red;font-family: cursive;"id="not">Email  Not Founded</p>


                     
                        <div class="form-group">
                                   
                                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password"name="password">
                        </div>

                            
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="submit">Sign in</button>
                                
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="registervendor.php"> Sign Up Here</a></p>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include_once('include/footer.php')?>