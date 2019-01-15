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
        while (($number <> 10)&&($attempt <= 9)) {
          $number=rand(0,20);
          echo $number . "<br>";
          $attempt++;

    ?>         <br />
    <?php
    
          echo  $attempt . "pokusů.";
        }
    ?>
  </body>
  </html>
