<?php
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(400, 150);

// Define colors
$lightGray = imagecolorallocate($image, 211, 211, 211);
$black = imagecolorallocate($image, 0, 0, 0);

// Specify the path to the TTF font file
$fontPath = "font\JosyWine-G33rg.ttf";

// Add text using the custom font
if (file_exists($fontPath)) {
    imagettftext($image, 20, 0, 50, 75, $black, $fontPath, "Hello, User!");
} else {
    imagestring($image, 5, 50, 60, "Font file missing!", $black);
}

// Output the image
imagepng($image);

// Free up memory
imagedestroy($image);
?>