<?php
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(400, 100);

// Define colors
$yellow = imagecolorallocate($image, 255, 255, 0);
$black = imagecolorallocate($image, 0, 0, 0);

// Add text to the image
imagestring($image, 5, 120, 40, "100 Items Sold", $black);

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>
