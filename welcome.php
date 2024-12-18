<?php
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(400, 100);

// Define colors
$blue = imagecolorallocate($image, 0, 0, 255);
$white = imagecolorallocate($image, 255, 255, 255);

// Add text to the image
imagestring($image, 5, 100, 40, "Welcome to Our Shop!", $white);

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>
