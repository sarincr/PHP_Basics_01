<!DOCTYPE html>
<html>
<body>
  <?php 



echo "<hr>";
$str = addcslashes("Hello World!","W");
echo($str); 


echo "<hr>";
$str = "Welcome to my humble Homepage!";
echo $str."<br>";
echo addcslashes($str,'m')."<br>";
echo addcslashes($str,'H')."<br>";



echo "<hr>";
$str = bin2hex("Hello World!");
echo($str);


echo "<hr>";
echo "Chopping a part Hello";
$str = "Hello World!";
echo $str . "<br>";
echo chop($str,"World!");

echo "<hr>";
echo "Split String to char   ";
$str = "Hello world!";
echo chunk_split($str,1,".");


echo "<hr>";
echo "Adding String of ... at 6th point ";
$str = "Hello world!";
echo chunk_split($str,6,"...");



echo "<hr>";
echo "Sting to Array ";
echo "Hello world. It's a beautiful day.";
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));

    
echo "<hr>";
echo "Joining the sting arrays";
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);

echo "<hr>";
echo "Joining the sting arrays with signs ";
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr)."<br>";
echo join("+",$arr)."<br>";
echo join("-",$arr)."<br>";


echo "<hr>";
echo "Repeating words for 13 times ";
echo str_repeat("Hello",13);

echo "<hr>";
echo "Lower case first word ";
echo lcfirst("Hello world!");



echo "<hr>";
echo "Currency formats    ";
$number = 1234.56;
setlocale(LC_MONETARY,"en_US");
echo money_format("The price is %i", $number);

echo "<hr>";
echo " Word count of Hello world is = ";
echo str_word_count("Hello world!");

echo "<hr>";
echo " Shuffle Hello world is = ";
echo str_shuffle("Hello World");


echo "<hr>";
echo "Compare Strings";
echo " Compare Hello world! and HELLO WORLD!   = ";
echo strcasecmp("Hello world!","HELLO WORLD!");
echo " Compare Hello world! and Hello world   =  ";
echo strcasecmp("Hello world!","Hello world");



echo "<hr>";
echo "Devide string at every 15th position  ";
$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>\n");


echo "<hr>";

$string = "Hello world. Beautiful day today.";
$token = strtok($string, " ");

while ($token !== false)
{
echo "$token<br>";
$token = strtok(" ");
}




echo "<hr>";
echo "Fist occurance of string world";
echo strstr("Hello world!","world");



echo "<hr>";
echo "Search   =";
echo strrchr("Hello world!","world");
echo "<hr>";


?>

</body>
</html>
