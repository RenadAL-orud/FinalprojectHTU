<?php


session_start();
ob_start(); 

ob_start();

 $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }
if (isset($_POST['Submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
  
   if (empty($name)||empty($email)||empty($password)) {
                $error="Missing Name OR Email OR Password";
            }
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
            $error1 = "You Entered An Invalid Email Format"; 
        }
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

   if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    $error2='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
         }
          else{ $password=md5($password);
       $qure="INSERT INTO vendor(namevendore,emailvendor,passwordvendore)VALUES('$name','$email','$password')";
    mysqli_query($conn,$qure);
   
    header("location:showvendor.php");
}}

 $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }

         if(isset($_GET['block'])){
   
           $id=$_GET['block'];
          $new='blocked';
          $update="UPDATE  prodect SET statuss ='blocked' where  idprodect= {$id}";

        if(mysqli_query($conn,$update));

          }

     if(isset($_GET['unblock'])){
    
     $id=$_GET['unblock'];
     $new='unblocked';
     $update="UPDATE  prodect SET statuss ='allowed' where  idprodect= {$id}";
     if(mysqli_query($conn,$update));


}
  if(isset($_GET['blockvendore'])){
   
           $id=$_GET['blockvendore'];
          $new='blocked';
          $update="UPDATE  vendor SET statuss ='blocked' where  idvendore= {$id}";

        if(mysqli_query($conn,$update));

          }
           if(isset($_GET['unblockvendore'])){
    
     $id=$_GET['unblockvendore'];
     $new='unblocked';
     $update="UPDATE  vendor SET statuss ='allowed' where  idvendore= {$id}";
     if(mysqli_query($conn,$update));


}


 include_once('include/header.php');

?>
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Vendor Table</strong>
                                <!-- <button  type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal" style="margin-left:60%">
                                 Add Vendor 
                                 </button>-->
                                 </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                    	</thead>

                                            <tr>
                                           
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                             <th scope="col">State</th>
                                            <th scope="col">Block,Allow</th>
                                           
                                            <th scope="col">Deleted</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    	  $qure="SELECT * FROM  vendor ";
                                         $result= mysqli_query($conn,$qure);
                                        while($vendor =mysqli_fetch_assoc($result)){


                                    echo "<tr>";
                                   

                                    echo "<td>{$vendor['namevendore']}</td>";
                                    echo"<td>{$vendor['emailvendor']}</td>";
                                     echo"<td>{$vendor['phone']}</td>";
                                      echo"<td>{$vendor['statuss']}</td>";
                                       echo"<td><a href='showvendor.php?blockvendore={$vendor['idvendore']}'>
                                                  <span style='font-size:15px;color:red;'> Block/</a></span> </a></i>
                                                  <a href='showvendor.php?unblockvendore={$vendor['idvendore']}'>
                                                  <span' style='font-size:15px;color:green;'>Allow</a></span></td>
                                                  ";
                                    echo" <td><a href='deletevendor.php?id={$vendor['idvendore']}' class='btn btn-danger'
                                           style='font-family: cursive;'>Delete</a></td>";
                                    echo "</tr>";}
                                 ?>
                                       
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                     <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Prodect Table</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">HOT/SALE</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">VendorName</th>
                                            <th scope="col">CatogreName</th>
                                            <th scope="col">Block,Allow</th>
                                            <th scope="col">State</th>
                                             <th scope="col">Size</th>
                                            <th scope="col">Deleted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	 	<?php
                                    	  $qure="SELECT * FROM  prodect ";
                                          $result= mysqli_query($conn,$qure);
                                          while($prodect =mysqli_fetch_assoc($result)){
                                        	echo "<tr>";
                                        	echo "<th scope='row'>{$prodect['nameprodect']}</th>";
                                        	echo "<td>{$prodect['priceprodect']}JOD</td>";
                                            echo"<td>{$prodect['HS']}</td>";
                                            echo"<td>{$prodect['decprodect']}</td>";
                                              $a=$prodect['idprodect'];

                               $qure2="SELECT  category.namecategory 
                               FROM  category
                               INNER JOIN  prodect 
                               ON  category.idcategory=prodect.catid 
                               WHERE prodect.idprodect='$a'";
                          
                                            
                            $result2= mysqli_query($conn,$qure2);
                           $catname =mysqli_fetch_assoc($result2);
                            $c=$catname['namecategory'];
                                          
                               $qure3="SELECT  vendor.namevendore 
                               FROM  vendor
                               INNER JOIN  prodect 
                               ON  vendor.idvendore =prodect.vendorname 
                               WHERE prodect.idprodect='$a'";
                          
                                            
                            $result3= mysqli_query($conn,$qure3);
                           $vendor =mysqli_fetch_assoc($result3);
                          

                         
                                            echo"<td>{$vendor['namevendore']}</td>";
                                            echo "<td>{$catname['namecategory']}</td>";
                                           
                                              echo"<td><a href='showvendor.php?block={$prodect['idprodect']}'>
                                                  <span style='font-size:15px;color:red;'> Block/</a></span> </a></i>
                                                  <a href='showvendor.php?unblock={$prodect['idprodect']}'>
                                                  <span' style='font-size:15px;color:green;'>Allow</a></span></td>
                                                  ";
                                             
                                                echo"<td>{$prodect['statuss']}</td>"; 
                                                 echo"<td>{$prodect['size']}</td>"; 
                                              echo "<td>

                                                    <a href='deleteprodect.php?id={$prodect['idprodect']}'class='btn  btn-danger'>Delete</a></td>";
                                            echo "</tr>";
                                        } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                    </div>



                <!--    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">ADD Vendor</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              
          <div class="sufee-login d-flex align-content-center flex-wrap">
          <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                     <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="post">
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
                                <input type="email" class="form-control" placeholder="Email" name="email">
                                   <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error1)) {
                                                                       echo $error1;
                                                                    } ?>
                                                                     </p>
                        </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required="required">
                                       <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error2)) {
                                                                       echo $error2;
                                                                    } ?>
                                                                     </p>
                        </div>
                                    <div class="checkbox">
                                        <label>
                                <input type="checkbox" required="required"> Agree the terms and policy
                            </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="Submit">Register</button>
                                   
                    </form>
                </div>
            </div>
        </div>
    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                -->
                     <?php include_once('include/footer.php')?>