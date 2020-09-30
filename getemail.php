<?php ob_start();
 $conn=mysqli_connect("localhost","root","","electronictrade");
                                                 if (!$conn) {
                                                    die();
                                                    } 
    if(isset($_POST['email'])){
        $email=$_POST['email'];
    $query  = "SELECT * FROM vendor where emailvendor = '{$email}'";
    //echo $query;
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) == 1)
    {
        echo "email founded";
    }
    else{
        echo "email not found"; }
    }
;
?>