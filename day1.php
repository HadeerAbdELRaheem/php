<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> hello </h1>
<!--  write php between  <?php  ?>  -->
    <?php
   
    echo "test php ";
    // to write tag of html write it between echo 'tag';
    echo '<br>';
    #  
    echo "welcome to <span style ='color: red'>cms </span>track  ";
    #strat variable with $and anycharacter ex $r
    
    $n =5;
    $N = 10;
    $x =50;
    echo '<br>';
    echo "the value of n = $n";
    echo '<br>';
    echo "the value of N = $N";
   
 // notce to read variable  shoud use "" not ''
 echo '<br>';
 echo "Value of x= $x , Value of n = $n ";
 echo '<br>';
 print "Value of x= $x , Value of n = $n ";
 echo '<br>';
// different between echo and print ,two can print but print can not take two variable between ,
 echo $x,' ',$n;
 echo '<br>';
 #print $x,$n; erro 
 print $x;

 echo '<br>';


$flag = true; #boolen 
$text = 'hadeer'; #type string
$f = 9.4; #float 

echo gettype($f  ) ;#gettype give me type of any vartable
echo '<br>';
var_dump($f  );# like gettype but add value too
echo '<br>';

#we have constant variable dont use $ cant write letters only or write const befor

const PI =3.14;
echo PI;
#or wr have  other method 
echo '<br>';

define('LI',3.14);
echo LI;
echo '<br>';


    ?>
</body>
</html>