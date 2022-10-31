<?php
session_start();
?>
<!DOCTYPE html>
<html>
<style>
table, th, td{
border:2px solid black;
}
</style>
<body>
<?php
$ssl = array("PHP","ASP.NET","Ruby","Java","Scala", "Javascript","Python");
sort($ssl);
$arrlength = count($ssl);
echo "Display of index array values in alphabetical order, using for loop:<br>";
for($i=0; $i<$arrlength; $i++){
echo $ssl[$i]."<br>";
}
echo "<br>";
?>

<?php
$ssv = array("Python"=>"1.4", "ASP.Net"=>"8.3", "Ruby"=>"5.2", "PHP"=>"78.9", "Java"=>"3.6", "Scala"=>"2.0");
arsort($ssv);
echo "Table to display Server Side Language and Usage using a foreach loop:";
?>
<table>
<tr>
    <th>Server Side Language</th>
    <th>Usage Popularity</th>
    </tr>
<?php
foreach ($ssv as $ssl=>$usage){?>
   
    <tr>
    <td><?php echo ($ssl)?></td>
    <td><?php echo ($usage)."%"?>
    </td>
    </tr>

<?php }?>
</table>
<?PHP
$_SESSION["fullname"] = "Matthew Mosinski";
$_SESSION["courseid"] = "IT-2600";


setcookie("favlanguage", "C#",time()+3,);
setcookie("favoperatingsystem", "Windows",time()+3,);


?>
<a href = "lab7favorites.php"> Link to Session and Cookie page</a>
</body>
</html>
