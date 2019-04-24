<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <link rel="stylesheet" href="css/normal.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/preview.css">
    <title>Digistorm Gallery</title>
  </head>
  <body>

    <header>
      <h1 id="title">Digistorm Gallery</h1>
    </header>

    <main>
      <div class="image-container">
        <?php
         $dir = new RecursiveDirectoryIterator("images");

         foreach (new RecursiveIteratorIterator($dir) as $filename => $file) {
           // echo $filename . ' - ' . $file->getSize() . ' bytes <br/>';
           if (exif_imagetype($filename) != FALSE) {
             echo "<img src=$filename class='thumbnail'>";
           }
         }

         ?>
      </div>
    </main>

    <div id="preview" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="modal-img">
    </div>

    <aside>
      <p>Vist <a href="">github page</a> for source code</p>
    </aside>

    <footer>
      <hr>
      <p>Created by <a href="http://www.guanhuading.com/" target="_blank">Guanhua Ding</a> for Dev Test of <a href="https://www.digistorm.com.au/" target="_blank">Digistorm</a></p>
    </footer>

    <script type="text/javascript" src="js/preview.js"></script>
  </body>
</html>
