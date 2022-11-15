<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php


$string = $_POST['pwd'];
if(preg_match_all("#[!^]#", $string, $matches)){
    echo "Contains invalid Characters: ";
    foreach($matches[0] as $match){
        echo $match;
    }
}
else{
    echo "Password accepted.<br>";
}

$weather = $_POST['weather'];
$sunny = "/sunny/i";
$cold = "/cold/i";
$rain = "/raining/i";
if(preg_match($sunny, $weather)){
    echo "<br>Wear sunscreen";
}
if(preg_match($cold, $weather)){
    echo "<br>Wear a hat";
}
if(preg_match($rain, $weather)){
    echo "<br>Bring an umbrella<br>";
}

$season = $_POST["favseason"];
$spring = "/spring/i";
$sum = "/summer/i";
$win = "/winter/i";
$fall = "/fall/i";

echo "<br>Spring received ".preg_match_all($spring, $season)." votes.<br>";
echo "Summer received ".preg_match_all($sum, $season)." votes.<br>";
echo "Fall received ".preg_match_all($fall, $season)." votes.<br>";
echo "Winter received ".preg_match_all($win, $season)." votes.<br>";



function divide($dividend, $divisor){
    if($divisor == 0){
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

try{
    echo divide(isset($_POST['operand1']), isset($_POST['operand2']));
} catch (Exception $e){
    echo "Divide by a number other than 0";
}
?>
</body>
</html>