<?php
session_start();
ob_start();

 $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }
if (isset($_POST['Submit'])) {
   
  $name=$_FILES['ImageCategre']['name'];
  $temp=$_FILES['ImageCategre']['tmp_name'];
  $path='image/';
  $imageFileType = pathinfo($name,PATHINFO_EXTENSION);
  
  $cat=$_POST['namecat'];
    if(empty($cat)) {
        $error= 'Missing Name<br>';
        $color="#d40c0c";
    }
   elseif(!preg_match('/^[a-z ]+$/i', $cat)) {
        $error = 'Name missing or incorrect';
         $color="#d40c0c";
    } 

   elseif( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
         && $imageFileType != "gif"){
    {

 
  $errorimage = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
 
}

  
    move_uploaded_file($temp, $path.$name);
 
   $qure="INSERT INTO category(namecategory,imagecatgory)VALUES('$cat','$name')";
    mysqli_query($conn,$qure);
    header("location:form.php");}
}

include_once('include/header.php');?>


        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                   
                    <!--/.col-->

                    
                                         

                                          <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Categre</strong> Form
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form  method="post" class="form-horizontal"  enctype="multipart/form-data">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                   
                                                                <label for="hf-email" class=" form-control-label">Email</label>
                                                            </div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="text" id="hf-email" name="namecat" placeholder="Enter NameCategre..." class="form-control"
                                                                    <?php if (isset($color)) 
                                                                       
                                                                       ?> style="background:<?php echo $color;?>">
                                                                
                                                                    <span class="help-block">Please enter your NameCategre </span>
                                                                 <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error)) {
                                                                       echo $error;
                                                                    } ?>
                                                                     </p></div>
                                                                    
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Password</label></div>
                                                                <div class="col-12 col-md-9">
                                                                   <input type="file" id="file-input" name="ImageCategre" class="form-control-file"><span class="help-block">Please enter your ImageCategre</span>
                                                               <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($errorimage)) {
                                                                       echo $errorimage;
                                                                    } ?>
                                                                     </p></div>
                                                            </div>
                                                               <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm"name="Submit">
                                                            <i class="fa fa-dot-circle-o" ></i> Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                    </div>
                                                        </form>
                                                    </div>
                                                 
                                                </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->

<?php include_once('include/footer.php')?>
