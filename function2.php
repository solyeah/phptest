<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basics</h2>
    <?php
    function basic(){
      echo "Hi<br>";
      echo "Hi<br>";
    }
    basic();
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
    function sum($a,$b){
      echo $a+$b;
      echo "<br>";
    }
    sum(1,2);
    sum(4,5);
    ?>
    <h2>return </h2>
    <?php
    function sum2($l, $r){
      return $l+$r;
    }
    print(sum2(5,5));
    file_put_contents('result.txt',sum2(2,2));
    ?>


  </body>
</html>
