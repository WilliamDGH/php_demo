<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Demo</title>
  </head>
  <body>

    <?php
      $characterName = "John";
      $characterAge = 35;
      $phrase= "";

      echo "<h1>My Site</h1>";
      echo "<p>This is my site</p>";
      echo "<p>Welcome to $characterName's site</p>";
      echo strtoupper("<p>$characterName's age is $characterAge</p>");
      echo "<hr>";
     ?>
  </body>
</html>
