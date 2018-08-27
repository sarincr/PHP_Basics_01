<!DOCTYPE html>
<html>
<body>
 <?php

echo "<hr>";
echo "Getting days in a month";
$d=cal_days_in_month(CAL_GREGORIAN,10,2005);
echo "There was $d days in October 2005";




echo "<hr>";
echo "Find a date 40 days from a day ";
$date=date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");



echo "<hr>";
$date=date_create("2013-03-15");
print_r($date);
echo(" Changing data format to  = ");
echo date_format($date,"Y/m/d");


echo "<hr>";
$date=date_create();
date_timestamp_set($date,1371803321);
echo date_format($date,"U = Y-m-d H:i:s");


echo "<hr>";
echo "Sunset of a purticular point  of A and L = 38.4,-9,90    ";

echo("Lisbon, Portugal: Date: " . date("D M d Y"));
echo("<br>Sunrise  time: ");
echo(date_sunrise(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));
echo "<hr>";
echo "Sunset of a purticular point  of A and L = 38.4,-9,90    ";

echo("Lisbon, Portugal: Date: " . date("D M d Y"));
echo("<br>Sunset time: ");
echo(date_sunrise(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));


echo "<hr>";
$date1=date_create("2013-01-01");
$date2=date_create("2013-02-10");
print_r($date1);
print_r($date2);
$diff=date_diff($date1,$date2);
echo "Date difference in number of days =  ";
echo $diff->format("Total number of days: %a.");



echo "<hr>";
date_default_timezone_set("Asia/Bangkok");
echo " Setting up Time zone   = ";
print_r(date_default_timezone_set("Asia/Bangkok"));
echo "Getting back timezones   = " ;
print_r(date_default_timezone_get());



echo "<hr>";
echo "<hr>";


?>

</body>
</html>
