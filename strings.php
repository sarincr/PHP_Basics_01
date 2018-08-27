<!DOCTYPE html>
<html>
<body>
  <?php echo("Hello Php ");
  echo "<hr>";
  $xstring="Hello PHP world";
  echo "$xstring";
  echo("<p1> Convert to Uppercase of $xstring to lower case as :    </p1> ");
  echo strtolower($xstring);
  echo "<hr>";
  echo strtolower("Convert this String to LOWER");

  echo "<hr>";
  $xstring="Hello PHP world";
  echo("<p1>  1st letter of $xstring = $xstring[0]   </p1> ");

  echo "<hr>";
  $xstring[0]="K";
  echo("<p1>  1st letter is chaged to  $xstring[0]   </p1> ");
  echo "$xstring";

  echo "<hr>";
  $xstring="Hello PHP world";
  echo "String Replace : Hello is replaced by Hi";
  echo(str_replace("Hello", "Hi",$xstring));


  echo "<hr>";
  $xstring="Hello PHP world";
  echo " Substring of Sting 6th position 3 points   ";
  echo(Substr($xstring,6,3));





?>

</body>
</html>
