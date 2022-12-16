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

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "it2600";

$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection to the server failed: "
        . $conn->connect_error);
}

    $un = trim($_POST['un'] ?? null);
    $pw = trim($_POST['pwd'] ?? null);

if(isset($_POST['submit'])){
    

    $options = ['cost' => 12];
    $hashed = password_hash($pw, PASSWORD_BCRYPT, $options);
    $query = "SELECT * FROM users WHERE `username`='".$un."' ";
    $rs = mysqli_query($conn, $query);
    $numRows = mysqli_num_rows($rs);

    if($numRows ==1){
        $row = mysqli_fetch_assoc($rs);
        if(password_verify($pw, $row['password'])){
            header("Location: http://localhost/Lab12/index.php");
        }
        else{
            echo "***Invalid Login Credentials***";
        }
    }
    else{
        echo"No User found";
    }
}
    //$_SESSION["first"] = $fname;
    //$_SESSION["last"] = $lname;
    $_SESSION["usern"] = $un;
?>
<p>Enter your login credentials:</p>
    <form action = "" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="un" required>
        <label for="pwd">Password:</label>
        <input type="text" name="pwd" required>
        <input type="submit" name="submit" value="Login">
</form>
</body>
</html>