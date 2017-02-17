<?php

require 'PHPBasicsImageGalleryReader.php';

$images = directoryReader('images');

if (!$images) {
    die('Could not load files.');
}

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Gallery</title>
    </head>
    <body>
        <?php foreach ($images as $image): ?>
                <img src="<?php echo $image ?>">
        <?php endforeach; ?>
    </body>
</html>
