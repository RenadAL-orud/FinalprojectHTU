<?php
 ob_start(); 
  $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }
     
                 $qure=" delete  from  category where 	idcategory ={$_GET['id']} ";
                  mysqli_query($conn,$qure);
                  
                
 
                header("location:category.php");
  
         	  
               
    
   
       
   
?>    