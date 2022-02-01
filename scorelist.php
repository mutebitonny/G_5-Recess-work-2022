<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score list</title>
    <link rel="stylesheet" href="main.css">
</head>
<body bgcolor= rgb(30, 82, 30)>
    <table border=1 align=center width=80% cellpadding=5 cellspacing=5>
        <tr><th>Pupil's Name</th><th>Assignment score</th><th>Comment</th></tr>
<?php
include("connection.php");


    
    $sqlvar="select * from score order by PupilName";
    $result= $conn -> query($sqlvar);
    while($row=$result->fetch_row())
    {
        echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>");
    }

?>
<table>
<a href="score.php">Back</a>
</table>

    

    
    
</body>
</html>
