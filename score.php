<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score</title>
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
    

    //echo $v1." ".$v2;
    $sqlvar="insert into score values('$v1',$v2,'$v3')";
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

    
    <form class=form action="score.php" method="POST">
        <table>
            <p style="font-size:20px;">Score</p>
            <table border=0>
                
                <tr><td>Pupil's Name</td><td><input type="text" name="text1"><td><tr>
                <tr><td>Assignment score</td><td><input type="text" name="text2"><td><tr>
                <tr><td>Comment</td><td><textarea  id="" cols="30" rows="10" name="text3"></textarea><td><tr>
                

               
               <tr><td><button type="submit" name="save">SUBMIT</button></td></tr>
                
                
            </table>

        </table>
    </form>
    
    
</body>
</html>
