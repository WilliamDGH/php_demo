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

        <!-- Begin of PHP code -->
        <?php
        // The image directory
         $dir = new RecursiveDirectoryIterator("images");

         // Iterate through sub directories
         foreach (new RecursiveIteratorIterator($dir) as $filename => $file) {
           // Check if file was image file type
           if (exif_imagetype($filename) != FALSE) {
             // Output the image as a HTML element
             echo "<img src=$filename class='thumbnail'>";
           }
         }

         ?>
         <!-- End of PHP -->

      </div>
    </main>

    <div id="preview" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="modal-img">
    </div>

    <aside>
      <p>Images are scanned and selected by PHP script</p>
      <button>Vist <a href="https://github.com/WilliamDGH/php_demo">github page</a> for source code</button>
    </aside>

    <footer>
      <hr>
      <p>Created by <a href="http://www.guanhuading.com/" target="_blank">Guanhua Ding</a> for Dev Test of <a href="https://www.digistorm.com.au/" target="_blank">Digistorm</a></p>
    </footer>

    <!-- Image Preview JavaScript Code -->
    <script type="text/javascript" src="js/preview.js"></script>
  </body>
</html>
