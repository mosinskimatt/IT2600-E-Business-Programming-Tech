<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Session Variables:<br>";
    echo$_SESSION['fullname']."<br>";
    echo $_SESSION['courseid']."<br>";

    echo"<br>Cookies:<br>";
    echo $_COOKIE['favlanguage']."<br>";
    echo $_COOKIE['favoperatingsystem']."<br>";
    echo "<br> ***The cookies will expire after 3 seconds(refresh the page after three seconds and the cookies will be gone
    and an error will be displayed).<br>
     To reload them go back to the previous page click the link to this page again."
    ?>
</body>
</html>