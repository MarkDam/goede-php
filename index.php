<?php
  date_default_timezone_set('Europe/Amsterdam');

  $time = date("h:i:s");
  $text = "";
  $img = "";

  $t = date('H');

    if ($t < "6") {
    $text = " Goede nacht";
      $img = "night.png";
  } elseif ($t < "12") {
    $text = " Goede morgen!";
      $img = "morning.png";
  } elseif ($t < "18") {
    $text = " Goede middag!";
      $img = "afternoon.png";
  } elseif ($t < "24") {
    $text = " Goede avond!";
      $img = "evening.png";
  }
//  header("Refresh:1");
 ?>




<!DOCTYPE html>
<html>

  <head>

    <title>De tijd</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">

  </head>

  <body background="<?php echo $img ?>" onload="update()">
    <main>

      <div id="time"></div>

      <?php
      echo $text;
      ?>

    </main>

    <script src="script.js" type="text/javascript"></script>

  </body>

</html>
