  <?php 
session_start();
    $vendore=$_SESSION['id'];
 $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }
         if (isset($_POST['Submit'])) {
           
    $nameprodect=$_POST['nameprodect'];
    $decprodect=$_POST['decprodect'];
    $price=$_POST['price'];
   
    $CategoryName=$_POST['CategoryName'];
   ;

 if(empty($nameprodect)) {
        $error1= 'Missing Name<br>';
        $color="#d40c0c";

    }

 if(empty($decprodect)) {
        $error2= 'Missing Description<br>';
        $color="#d40c0c";
    }
    elseif ($_FILES['imageone']['type']!=='image/jpeg') {
        $errorimage = 'Invalid file type. Only JPG types are accepted.';
         $color="#d40c0c";
  }
    elseif($CategoryName==0) {
        $error3= 'You Must 
       Choose ONE Option <br>';
        $color="#d40c0c";
    }
  
else{
   $radio=$_POST['radios'];

  $name=$_FILES['imageone']['name'];
    $temp=$_FILES['imageone']['tmp_name'];
    $path='image/prodect/';
     $imageFileType = pathinfo($name,PATHINFO_EXTENSION);
   move_uploaded_file($temp, $path.$name);
   
$checkBox = implode(',', $_POST['Days']);
   $qure="INSERT INTO prodect(nameprodect,decprodect,priceprodect,HS,catid,imageprodect,vendorname,size,statuss)
   VALUES('$nameprodect','$decprodect','$price','$radio','$CategoryName','$name','$vendore','". $checkBox ."','blocked')";

    mysqli_query($conn,$qure);
    header("location:prodect.php");
  }
}


if (isset($_GET['iddelete'])) {
    $qure=" delete  from  prodect where  idprodect ={$_GET['iddelete']} ";
                  mysqli_query($conn,$qure);
}

 
   include_once('include/headerprodect.php');?>





                          

                           <div class="content mt-3">
                          <div class="animated fadeIn">


                                          <div class="row">
                                           <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Prodect</strong> Elements
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Name Prodect</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="email-input" 
                                                                    name="nameprodect" placeholder="Enter Name Prodect"
                                                                     class="form-control"<?php if (isset($color)) 
                                                                       
                                                                       ?> style="border-color:<?php echo $color;?>">
                                                                       <small class="help-block form-text">Please enter Name Prodect</small>
                                                                     <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error1)) {
                                                                       echo $error1;
                                                                    } ?>
                                                                     </p>
                                                                </div>
                                                            </div>
                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description Prodect</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="decprodect" id="textarea-input" rows="9" placeholder="Content..." 
                                                                    <?php if (isset($color)) 
                                                                       
                                                                       ?> style="border-color:<?php echo $color;?>"class="form-control"></textarea>
                                                                        <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error2)) {
                                                                       echo $error2;
                                                                    } ?>
                                                                     </p>

                                                                   </div>
                                                                  
                                                            </div>
                                                            
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Price Prodect</label></div>
                                                                <div class="col-12 col-md-9"><input type="number" 
                                                                    id="password-input" 
                                                                    name="price" placeholder="Price J0D" 
                                                                    class="form-control"><small class="help-block form-text">Please enter a Price Prodect</small>
                                                                    
                                                                </div>
                                                            </div>
                                                           
                                                        
                                                             
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Category Name</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                        <select name="CategoryName" id="selectLg" class="form-control-lg form-control"
                                                                        <?php if (isset($color)) 
                                                                       
                                                                       ?> style="border-color:<?php echo $color;?>">>
                                                                            <option value="0">Please select</option>
                                                                            
                                                                 <?php
                                                                  $qure="SELECT * FROM  category ";
                                                                  $result= mysqli_query($conn,$qure);
                                                                 while($category =mysqli_fetch_assoc($result)){
                                                                    echo"<option value='{$category['idcategory']}'>
                                                                    {$category['namecategory']}</option>";
                                                                            

                                                                                 }?>
                                                                        </select>

                                                                         <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($error3)) {
                                                                       echo $error3;
                                                                    } ?>
                                                                     </p>
                                                                    </div>
                                                                </div>
                                                             
                                                              
                                                       
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label class=" form-control-label">
                                                                         Product Status</label></div>
                                                                    <div class="col col-md-9">
                                                                        <div class="form-check-inline form-check">
                                                                            <label for="inline-radio1" class="form-check-label ">
                                                                                <input type="radio" id="inline-radio1" name="radios"  class="form-check-input" value="hot">Hot
                                                                            </label>
                                                                            <label for="inline-radio2" class="form-check-label ">
                                                                                <input type="radio" id="inline-radio2" 
                                                                                name="radios"  class="form-check-input" value="sale">Sale
                                                                            </label>
                                                                              <label for="inline-radio2" class="form-check-label ">
                                                                                <input type="radio" id="inline-radio2" 
                                                                                name="radios"  class="form-check-input" value="new">New
                                                                            </label>

                                                                           
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                 <div class="row form-group">
                                                                    <div class="col col-md-3"><label class=" form-control-label">Size</label></div>
                                                                    <div class="col col-md-9">
                                                                        <div class="form-check">
                                                                            <div class="checkbox">
                                                                                <label for="checkbox1" class="form-check-label ">
                                                                                    <input type="checkbox" 
                                                                                    id="checkbox1" value="S" class="form-check-input"
                                                                                     name="Days[]">Small
                                                                                </label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label for="checkbox2" class="form-check-label ">
                                                                                    <input type="checkbox" id="checkbox2" value="M" class="form-check-input" name="Days[]">Medom

                                                                                </label>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                <label for="checkbox3" class="form-check-label ">
                                                                                    <input type="checkbox" id="checkbox3"value="L" class="form-check-input" name="Days[]"> Large
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                               
                                                               
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label"> First ImageProdect</label></div>
                                                                    <div class="col-12 col-md-9"><input type="file" id="file-input" 
                                                                        name="imageone" class="form-control-file">
                                                                          <p class="help-block" style="color:red"> 
                                                                    <?php if(isset($errorimage)) {
                                                                       echo $errorimage;
                                                                    } ?>
                                                                     </p>
                                                                      </div>

                                                                </div>
                                                                
                                                                  <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm" name="Submit">
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
                                            <th>Price</th>
                                            <th>ImageCategre</th>
                                            <th>Hot/Sale</th>
                                            <th>Size</th>
                                             <th style="color:green ">Edite</th>
                                            <th style="color:red">Deleted</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                   <?php
                $qure="SELECT * FROM   prodect  WHERE vendorname='$vendore'";
                $result= mysqli_query($conn,$qure);
                 while($prodect  =mysqli_fetch_assoc($result)){
                   echo "<tr>";
                  
                    echo "<td>{$prodect['nameprodect']}</td>";
                    echo "<td> <img src='image/prodect/{$prodect['imageprodect']}'style='width:30%;'></td>";
                    echo "<td>{$prodect['priceprodect']}</td>";
                    echo "<td>{$prodect['decprodect']}</td>";
                    echo "<td>{$prodect['HS']}</td>";
                    echo "<td>{$prodect['size']}</td>";
                     
                  echo "<td><a href='editeprodect.php?id={$prodect['idprodect']}'class='btn btn-warning'>Edite</a></td>";
                  echo "<td><a href='prodect.php?iddelete={$prodect['idprodect']}' class='btn btn-danger'>Delete</a></td>";
                  echo "</tr>";
              }
              ?>
                                           
                                       
                                        
                                        
                                    </tbody>
                                </table>
                                           </div>
                                           </div>
                                           </div>

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

