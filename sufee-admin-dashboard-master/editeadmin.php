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
         else {
           $password=md5($password);
            $qure="UPDATE   admin SET nameadmin='$name',
            passwordadmin='$password',
            emailadmin='$email'
     WHERE  idadmin={$_POST['ee']}";
    mysqli_query($conn,$qure);
   header("location:admin.php");

        }
       }

          $qure="select * from    admin  where 	idadmin = {$_GET['id']} ";
          $result= mysqli_query($conn,$qure);
         $admin =mysqli_fetch_assoc($result);
    include_once('include/header.php');?>
    <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">

                                                <div class="col-lg-12">
                                                 <div class="card">
                                                   <div class="card-header">
                                                    <strong>Admin</strong> 
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-12">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                        <input type="text" id="input1-group1" name="name" placeholder="Username" class="form-control" 
                                                                        value="<?php  echo $admin['nameadmin'];?>" required="required">
                                                                         
                                                                    </div>
                                                                    <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error)) {
                                                                       echo $error;
                                                                    } ?>
                                                                     </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-12">
                                                                        <div class="input-group">
                                                                            <input type="email" id="input2-group1" name="email" placeholder="Email" class="form-control"
                                                                            value="<?php  echo $admin['emailadmin'];?>" required="required">
                                                                             
                                                                            <div class="input-group-addon"><i class="fa fa-envelope-o"></i>

                                                                            </div>

                                                                        </div>
                                                                        <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error1)) {
                                                                       echo $error1;
                                                                    } ?>
                                                                     </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-12">
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon"><i class="fa fa-euro"></i></div>
                                                                            <input type="text" id="input3-group1" name="password" placeholder="Password.." class="form-control"
                                                                            value="<?php  echo  $admin['passwordadmin'];?>" required="required">
                                                                            
                                                                            <div class="input-group-addon">.00</div>
                                                                             <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error2)) {
                                                                       echo $error2;
                                                                    } ?>
                                                                     </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                     <div class="card-footer">
                                                            <button type="submit" class="btn btn-success btn-sm" name="Submit">
                                                                <i class="fa fa-dot-circle-o"></i> Submit
                                                            </button>
                                                            <button type="reset" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-ban"></i> Reset
                                                            </button>
                                                        </div>
                                                            </form>
                                                        </div>
                                                   
                                                    </div>
                                                 </div>
                                                </div>
                                               </div>
                                              </div>




























 <?php include_once('include/footer.php')?>