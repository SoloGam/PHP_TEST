<?php

  $age = $_GET['age'];

  if ($age < 7) echo "ceva";
  elseif ($age < 21) echo "1";
  elseif ($age < 37) echo "2";
  elseif ($age < 52) echo "3";
  elseif ($age < 71) echo "4";

  // switch ($age) {
  //   case ($age < 7):
  //     echo "ceva";
  //     break;
  //   case ($age < 21):
  //     echo "1";
  //     break;
  // }
?>
