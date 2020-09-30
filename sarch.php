<?php
 
$conn=mysqli_connect("localhost","root","","electronictrade");
                                                 if (!$conn) {
                                                    die();
                                                    }
$a=$_GET['admin_id'];

 $qure="SELECT * FROM  prodect  WHERE  nameprodect LIKE '$a%'";
               $result= mysqli_query($conn,$qure);
            
 if ($result) {
     $resultArr=array();
     while ($rowData=mysqli_fetch_assoc($result)) {
      $resultArr[count($resultArr)]=$rowData;
       # code...
     }
   
     echo json_encode($resultArr);
 }
                  
                   

             
                  ?>
