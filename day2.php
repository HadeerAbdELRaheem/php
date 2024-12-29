<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    # how to write fuction 
 function writeMessage(){

    echo "you are really a nice person ";
 }
 // call function in php
    writeMessage();
    echo'<br>';
    echo'<br>';
    echo'<br>';
// use parameetrs in function 

    function addfun ($sm1,$sm2){
        $sum =$sm1+$sm2;
        echo "sum of the two number is : $sum ";
    }

    addfun(10,5);

    echo'<br>';
    echo'<br>';
//use return function 
    function addfunction ($sm1,$sm2){
        $sum =$sm1+$sm2;
        return $sum ;
    }
// if i don't write echo will not print result 
    $result=addfunction(20,5);
     echo $result;
     echo'<br>';
     echo'<br>';


  #set defult value 
     function subfunction ($sm1=10,$sm2=5){
        $sum =$sm1-$sm2;
        return $sum ;
    }
    echo nl2br("result = " ."\n". subfunction() );
        
 # concat in php .
 echo'<br>';

#how to count letters in string 
echo strlen("hello ");

echo'<br>';
#i want to know position of letter
echo strpos ("hello world ","w");
echo'<br>';
# count words 
echo str_word_count ("hello world");

#repelce word to word 

print_r($_SERVER);



?>
</body>
</html>