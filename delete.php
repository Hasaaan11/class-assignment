<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>

<?php
 
    $mydel = $_GET['id'];
    $db = mysqli_connect("localhost","root","","project",3307);
    
        if ($db) {
            echo "Database Connected";
        } else {
            echo "Database not Connected";
        }
    $query3 ="DELETE from data where id = '$mydel'";
        $del = mysqli_query($db , $query3);
        if($del){
            echo"row deleted";
        }
        else {
            echo"row is not deleted ";
        }
        header("location: view.php");
?>

</body>
</html>