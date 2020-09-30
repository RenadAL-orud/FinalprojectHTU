<?php
ob_start();

 $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }
if (isset($_POST['Submit'])) {
   
  
  
 
 

  
  $cat=$_POST['namecat'];
    if(empty($cat)) {
        $error= 'Missing Name<br>';
        $color="#d40c0c";
    }
 elseif(!preg_match('/^[a-z]+$/i', $cat)) {
        $error1 = 'Name missing or incorrect';
         $color="#d40c0c";
    } 

 elseif ($_FILES['ImageCategre']['type']!=='image/jpeg') {
        $errorimage = 'Invalid file type. Only JPG types are accepted.';
         $color="#d40c0c";
  }
  
    else {
       $name=$_FILES['ImageCategre']['name'];
       $temp=$_FILES['ImageCategre']['tmp_name'];
        $path='image/';
  $imageFileType = pathinfo($name,PATHINFO_EXTENSION);
   move_uploaded_file($temp, $path.$name);
      $qure="INSERT INTO category(namecategory,imagecatgory)VALUES('$cat','$name')";
      mysqli_query($conn,$qure);
      header("location:category.php");}
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
                                                                   
                                                                <label for="hf-email" class=" form-control-label">NameCategre</label>
                                                            </div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="text" id="hf-email" name="namecat" placeholder="Enter NameCategre..." class="form-control"
                                                                    <?php if (isset($color)) 
                                                                       
                                                                       ?> style="background:<?php echo $color;?>">
                                                                
                                                                    <span class="help-block">Please enter your NameCategre </span>
                                                                 <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error1)) {
                                                                       echo $error1;
                                                                    } ?>
                                                                     </p></div>
                                                                    
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="hf-password" class=" form-control-label">ImageCategre</label></div>
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

                         <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Categre</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>ImageCategre</th>
                                             <th style="color:green ">Update</th>
                                            <th style="color:red">Deleted</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                                  <?php
               $qure="SELECT * FROM  category ";
               $result= mysqli_query($conn,$qure);
               while($category =mysqli_fetch_assoc($result)){
                  echo "<tr>";
                  
                  echo "<td>{$category['namecategory']}</td>";
                  echo "<td> <img src='image/{$category['imagecatgory']}'style='width: 30%;'></td>";
                  echo "<td><a href='editecategory.php?id={$category['idcategory']}'class='btn btn-warning'>Edite</a></td>";
                  echo "<td><a href='deletecategory.php?id={$category['idcategory']}' class='btn btn-danger'>Delete</a></td>";
                  echo "</tr>";
              }
              ?>
                                           
                                       
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->

<?php include_once('include/footer.php')?>
   <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>

