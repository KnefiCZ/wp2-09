<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ay:-)</title>
  </head>
  <body>
  <?php
      $number = 0;
      $attempt = 0;
      define('MAX_ATTEMPTS',10);
        while (($number <> 10)&&($attempt <= MAX_ATTEMPTS)) {
          $number=rand(0,20);
          echo $number . "<br>";
          $attempt++;

    ?>         <br />
    <?php


        }
            echo  $attempt . "pokusů.";
    ?>
  </body>
  </html>
