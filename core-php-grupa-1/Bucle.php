<!DOCTYPE html>
<html lang="ro" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>While</title>
  </head>
  <body>
    <?php
      $n = $_GET['n'];
      $sum = 0;
      $i = 0;

      while ($i < $n) {
        $sum = $sum + $i;
        $i = $i + 1;
      }
      echo $sum;
       ?>


  </body>
</html>
