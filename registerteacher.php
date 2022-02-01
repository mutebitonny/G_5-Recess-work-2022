<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Teacher</title>
    <link rel="stylesheet" href="main.css">
   
</head>
<body style = "backgroundimage:">
<?php
include("connection.php");
session_start();
$res="";

if(isset($_POST['submit']))
{
    //echo("working");
    $v1=$_POST['text1'];
    $v2=$_POST['text2'];
    $v3=$_POST['text3'];
    $v4=$_POST['text4'];

    //echo $v1." ".$v2;
    $sqlvar="insert into registerteacher values('$v1','$v2','$v3','$v4')";
    $result= mysqli_query($conn,$sqlvar);
    if($result)
    {
        $res="Record inserted";
    }
    else
    {
        $res="Record Not Inseerted, Some prob";
    }
    

}

?>

    
    <form class=form action="registerteacher.php" method="POST">
        
<p align=center style="font-size:20px;">Register Teacher</p>
           

                
        <table>
            
            <table border=0>
                
                <tr><td>First Name</td><td><input type="text" name="text1"><td><tr>
                <tr><td>Last Name</td><td><input type="text" name="text2"><td><tr>
                <tr><td>Email</td><td><input type="email" name="text3"><td><tr>
                <tr><td>Phone Number</td><td><input type="number" name="text4"><td><tr>
               <tr colspan=2><td> <button align=center class="btn btn-dark shadow-1g " type="submit" name="submit">SUBMIT</button></td></tr>
                
                
                
            </table>

        </table>
    </form>
    
    
</body>
</html>
