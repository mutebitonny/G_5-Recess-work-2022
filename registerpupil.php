<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register pupil</title>
    <link rel="stylesheet" href="main.css">
   
</head>
<body bgcolor= rgb(30, 82, 30)>
<?php
include("connection.php");
session_start();
$res="";

if(isset($_POST['save']))
{
    //echo("working");
    $v1=$_POST['text1'];
    $v2=$_POST['text2'];
    $v3=$_POST['text3'];
    $v4=$_POST['text4'];
    $v5=$_POST['text5'];
    //echo $v1." ".$v2;
    $sqlvar="insert into registerpupil values('$v1','$v2',$v3,$v4,$v5)";
    $result= $conn -> query($sqlvar);
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

 
    <form class=form action="registerpupil.php" method="POST">
        <table>
            <pstyle="font-size:25px;" >Register Pupil</p>
            <table border=0>
                
                <tr><td>First Name</td><td><input type="text" name="text1"><td><tr>
                <tr><td>Last Name</td><td><input type="text" name="text2"><td><tr>
                <tr><td>User Code</td><td><input type="number" name="text3"><td><tr>
                <tr><td>Phone Number</td><td><input type="number" name="text4"><td><tr>
                <!-- <tr><td>registrationstatus</td><td><input type="text" name="text5"><td><tr> -->

                
                <tr><td><button type="submit" name="save">SUBMIT</button></td></tr>
                
                
            </table>

        </table>
    </form>
    
    
</body>
</html>
