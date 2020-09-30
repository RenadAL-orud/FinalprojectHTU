 <?php
  $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         } 
 include_once('include/header.php');?>

 <div class="breadcrumbs">
           
            
        </div>

        <div class="content mt-3">

          


            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                     <div class="dropdown float-right">
                      <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="showvendor.php">Action</a>
                                    
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                             <?php
                             $a=array();
               $qure="SELECT * FROM   vendor ";
               $result= mysqli_query($conn,$qure);
               while($vendor =mysqli_fetch_assoc($result)){
                $b=$vendor['idvendore'];
                $c= array_push($a, $b);

                 
               }
             
              
                ?>
                        <span class='count'><?php echo count($a);?></span>   
                        </h4>
                        
                        <p class="text-light">Vendor online</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="showvendor.php">Action</a>
                                    
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                                           <?php
                             $a=array();
               $qure="SELECT * FROM   prodect ";
               $result= mysqli_query($conn,$qure);
               while($prodect =mysqli_fetch_assoc($result)){
                $b=$prodect['idprodect'];
                $c= array_push($a, $b);

                 
               }
             
              
                ?>
                            <span class="count"><?php echo count($a);?></span>
                        </h4>
                        <p class="text-light">Vendor&Prodect</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="admin.php">Action</a>
                                    
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                                                    <?php
                             $a=array();
               $qure="SELECT * FROM   admin ";
               $result= mysqli_query($conn,$qure);
               while($admin =mysqli_fetch_assoc($result)){
                $b=$admin['idadmin'];
                $c= array_push($a, $b);

                 
               }
             
              
                ?>
                            <span class="count"><?php echo count($a);?></span>
                        </h4>
                        <p class="text-light">Admin online</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="category.php">Action</a>
                                    
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                                                                <?php
                             $a=array();
               $qure="SELECT * FROM   category ";
               $result= mysqli_query($conn,$qure);
               while($category =mysqli_fetch_assoc($result)){
                $b=$category['idcategory'];
                $c= array_push($a, $b);

                 
               }
             
              
                ?>
                            <span class="count"><?php echo count($a);?></span>
                        </h4>
                        <p class="text-light">Catogre online</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <!--/.col-->


          
            <!--/.col-->



           



        </div> <!-- .content -->
    </div>
     <?php include_once('include/footer.php')?>