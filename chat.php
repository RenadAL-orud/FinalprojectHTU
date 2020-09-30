<?php
  ob_start();
  

 if(isset($_POST['WorkingHours'])){
       
    echo "<i>
Every day except Friday and Saturday
From 9 AM - 7 PM</i>";
    
   }
  
    if(isset($_POST['Email'])){
       
    echo "<i>NayaCosmatic@2020</i>";
    
   }
     if(isset($_POST['Phone'])){
       
    echo "<i>+962-79-157-67-38</i>";
    
   }
   if (isset($_POST['Location'])) {
   	  echo "<i>
Sweifieh - Paris Street - Building 205 - Naya Cosmatic Company</i>";
   }

?>