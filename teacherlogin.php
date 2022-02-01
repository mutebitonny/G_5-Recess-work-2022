<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's login</title>
    <link rel="stylesheet" href="main.css">
</head>
<body bgcolor=rgb(30, 82, 30)>
<?php
include("connection.php");
session_start();

// if($_SERVER['REQUEST_METHOD']=='POST')

if(isset($_POST['Login']))
{
    //echo("working");
    $v1=$_POST['text1'];
    $v2=$_POST['text2'];
    //echo $v1." ".$v2;
    $sqlvar="select * from teacherlogin where Username='$v1'and Password='$v2'";
    $result= mysqli_query($conn,$sqlvar );
    if($result->num_rows>0)
    {
        header("location: teacherdashboard.php");
    }
    echo("username or password is not correct");
}

//$_COOKIE['USERNAME':$V1,];
?>

        
    <form class=form method="post" action="teacherlogin.php">
    <h3 align=center>Teacher Login</h3>
        <table class="style" border=0 align=center>
            
                
            
            <tr><td>Username</td><td><input type="text" name=text1></td></tr>
            <tr><td>Password</td><td><input type="password" name=text2></td></tr>
            
            <tr><td colspan=2 align =left><button class="btn btn-dark shadow-1g " type="submit" name="Login">LOGIN</button></td></tr>
        </table>

</form>
    
    
</body>
</html>
