<h1>Welcome Saravana, sandeep, kiran, sadath</h1>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $shine ="shokdhar";
 $phrase = "shokdhar";
 $lime ="Shokdhar academy";
  $shine[0] = 'B';
 echo "<h1>The information about Shokdhar Website</h1>";
 echo "<hr>";
 echo "String upper case = ";
 echo strtoupper (" $phrase<br>");
 echo "<hr>";
 echo "String lower case = ";
 echo strtolower (" $phrase");
 echo "<hr>";
 echo "The no character in the string = ";
 echo strlen (" $phrase");
 echo "<hr>";
 echo "The first character of the string is = ";
 echo $phrase[0];
 echo "<hr>";
 echo "The second character of the string is = ";
 echo $phrase[1];
 echo "<hr>";
 echo "The third character of the string is = ";
 echo $phrase[2];
 echo "<hr>";
 echo "The fourth character of the string is = ";
 echo $phrase[3];
 echo "<hr>";
 echo "The fifth character of the string is = ";
 echo $phrase[4];
 echo "<hr>";
 echo "The Sixth character of the string is = ";
 echo $phrase[5];
 echo "<hr>";
 echo "The Seventh character of the string is = ";
 echo $phrase[6];
 echo "<hr>";
 echo "The Eighth character of the string is = ";
 echo $phrase[7];
 echo "<hr>";
 echo " Replacing the first character of the string to = $shine ";
  echo "<hr>";
  echo "<h2>$lime</h2>";
echo "<hr>";
 echo " Replacing the characters of the '$lime' string to =  ";
echo str_replace("Shokdhar","Pigeon",$lime);
 echo "<hr>";
 $rose = "Jacky academy";
 echo "<h2>$rose</h2>";
 echo "<hr>";
 echo "Choosing the substring from the above string == ";
 echo substr($rose, 5);
 echo ";";
echo "<hr>";
 echo "Choosing three character from the above string == ";
echo substr($rose, 5, 4);
echo ";";
echo "<hr>";
echo "The addition of 5 and 9 = ";
echo 5+9 ;
echo "<hr>";
echo "The moduloys of 10%3 is =  ";
echo 10%3;
echo "<hr>";
echo "<h2>Increment operator  number = 10</h2>";
$num = 10;
$num++;
echo $num;
echo "<hr>";
echo "<h2>Decrement operator  number = 10</h2>";

$numb=10;
$numb--;
echo $numb;
echo "<hr>";
echo "<h2>Absolute value of a number  (-100),(-96)</h2>";
echo abs(-100);
echo "<br>";
echo abs(-96);
echo "<hr>";
echo "<h2>Power operation 2^4 </h2>";
echo pow(2,4);
echo "<hr>";
echo "<h2>Square root of 144 </h2>";
echo sqrt(144);
echo "<hr>";
echo "<h2>Comparing the two numbers 2 and 10 to identify the bigger number</h2>";
echo max(2, 10);
echo "<hr>";
echo "<h2>Comparing the two numbers 2 and 10 to identify the smaller number</h2>";
echo min(2, 10);
echo "<hr>";
echo "<h2>Round figure of a number 3.4</h2>";
echo round(3.4);
echo "<hr>";
echo "<h2>Rounding the number 3.1 to 4(ceil)</h2>";
echo ceil(3.1);
echo "<hr>";
echo "<h2>Rounding the number 3.9 to 3(floor)</h2>";
echo floor(3.9);
echo "<hr>";

?>


  </body>
</html>

