<!DOCTYPE html>
<html>
    <body>

<?php 
$servername = "localhost";
$username = "root";
$password = "mattmos07";
$dbname = "it1150";

$conn = new mysqli($servername, $username, $password, $dbname);

if ( $conn->connect_error)
{
    die("connection failed: " .$conn->connect_error);
}
echo "Connected Succesfully";

$sql = "SELECT course_id, title, credit_hrs FROM courses";
$result = $conn ->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<br><u>Course id:</u> " . $row["course_id"]. " - <u>Title:</u> " . $row["title"]. " - <u>Cred hrs:</u> " 
        . $row["credit_hrs"]. "<br>";
    }
} else{
    echo " 0 results";
}
$conn->close();
?>
</body>
</html>