<?php
// Start a session
session_start();

// Generate a random number for captcha
$random_number = rand(100000, 999999);
$_SESSION['captcha'] = $random_number;

// Calculate the width and height based on the desired aspect ratio
$width = 260;
$height = 35;

// Create an image with GD library
$im = imagecreatetruecolor($width, $height);

// RGB values for the desired background color (light gray)
$bg_red = 0;
$bg_green = 40;
$bg_blue = 70;

// Allocate colors for text and background
$text_color = imagecolorallocate($im, 230, 230, 230);   // White text color
$bg_color = imagecolorallocate($im, $bg_red, $bg_green, $bg_blue);   // RGB background color

// Fill the image with the background color
imagefilledrectangle($im, 0, 0, $width, $height, $bg_color);

// Calculate the position for the text to be centered
$text_width = imagefontwidth(5) * strlen($random_number);
$text_height = imagefontheight(5);
$text_x = ($width - $text_width) / 2;
$text_y = ($height - $text_height) / 2;

// Draw the text on the image
imagestring($im, 5, $text_x, $text_y,  $random_number, $text_color);

// Set the header to output the image as PNG
header('Content-type: image/png');

// Output the image
imagepng($im);

// Clean up resources
imagedestroy($im);
?>
