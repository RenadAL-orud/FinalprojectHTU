<?php
class login{
    public $conn ;
    public $namelocal ="localhost";
    public $root      ="root";
    public $dbname   ="electronictrade";
     function connect(){
     $this->namelocal;
    $this->root;
   $this->dbname;
    $this->conn=mysqli_connect("$this->namelocal","$this->root","","$this->dbname");
     if (!$this->conn) {
            die();
         }

    
 }

}
class LoginAdmin extends login{
     function loginadim(){
            parent::connect();
    if (isset($_POST['submit'])) {
   $email=$_POST['email'];
   $password=$_POST['password'];
    $password=md5($password);
   $qure="SELECT * FROM  admin WHERE emailadmin='$email' AND passwordadmin='$password'";
   $result= mysqli_query( $this->conn,$qure);
   $admin =mysqli_fetch_assoc($result);
   if (!empty($admin['idadmin'])) {
     $_SESSION['id']=$admin['idadmin'];
     header("location:index.php");

    }
    else{
      echo "<div class='alert alert-danger' role='alert'>User Not Found</div>"; 
     }

      }


}
}

$y=new LoginAdmin(); 



?>
<!doctype html>

<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="">
                       
                    </a>
                </div>
                <div class="login-form">
                	<?php
                    $y->loginadim();
                    
                            ?>
                    <form method="post">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                               
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="submit">Sign in</button>
                                
                                
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include_once('include/footer.php')?>