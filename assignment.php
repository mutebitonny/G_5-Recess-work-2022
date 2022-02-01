<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment details</title>
    <link rel="stylesheet" href="main.css">
   
</head>
<body bgcolor= rgb(30, 82, 30)>
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
    $v5=$_POST['text5'];
    $v6=$_POST['text6'];
    $v7=$_POST['text7'];

    //echo $v1." ".$v2;
    $sqlvar="insert into assignment values('$v1','$v2',$v3,'$v4','$v5','$v6','$v7')";
    $result= $conn -> query($sqlvar);
    if($result)
    {
        $res="Record inserted";
    }
    else
    {
        $res="Record Not Inserted, Some prob";
    }
    

}

?>

    
    <form class=form action="assignment.php" method="POST">
        <table>
            <p style="font-size:20px;">Assignment details</p>
            <table border=0>
                
                <tr><td>First Name</td><td><input type="text" name="text1"></td></tr>
                <tr><td>Last Name</td><td><input type="text" name="text2"></td></tr>
                <tr><td>Assignment NO</td><td><input type="number" name="text3"></td></tr>
                <tr><td>Date From</td><td><input type="date" name="text4"></td></tr>
                <tr><td>Date To</td><td><input type="date" name="text5"></td></tr>
                <tr><td>Time From</td><td><input type="time" name="text6"></td></tr>
                <tr><td>Time To</td><td><input type="time" name="text7"></td></tr>

                
               <tr><td> <button class="btn btn-dark shadow-1g " type="submit" name="submit">SUBMIT</button></td></tr>
                
                
            </table>

        </table>
    </form>
    
    
</body>
</html>
