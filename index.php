<?php
$str='Anil';
echo phpinfo();
echo $str;
echo '<br />'.'$str';
echo '<br />'."$str";

echo '<br />'.'<br />';

echo PHP_EOL; 

// sum of string with logic interview question

$a = '1,2,3,4';
$sm= explode(',',$a);
$sum = array_sum($sm);
echo $sum;

echo '<br />'.'<br />';

 // JSON string
  $someJSON = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';

  // Convert JSON string to Array
  $someArray = json_decode($someJSON, true);
  print_r($someArray);        // Dump all data of the Array
  echo $someArray[0]["name"]; // Access Array data

echo '<br />'.'<br />';

  // Convert JSON string to Object
  $someObject = json_decode($someJSON);
  print_r($someObject);      // Dump all data of the Object
  echo $someObject[0]->name; // Access Object data
?>