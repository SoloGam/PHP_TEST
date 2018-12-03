<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bine ati venit!</title>
  </head>
  <body>
    <h1>Bine ati venit!</h1>
    <p>

      <?php
        switch ($_GET['a'] <=> $_GET['b']) {
          case '1':
              echo 'a este mai mare';
            break;
          case '-1':
              echo 'b este mai mare';
            break;
          case '0':
              echo 'a si b sunt egale';
            break;
          default:

            break;
        }

       ?>

    </p>
  </body>
</html>
