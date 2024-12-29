<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    #\n work with function nl2br ()
 function subfunction ($sm1=10,$sm2=5){
    $sum =$sm1-$sm2;
    return $sum ;
}
echo nl2br("result = " ."\n". subfunction() );
echo'<br>';

# display $_server in reafable format 


$ser = $_SERVER;
foreach ($ser as $key => $val) {
    echo "$key = $val <br />";
}
echo'<br>';
echo'<br>';
#function
$string ="hello";
 echo   bin2hex($string ); # turn letters in hexde
 echo'<br>';
 echo'<br>';


 $string1 = "banana";
 $string2 = "Banana";
 
 $result = strcmp($string1, $string2);#compares two strings case-sensitive
 
 if ($result < 0) {
     echo "'$string1' is less than '$string2'.";
 } elseif ($result > 0) {
     echo "'$string1' is greater than '$string2'.";
 } else {
     echo "'$string1' is equal to '$string2'.";
 }
 echo'<br>';
 echo'<br>';
echo substr($string1,2); #cut the word from  index (2) and print the rest

echo'<br>';

 echo ucfirst( $string1); #Converts the first character of a string to uppercase

 echo'<br>';
 echo'<br>';
 $numbers[1]=45;
 $numbers[0]=12;
 $numbers[3]=25;
 $numbers[2]=10;
   ksort($numbers); #arrang array ref index
   foreach($numbers as $value)
   {
    echo "Value is $value <br />";
   }

   $sum = array_sum($numbers);
   $average = $sum / count($numbers);
 echo $sum ," ", $average;

 echo'<br>';
 echo'<br>';
 arsort ($numbers);
 print_r($numbers);
 echo'<br>';
 echo'<br>';



 $arr4 = array("Sara" => 31, "John" => 41, "Walaa" => 39,"Ramy" => 40);
  asort($arr4); #sort by value ass
  print_r($arr4);
  echo'<br>';
  echo'<br>';
  foreach ($arr4 as $value)
  {
    echo "Value is $value <br />";
  }
  echo'<br>';
 echo'<br>';
 ksort($arr4); # sort by key ass
print_r($arr4);

echo'<br>';
echo'<br>';
arsort($arr4); #sort by value des
print_r($arr4);
echo'<br>';
echo'<br>';
krsort($arr4); #sort by key des
print_r($arr4);
echo'<br>';
echo'<br>';
    ?>
</body>
</html>