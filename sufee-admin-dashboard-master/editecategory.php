<?php
  ob_start(); 
  $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }
  include_once('include/header.php');
  if (isset($_POST['Submit'])) {
  $name=$_FILES['ImageCategre']['name'];
  $temp=$_FILES['ImageCategre']['tmp_name'];
  $path='image/';
  
    move_uploaded_file($temp, $path.$name);
   $cat=$_POST['namecat'];
    if(empty($cat)) {
        $error= 'Missing Name<br>';
        $color="#d40c0c";
          }
            elseif(!preg_match('/^[a-z ]+$/i', $cat)) {
        $error = 'Name missing or incorrect';
         $color="#d40c0c";
    } 


  

  
 
    else {$qure="UPDATE   category SET namecategory='$cat',
     imagecatgory='$name'
     WHERE idcategory={$_GET['id']}";
    mysqli_query($conn,$qure);
    header("location:category.php");

 }}
 $qure="select * from    category  where 	idcategory = {$_GET['id']} ";
 $result= mysqli_query($conn,$qure);
 $category =mysqli_fetch_assoc($result);


  ?>

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
                                                                   
                                                                <label for="hf-email" class=" form-control-label">NameCategre</label>
                                                            </div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="text" id="hf-email" name="namecat" placeholder="Enter NameCategre..." class="form-control"
                                                                     value="<?php echo $category['namecategory']; ?>"
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
                                                                <div class="col col-md-3"><label for="hf-password" class=" form-control-label">ImageCategre</label></div>
                                                                <div class="col-12 col-md-9">
                                                                   <input type="file" id="file-input" name="ImageCategre" class="form-control-file"><span class="help-block">Please enter your ImageCategre</span>
                                                                   <span> <input type="text" id="file-input" name="ImageCategre" class="form-control-file" 
                                                                    value="<?php  echo $category['imagecatgory'];?>"></span>
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