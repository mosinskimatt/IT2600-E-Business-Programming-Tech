<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <h1>Sign Up</h1>
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

      $fname = $_POST['fname'] ?? null;
      $lname = $_POST['lname'] ?? null;
      $email = $_POST['email'] ?? null;
      $un = $_POST['un'] ?? null;
      $pwd = $_POST['pwd'] ?? null;

      $options = ['cost' => 12];
      $hash = password_hash($pwd, PASSWORD_BCRYPT, $options);
      

      $query = "INSERT INTO `users`(`first_name`, `last_name`, `email`, `username`, `password`) 
      VALUES ('$fname', '$lname', '$email', '$un', '$hash')";

      if(isset($_POST["submit"])){
        if($conn->query($query)===TRUE)
        {
          header("Location: http://localhost/Lab12/login.php");   
        }else{
            echo "You information was not entered.";
        }
      }

      $_SESSION["first"] = $fname;
      $_SESSION["last"] = $lname;
    ?>
</body>
<p>Fill in the following information:</p>
<form action = "" method="POST">
        <label for="firstname"> First Name:</label><br>
        <input type="text" id="fname" name="fname" value="" required><br>
        <label for="lastname"> Last Name:</label><br>
        <input type="text" id="lname" name="lname" value="" required><br>
        <label for="emailAddress"> E-mail:</label><br>
        <input type="text" id="email" name="email" value="" required><br>
        <label for="email"> username</label><br>
        <input type="text" id="un" name="un" value="" required><br>
        <label for="password"> Password:</label><br>
        <input type="text" id="pwd" name="pwd" value="" required><br><br>
        <input type="submit" name= "submit" value = "Create Account">
</form>
</html>