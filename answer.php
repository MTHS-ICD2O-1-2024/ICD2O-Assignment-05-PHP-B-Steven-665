<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="LCM calculator in PHP" />
  <meta name="keywords" content="maths, icd2o" />
  <meta name="author" content="Emre Guzel" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_green.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="css/style.css">
  <title>LCM Calculator in PHP</title>
</head>

<body>
  <div class="container-2">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">LCM Calculator in PHP</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <br><br>
        <?php
        $firstNum = $_GET["first-number"];
        $secondNum = $_GET["second-number"];

        if (!is_numeric($firstNum) || !is_numeric($secondNum) || $firstNum <= 0 || $secondNum <= 0) {
          echo "<b>Please enter two positive integers.</b>";
        } else {
          $a = (int)$firstNum;
          $b = (int)$secondNum;

          function gcd($x, $y) {
            while ($y != 0) {
              $temp = $y;
              $y = $x % $y;
              $x = $temp;
            }
            return $x;
          }

          $gcd = gcd($a, $b);
          $lcm = ($a * $b) / $gcd;

          echo "<b>First number: $a</b><br>";
          echo "<b>Second number: $b</b><br>";
          echo "<b>The LCM of $a and $b is: <strong>$lcm</strong></b>";
        }
        ?>
        <br><br>
        <div class="page-content-answer">
          <a href="./index.php">Return ...</a>
        </div>
        <br>
      </main>
    </div>
  </div>
</body>

</html>
