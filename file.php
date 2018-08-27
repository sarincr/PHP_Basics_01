<!DOCTYPE html>
<html>
<body>
 <?php

echo "<hr>";
echo "Writing a value to file : ";
$file = fopen("Sample.txt","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);

echo "<hr>";

$path= "./index.php";
//Show filename with file extension
echo basename($path) ."<br/>";
//Show filename without file extension
echo basename($path,".php");

echo "<hr>";
$file = fopen("Sample.txt", "r");
echo "Print file coontents   = ";
//Output a line of the file until the end is reached
$line = fgets($file);
echo "$line";
fclose($file);

echo "<hr>";
echo " Disk free space  of C Drive  = ";
echo diskfreespace("C:");


echo "<hr>";
echo " Copy contecnts of Sample.txt to text.txt";
echo copy("source.txt","target.txt");



echo "<hr>";


echo "<hr>";

echo "<hr>";


echo "<hr>";

echo "<hr>";




?>

</body>
</html>
