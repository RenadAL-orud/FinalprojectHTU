<?php
 include_once('include/header.php');
ob_start();
 $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }

         if (isset($_POST['Submit'])) {
              $name=$_POST['name'];
              $email=$_POST['email'];
              $password=$_POST['password'];
              $_POST['ee'];
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
    //header("location:modle.php");

        }
       }

 $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }
         
         if (isset($_POST['Submit1'])) {
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

 


?> 


        <div class="content mt-3">
            <div class="animated">

                <div class="card">
                    <div class="card-header">
                        <i class="mr-2 fa fa-align-justify"></i>
                        <strong class="card-title" v-if="headerText">Admin</strong>
                    </div>
                    <div class="card-body">

                        <!-- Button trigger modal -->
                       

                      
                        <button type="button" class="btn btn-secondary mb-1" data-toggle='modal' data-target='#largeModal'>
                           ADD Admin
                        </button>
                                             <div class="row">
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
                                            <th scope="col">Password</th>
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
                  echo "<td scope='row'>{$admin['idadmin']}</td>";
                  echo "<td>{$admin['nameadmin']}</td>";
                  echo "<td>{$admin['emailadmin']}</td>";
                  echo  "<td>{$admin['passwordadmin']}</td>";
                  echo "<td><a href='deleteadmin.php?id={$admin['idadmin']}' class='btn btn-danger'
                        style='font-family: cursive;'>Delete</a></td>";
                  echo "<td><button class='btn btn-success  editebtn' style='font-family: cursive;'value='{$admin['idadmin']}' name='dd'>Edite</button>
                        </td>";
                
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


      <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                              
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal">
                                    <div class="row">

                                                <div class="col-lg-12">
                                                 <div class="card">
                                                   <div class="card-header">
                                                    <strong>Admin</strong> 
                                                    </div>
                                                    <div class="card-body card-block">
                                                       
                                                            <div class="row form-group">
                                                                <div class="col col-md-12">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                        <input type="text"  name="name" placeholder="Username" class="form-control"required="required">
                                                                         
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
                                                                            <input type="email" name="email" placeholder="Email" class="form-control"required="required">
                                                                             
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
                                                                            <input type="password"  name="password" placeholder="Password.." class="form-control"required="required">
                                                                            
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
                                                            <button type="submit" class="btn btn-success btn-sm" name="Submit1">
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
                          
                        </div>
                    </div>
                </div>


             


                <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel">Edite</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                             <form action="modle.php" method="post" class="form-horizontal">
                            <div class="modal-body">
                                <input type="hidden" id="updata_id" name="ee">
                                 <div class="content mt-3">
                                  <div class="animated fadeIn">


                                    <div class="row">

                                                <div class="col-lg-12">
                                                 <div class="card">
                                                   <div class="card-header">
                                                    <strong>Admin</strong> 
                                                    </div>
                                                    <div class="card-body card-block">
                                                       
                                                            <div class="row form-group">
                                                                <div class="col col-md-12">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                        <input type="text" id="fname" name="name" placeholder="Username" class="form-control">
                                                                         
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
                                                                            <input type="email" id="lname" name="email" placeholder="Email" class="form-control">
                                                                             
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
                                                                            <input type="password" id="co" name="password" placeholder="Password.." class="form-control">
                                                                            
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
                            
                        </div>
                    </div>
                </div>


               


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
            $('.editebtn').on('click',function(){
            $('#editmodal').modal('show');
            $tr=$(this).closest('tr');
            var data =$tr.children("td").map(function(){
             return $(this).text();
                }).get();
             console.log(data);
             $('#updata_id').val(data[0]);
             $('#fname').val(data[1]);
             $('#lname').val(data[2]);
              $('#co').val(data[3]);
             

            });
        });
        
    </script>


</body>

</html>
