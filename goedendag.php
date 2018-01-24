    <?php
    date_default_timezone_set("Europe/Amsterdam");
    $t = date("H");

    if ($t < "12") {
        $text = "Goedemorgen";
        $background = "morning";
    } elseif ($t < "18") {
        $text = "Goedemiddag";
        $background = "afternoon";
    } elseif ($t < "00") {
        $text = "Goedenavond";
        $background = "evening";
    } else {
        $text = "Goedenacht";
        $background = "night";
    }
    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>goedendag</title>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body id="<?php echo $background; ?>" onload="startTime()">
    <div>
      <h1>
        <span id="txt"><?php echo $text; ?></span> het is<br>
        <span id="time"></span><br>
      </h1>
      <h2><?php echo date("d m Y");?></h2>
    </div>

    <i class="fa fa-fighter-jet plane fa-5x" aria-hidden="true"></i>
    <i class="fa fa-fighter-jet plane1 fa-5x" aria-hidden="true"></i>
    <i class="fa fa-fighter-jet plane2 fa-5x" aria-hidden="true"></i>
    <i class="fa fa-fighter-jet plane3 fa-5x" aria-hidden="true"></i>
  </body>
</html>
