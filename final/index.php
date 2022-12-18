<?php
session_start();
echo "You are logged in as ".$_SESSION["first"]." ".$_SESSION["last"]." and your username is: ".$_SESSION["usern"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <ul>
        <li><a href http://localhost/final/schedule.php>View your schedule</a></li>
        <li><a href http://localhost/final/addclass.php>Add a course</a></li>
        <li><a href http://localhost/final/index.php>View activites</a></li>
        <li><a href http://localhost/final/index.php>Add an Activity</a></li>
    </ul>
    <?php
    
    
    ?>
</body>
</html>