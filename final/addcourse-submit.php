<!DOCTYPE html>
<html>
    <head></head>
<body>
    <?php
$courseid = $_POST['courseid'];
$title = $_POST['title'];
$cred = $_POST['credits'];
$cd = $_POST['desc'];
$pre  = $_POST['prereq'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "it1150";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
$query = "INSERT INTO `courses` (`course_id`, `title`, `credit_hrs`, `description`, `prerequisites`) 
VALUES ('$courseid','$title', '$cred', '$cd', '$pre')";

if($conn->query($query)===TRUE){
    echo "Course successfully added<br>";
}else{
    echo"Course NOT added<br>";
}

$conn->close();
?>
<a href = "courses.php">Back to Course List </a> </html>
</body>