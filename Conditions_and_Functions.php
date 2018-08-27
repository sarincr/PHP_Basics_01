<!DOCTYPE html>
<html>
<body>
 <?php

echo "<hr>";
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
print_r($x);
print_r($y);
print_r($x + $y);  

echo "<hr>";
echo "Check === ";
var_dump($x == $y);
echo "Check != ";
var_dump($x != $y);
echo "Check != ";
var_dump($x !=  $y);

echo "<hr>";
$t = 10;

if ($t < 20) {
    echo "Have a good day!";
}

echo "<hr>";

if ($t < "20") {
    echo "$st is less than 20";
} else {
    echo "$st is greater than 20";
}



echo "<hr>";
if ($t < 20) {
    echo "$st is less than 20";
} 
elseif ($t > 20) 
{
	echo "$st is greater  than 20";
}

echo "<hr>";
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}


echo "<hr>";
$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 


echo "<hr>";
$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);



echo "<hr>";

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
} 
echo "<hr>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

echo "<hr>";
function writeMsg() {
    echo "Hello world!";
}

writeMsg();


?>

</body>
</html>
