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
             $qure="INSERT INTO admin(nameadmin,emailadmin, passwordadmin)VALUES('$name','$email','$password')";
             mysqli_query($conn,$qure);
            

         }
       }

 include_once('include/header.php');


?>                                                
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
                                                                        <input type="text" id="input1-group1" name="name" placeholder="Username" class="form-control" required="required">
                                                                         
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
                                                                            <input type="email" id="input2-group1" name="email" placeholder="Email" class="form-control"required="required">
                                                                             
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
                                                                            <input type="password" id="input3-group1" name="password" placeholder="Password.." class="form-control" required="required">
                                                                            
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



                                                <div class="col-lg-12">
                                               <div class="card">
                                            <div class="card-header">
                                   <strong class="card-title">Informtion Admin</strong>
                                </div>
                            <div class="card-body">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col" style="color: red;font-family: cursive;">Deleted</th>
                                             <th scope="col" style="color:green;font-family: cursive;">Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        	  <?php
               $qure="SELECT * FROM  admin ";
               $result= mysqli_query($conn,$qure);
               while($admin =mysqli_fetch_assoc($result)){
                  echo "<tr>";
                  echo "<th scope='row'>{$admin['idadmin']}</th>";
                  echo "<td>{$admin['nameadmin']}</td>";
                  echo "<td>{$admin['emailadmin']}</td>";
                  echo "<td><a href='deleteadmin.php?id={$admin['idadmin']}' class='btn btn-danger'
                  style='font-family: cursive;'>Delete</a></td>";
                  echo "<td><a href='editeadmin.php?id={$admin['idadmin']}'class='btn btn-warning'style='font-family: cursive;'>Edite</a></td>";
                
                  echo "</tr>";
              }
              ?>
                                            
                                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                                            </div>
                                        </div>
                                    </div>





























 <?php include_once('include/footer.php')?>