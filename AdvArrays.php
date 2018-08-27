<!DOCTYPE html>
<html>
<body>
 <?php

echo "<hr>";
$xarray=array("PHP","JS","HTML");
echo "Learning $xarray[0],$xarray[1],$xarray[2]";

echo "<hr>";
$xlist=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " .$xlist['Peter']. " years old.";

echo "<hr>";
$xtwod=array
  (
  array("Volvo",100,96),
  array("BMW",60,59),
  array("Toyota",110,100)
  );
echo ($xtwod[0][0]);


echo "<hr>";
echo "Chnaging case of an Array  ";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));

echo "<hr>";
echo "Chnaging case of an Array  ";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_LOWER));

echo "<hr>";
$a = array(
  array(
    'roll_no' => 789,
    'name' => 'Peter',

  ),
  array(
    'roll_no' => 456,
    'name' => 'John',
  ),
  array(
    'roll_no' => 123,
    'name' => 'Jacob',)
);

$last_names = array_column($a, 'roll_no');
print_r($last_names);



echo "<hr>";
$a = array(
  array(
    'roll_no' => 789,
    'name' => 'Peter',

  ),
  array(
    'roll_no' => 456,
    'name' => 'John',
  ),
  array(
    'roll_no' => 123,
    'name' => 'Jacob',)
);

$last_names = array_column($a, 'roll_no','name');
print_r($last_names);


echo "<hr>";
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r($cars);
print_r(array_chunk($cars,2));


echo "<hr>";
echo "Adding one array as key and one as value ";
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
echo "";
echo($age);
echo "";
echo($fname);
echo "";
$c=array_combine($fname,$age);
print_r($c);


echo "<hr>";
$a=array("A","Cat","Dog","A","Dog");
print_r($a);
print_r(array_count_values($a));


echo "<hr>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
echo "A1\n";
echo("$a1");
echo "A2\n";
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
echo("$a2");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");
echo "A3\n";
echo("$a3");
$result=array_diff($a1,$a2,$a3);
print_r($result);


echo "<hr>";
echo "Add words from position, number ";
$a1=array_fill(3,4,"blue");
echo nl2br($a1);
print_r($a1);

echo "<hr>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

$result=array_intersect($a1,$a2,$a3);
print_r($result);

echo "<hr>";

$a1=array_fill(3,4,"blue");
$b1=array_fill(0,1,"red");
print_r($a1);
echo "<br>";
print_r($b1);


echo "<hr>";
$a1=array("red","green");
echo "A1 = ";
print_r($a1);

$a2=array("blue","yellow");
echo  "A2 = ";
print_r($a2);
echo "Merged = ", $a2;
print_r(array_merge($a1,$a2));
echo "Reccursive merge = ";
print_r(array_merge_recursive($a1,$a2));


echo "<hr>";
echo "sorting = ";
$a=array("Dog","Cat","Horse","Bear","Zebra");
print_r($a);
array_multisort($a);
echo "Sorted array  = array('' => , ); = array('' => , );";
print_r($a);



echo "<hr>";
echo "Multisorting ";
$a1=array("Dog","Dog","Cat");
print_r($a1);
$a2=array("Pluto","Fido","Missy");
print_r($a2);
array_multisort($a1,$a2);
print_r($a1);
print_r($a2);

echo "<hr>";
$a1=array(1,30,15,7,25);
$a2=array(4,30,20,41,66);
$num=array_merge($a1,$a2);
array_multisort($num,SORT_DESC,SORT_NUMERIC);
print_r($num);
echo "<hr>";

echo "<hr>";
$a=array(5,5,2,10);
print_r($a);
echo "Product =";
echo(array_product($a));




echo "<hr>";
echo "Push Stack";
$a=array("red","green");
print_r($a);
echo "pushing blue,yellow";
array_push($a,"blue","yellow");
print_r($a);




echo "<hr>";
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
print_r($a);
print_r($random_keys);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];






echo "<hr>";
$a1=array("red","green");
print_r($a1);
$a2=array("blue","yellow");
print_r($a2);
echo "Replacing array 1 with 2  =  ";
print_r(array_replace($a1,$a2));

$a1=array("red","green","blue","yellow");
$a2=array(0=>"orange",3=>"burgundy");
print_r($$a1,$a2);
echo "Replace ";
print_r(array_replace($a1,$a2));


echo "<hr>";
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r($a);
echo " reversig the array ";
print_r(array_reverse($a));


echo "<hr>";
$a=array("a"=>52.2,"b"=>13.7,"c"=>0.9);
print_r($a);
echo("Sum of array = ");
echo array_sum($a);

echo "<hr>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
print_r($a1);
print_r($a2);
array_splice($a1,0,2,$a2);

print_r($a1);


echo "<hr>";
$a=array("a"=>"red","b"=>"green","c"=>"blue");
print_r($a);
echo array_shift($a);
print_r ($a);
echo array_shift($a);
print_r ($a);


echo "<hr>";
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
print_r($a1);
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");
print_r($a2);
$result=array_udiff($a1,$a2,"myfunction");
print_r($result);

?>

</body>
</html>
