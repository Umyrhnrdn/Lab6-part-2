<?php
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(300, 150);

// Define colors
$white = imagecolorallocate($image, 255, 255, 255);
$red = imagecolorallocate($image, 255, 0, 0);
$black = imagecolorallocate($image, 0, 0, 0);

// Draw the rectangle
imagefilledrectangle($image, 50, 50, 250, 100, $red);

// Add text to the rectangle
imagestring($image, 5, 120, 70, "Sale!", $black);

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>
