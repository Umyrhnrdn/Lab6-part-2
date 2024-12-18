<?php
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(400, 200);

// Define colors
$white = imagecolorallocate($image, 255, 255, 255);
$green = imagecolorallocate($image, 0, 255, 0);
$purple = imagecolorallocate($image, 128, 0, 128);

// Draw a green circle
imageellipse($image, 200, 100, 100, 100, $green);

// Draw a purple line
imageline($image, 50, 50, 350, 150, $purple);

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>
