<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's list</title>
    <link rel="stylesheet" href="main.css">
</head>
<body bgcolor= rgb(30, 82, 30)>
    <table border=1 align=center width=80% cellpadding=5 cellspacing=5>
        <tr><td>First Name</td><td>Last Name</td><td>Email</td><td>Phone Number</td></tr>
<?php
include "connection.php";


    
    $sqlvar="select * from registerteacher order by FirstName";
    $result= $conn -> query($sqlvar);
    while($row=$result->fetch_row())
    {
        echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td> <td>".$row[3]."</td></tr>");
    }

?>
<table>
<a href="registerteacher.php">Back</a>
</table>

    

    
    
</body>
</html>
