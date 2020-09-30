<?php
session_start();
 ob_start(); 
  $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }
$qure=" delete  from  vendor where  idvendore ={$_GET['id']} ";
mysqli_query($conn,$qure);
$qure1=" delete  from  prodect where  vendorname ={$_GET['id']} ";
mysqli_query($conn,$qure1);
header("location:showvendor.php");