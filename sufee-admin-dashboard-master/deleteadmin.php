<?php
session_start();
 ob_start(); 
  $conn=mysqli_connect("localhost","root","","electronictrade");
         if (!$conn) {
             die();
         }
$qure=" delete  from  admin where 	idadmin ={$_GET['id']} ";
mysqli_query($conn,$qure);
header("location:modle.php");