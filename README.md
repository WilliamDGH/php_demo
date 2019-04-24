# Digistorm Junior Dev Test

A PHP app that reads the image files from a set directory and display them on browser.

It can detect file type and only select image files, it will go down the file path to scan for all sub directories as well.


## Approach

PHP is new to me, I know absolutely nothing about PHP before I began this test. I sort of learn on the task, by watching youtube tutorials and official [PHP manual](https://www.php.net/docs.php).

Firstly, I learnt how to read files and directories using `readdir` method, and using `glob` method to filter out none image files. Then I was facing with the challenge of go down to more than one level of directories.

Luckily, I found out about `RecursiveDirectoryIterator::__construct` method. And found an approach on Stack Overflow about using `RecursiveDirectoryIterator` and `RecursiveIteratorIterator` together to go down the directory tree as deep as possible.

## Challenges

Honestly, the whole project was a challenge. It's not about the test, but rather I had to solve it using a brand new language. I leant a lot through my failures, and hopefully my result is good enough to pass the test.

## Resources & Credits

PHP Method glob
https://php.net/manual/en/function.glob.php

Display Images from Directory in PHP
https://www.youtube.com/watch?v=nGLi4ykt__0

PHP Method id_dir
https://php.net/manual/en/function.is-dir.php

Get the Files inside a directory
https://stackoverflow.com/questions/1086105/get-the-files-inside-a-directory

PHP Method exif_imagetype
https://www.php.net/manual/en/function.exif-imagetype.php

Gather image file paths Recursively in PHP
https://stackoverflow.com/questions/8799774/gather-image-file-paths-recursively-in-php

Npm i create-php-app
https://www.npmjs.com/package/create-php-app

Modal Images
https://www.w3schools.com/howto/howto_css_modal_images.asp
