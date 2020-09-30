<?php
session_start();
ob_start(); 
  $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }
         echo $_GET['id'];
         $qure1=" delete  from  prodect where  idprodect ={$_GET['id']} ";
         mysqli_query($conn,$qure1);
       header("location:showvendor.php");
?>