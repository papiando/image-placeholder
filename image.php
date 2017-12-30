<?php
/******************************************************************************
 *	Usage:
 *		Call /image.php?src=urlencoded_path_to_image&width=width_in_pixels
 *****************************************************************************/
$source = imagecreatefromjpeg($_GET['url']);
$width = imagesx($source);
$height = imagesy($source);
$ratio = $width / $height;
$newWidth = $_GET['width'];
$newHeight = $newWidth / $ratio;
$newRatio = $newWidth / $newHeight;
$target = imagecreatetruecolor($newWidth,$newHeight);
imagecopyresampled($target,$source,0,0,0,0,$newWidth,$newHeight,$width,$height);
header("Content-type: image/jpeg");
imagejpeg($target);
imagedestroy($source);
imagedestroy($target);
?>