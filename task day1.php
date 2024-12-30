<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  //phpinfo();

  const website_name = 'my php day1';

  echo website_name;

  echo'<br>';
  echo'<br>';

  echo "Server Name :". $_SERVER['SERVER_NAME'];
  echo'<br>';
  echo "Server Address :" .$_SERVER['SERVER_ADDR'];
  echo'<br>';
  echo "Server Port :" .$_SERVER['SERVER_PORT'];
  echo'<br>';
echo  "File Name :" .basename($_SERVER['PHP_SELF']);
   echo'<br>';

  echo "Full Path :". __FILE__;
  echo'<br>';
  echo'<br>';


  $x=10;
  switch( true)
  {
    case ($x<5):
      echo "stay at home";
      break;
    case ($x==5):
        echo "go to kindergrden";
        break;

    case ($x>=6 and $x<=12):   
      $vr = $x-6;
      echo"go to grade : $vr";
      break;
  }
?>
</body>
</html>