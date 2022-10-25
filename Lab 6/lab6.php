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
  $first = $_POST['first'];
  $middle = $_POST['middle'];
  $last = $_POST['last'];

  printf($first." ".substr($middle,0, -3).". ".$last."<br>"."<br>");

  $split = $_POST['split'];
  $arr_sp = explode("-", $split);
  foreach($arr_sp as $i){
    echo $i."<br>";
  }

  $shuffle = $_POST['shuffle'];
  echo "<br>".str_shuffle($shuffle)."<br>"."<br>";

  $tolower = $_POST['tolower'];
  echo strtolower($tolower)."<br>"."<br>";

  $compare1=$_POST['compare1'];
  $compare2=$_POST['compare2'];
  
  echo strcmp($compare1, $compare2)."<br>".strcasecmp($compare1, $compare2)."<br>"."<br>";

  $num1=$_POST['num1'];
  $num2=$_POST['num2'];
  $num1=array_map('intval',str_split($num1));
  $num2=array_map('intval',str_split($num2));
  $fre=4;
  echo "2401"."<br>"."lowest#: ".min($num1)."<br>"."highest#: ".max($num1)."<br>"."average: ".array_sum($num1)/$fre."<br>"."<br>";
  echo "1100"."<br>"."lowest#: ".min($num2)."<br>"."highest#: ".max($num2)."<br>"."average: ".array_sum($num2)/$fre."<br>"."<br>";
  
  echo "Generated random integer: ".rand(0,100)."<br><br>";

  $cur=$_POST['currency'];
  echo "$".sprintf("%01.2f", $cur)."<br><br>";

$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];
$hour=$_POST['hour'];
$minute=$_POST['minute'];
$date = mktime($hour, $minute, 0, $month, $day, $year );
echo date("Y-m-d h:i:s", $date)."<br>";
echo date("m/d/Y h:ia", $date)."<br>";
$now = date("Y-m-d h:i");

$timestamp1=strtotime($date);
$timestamp2=strtotime($now);
echo "There are ".$hour=abs($timestamp2-$timestamp1)/(60*60)." hour(s) between the above date and now.";
  ?>
</body>
</html>