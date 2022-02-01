<!DOCTYPE html>
<html lang="en">
<head>

<?php

$server='localhost';
$username='root';
$password='';
$dbname='mine';

if(isset($_POST['login'])){
    
    $USERNAME= $_POST['username'];
    $PASSWORD= $_POST['password'];
    $dbconnect=mysqli_connect($server,$username,$password,$dbname);


$sql="SELECT * from adminlogin where Username=='$USERNAME' && Password=='$PASSWORD'";

$result=mysqli_query($dbconnect,$sql);
if($sql){
    session_start();
    $_SESSION['$dbname']= 'true';
    header('Location: mainpage.php');
}
else{ echo "Wrong password. Please try login again";}
}

?>











    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <style>
       
        
    </style>
    <link rel="stylesheet" href="main.css">
</head>
<body class="body" bgcolor=rgb(30, 82, 30)>
    <nav class="navbar py-3 navbar-dark fixed-top bg-secondary flex-md-nowrap p-0 shadow-1g">
       
    </nav>
    
        <div class=" bg-info container card shadow-lg border-0 rounded-lg mt-5">
            
            <form class="form" method="post" action="adminlogin.php">
            <div class="card-header"><h3 align=center>Admin login</h3></div>
                <label>Username<input type="text" name="username" ></label><br><br/>
                <label>Password <input type="password" name="password"> </label><br>
                <br/>
                <div class="card-footer bg-secondary">
                    <button class="btn btn-dark shadow-1g " type="submit" name="login">LOGIN</button>
                    

                </div>
            </form>
        </div>
    
    <script type ="text/js"src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>   
</body>
</html>